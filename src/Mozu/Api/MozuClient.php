<?php

namespace Mozu\Api;

use Logger;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Guzzle\Http\Query;
use Mozu\Api\Security\AppAuthenticator;
use Mozu\Api\Resources\Platform\TenantResource;
use Mozu\Api\Security\UserAuthenticator;
use Mozu\Api\Security\CustomerAuthenticator;
use Mozu\Api\Utilities\HttpHelper;
use Mozu\Api\Security\AuthenticationScope;

class MozuClient {
	private $baseAddress;
	private $baseUrl = "";
	private $mozuUrl = "";
	private $apiContext = null;
	private $headers = [];
	private $jsonBody = null;
	private $request = null;
	private $response = null;
	private $isStreamContent = false;
	private $contentType = null;
	private $client = null;
    private $logger = null;

    public function __construct() {
        $this->logger = Logger::getLogger("MozuClient");
    }

	public function withBaseUrl($baseUrl) {
		$this->baseUrl = $baseUrl;
		return $this;
	}

	private function setUserAuth() {
		$newTicket = null;
		$authTicket = $this->apiContext->getUserAuthTicket();
		if ($authTicket->authenticationScope == AuthenticationScope::CUSTOMER)
			$newTicket = CustomerAuthenticator::ensureAuthTicket($authTicket);
		else
			$newTicket = UserAuthenticator::ensureAuthTicket($authTicket);
		if ($newTicket != null)
		{
			$authTicket = $newTicket->authTicket;
		}
		
		var_dump($authTicket);
		$this->withHeader(Headers::X_VOL_USER_CLAIMS, $authTicket->accessToken);
		$this->apiContext->setUserAuthTicket($authTicket);
		return $this;
	}
	
	public function withResourceUrl(MozuUrl $mozuUrl) {
		
		$this->mozuUrl = $mozuUrl;
		return $this;
	}
		
	public function withContext(iApiContext $apiContext) {
		$this->apiContext = $apiContext;
		
		if ($apiContext != null && $apiContext->getTenantId() > 0) {
			$this->withHeader(Headers::X_VOL_TENANT,$apiContext->getTenantId());
		}
		if ($apiContext != null && $apiContext->getMasterCatalogId() > 0) {
			$this->withHeader(Headers::X_VOL_MASTER_CATALOG,$apiContext->getMasterCatalogId());
		}
		if ($apiContext != null && $apiContext->getCatalogId() > 0) {
			$this->withHeader(Headers::X_VOL_CATALOG,$apiContext->getCatalogId());
		}
		if ($apiContext != null && $apiContext->getSiteId() > 0) {
			$this->withHeader(Headers::X_VOL_SITE,$apiContext->getSiteId());
		}
		
		return $this;
	}
	
	public function withBody($body) {
		$this->jsonBody = json_encode ( $body );
		$this->isStreamContent = false;
		return $this;
	}
	
	public function withStreamBody($body) {
		$this->jsonBody = $body;
		$this->isStreamContent = true;
		return $this;
	}
	
	public function getResult() {
        foreach ($this->response->getHeaders() as $name => $values) {
            $this->logger->info($name . ': ' . implode(', ', $values));
        }
		if (strpos($this->response->getHeader("Content-Type")[0],"json") != false)
			return  json_decode ( $this->response->getBody(true) );
		else
			return $this->response->getBody();
	}
	
	public function getHttpClient() {
		$this->buildClientAndRequest();
		return $this->client;
	}
	
	public function withHeader($header, $value) {
		if ($header == Headers::CONTENT_TYPE)
			$this->contentType = $value;
		else
			$this->headers = array_merge($this->headers, array($header=>$value));
		return $this;
	}
	
	public function execute() {
		$this->validateContext();
		$this->buildClientAndRequest();
	    try {
	      $this->response = $this->client->sendAsync ($this->request)->wait();
	    } catch (\Exception $e) {
	    	 HttpHelper::checkError($e, $this->apiContext);
	    }
    
		return $this;
	}

	private function buildClientAndRequest() {

		$authentication = AppAuthenticator::getInstance();
		if (!isset($authentication)) {
			throw new \Exception("Authentication is not initialized");
		}
		
		if ($this->mozuUrl->getVerb()== ""  || $this->mozuUrl->getUrl() == "" ) {
			throw new \Exception("Verb or Resource Url is missing in MozuUrl");
		}

        $this->client = new Client (['base_uri' => $this->baseAddress,  'verify' => false, 'useUrlEncoding' => false]);

        if ($this->apiContext != null && $this->apiContext->getUserAuthTicket() != null) {
			$this->setUserAuth();
		}

        $this->headers = $authentication->addAuthHeader($this->headers);

        if (!$this->isStreamContent)
            $this->withHeader('Content-Type', 'application/json');
        $this->withHeader(Headers::X_VOL_VERSION,Version::$apiVersion);

        if ($this->contentType != null) {
            $this->withHeader(Headers::CONTENT_TYPE,$this->contentType);
        }

        $this->logger->info("Request URI : ".$this->mozuUrl->getUrl());
        $this->request = new Psr7\Request($this->mozuUrl->getVerb(),$this->mozuUrl->getUrl(), $this->headers,$this->jsonBody);
	}
		
	private function validateContext() {
		if ($this->mozuUrl->getLocation() == UrlLocation::TENANT_POD)
		{
			if ($this->apiContext->getTenantId() < 0)
				throw new \Exception("TenantId is missing");
		
			if (trim($this->apiContext->getTenantUrl()) == "")
			{
				$tenantResource = new TenantResource(new ApiContext());
				
				$tenant = $tenantResource->getTenant($this->apiContext->getTenantId());
		
				if ($tenant == null)
					throw new \Exception("Tenant " . $this->apiContext->getTenantId() . " Not found");
				$this->baseAddress = HttpHelper::getUrl($tenant->domain);
			}
			else
				$this->baseAddress = HttpHelper::getUrl($this->apiContext->getTenantUrl());
		}
        else if ($this->mozuUrl->getLocation() == UrlLocation::PCI_POD)
        {
            if ($this->apiContext->getTenantId() < 0)
                throw new \Exception("TenantId is missing");

            if (!isset(MozuConfig::$basePciUrl))
                throw new \Exception("MozuConfig basePciUrl is empty. A valid value is required");

            $this->baseAddress = MozuConfig::$basePciUrl;
        }
		else
		{
			$authentication = AppAuthenticator::getInstance();
			if ($authentication == null)
			    throw new \Exception("App is not initialized. Use AppAuthenticator to initialize the app.");
			if (!isset(MozuConfig::$baseAppAuthUrl))
				throw new \Exception("MozuConfig baseAppAuthUrl is empty. A valid value is required");
		
			$this->baseAddress = MozuConfig::$baseAppAuthUrl;
		}
	}
}
?>