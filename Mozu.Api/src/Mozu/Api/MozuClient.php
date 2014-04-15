<?php

namespace Mozu\Api;

require_once __DIR__ . '/../../../vendor/autoload.php';
use Mozu\Api\iApiContext;
use Guzzle\Service\Client as Client;
use Mozu\Api\Security\AppAuthenticator;
use Mozu\Api\Headers;
use Mozu\Api\Resources\Platform\TenantResource;
use Mozu\Api\Security\UserAuthenticator;
use Mozu\Api\Security\CustomerAuthenticator;
use Mozu\Api\Utilities\HttpHelper;
use Mozu\Api\Security\AuthenticationScope;

class MozuClient {
	private $baseAddress;
	private $httpResponseMessage = null;
	private $baseUrl = "";
	private $mozuUrl = "";
	private $apiContext = null;
	private $headers = array();
	private $jsonBody = null;
	private $request = null;
	private $result = null;
	private $response = null;
	private $isStreamContent = false;
	private $contentType = null;
	
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
		if (strpos($this->response->getContentType(),"json") != false)
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
	      $this->response = $this->request->send ();
	    } catch (\Exception $e) {
	    	 HttpHelper::checkError($e, $this->apiContext);
	    }
    
		return $this;
	}

	private function buildClientAndRequest() {
		$this->client = new Client ( $this->baseAddress, HttpHelper::getGuzzleConfig());
		$authentication = AppAuthenticator::getInstance();
		if (!isset($authentication)) {
			throw new \Exception("Authentication is not initailized");
		}
		
		if ($this->mozuUrl->getVerb()== ""  || $this->mozuUrl->getUrl() == "" ) {
			throw new \Exception("Verb or Resource Url is missing in MozuUrl");
		}
		
		if ($this->apiContext != null && $this->apiContext->getUserAuthTicket() != null) {
			echo "Setting user Auth";
			$this->setUserAuth();
		}
		
		$this->request = $this->client->createRequest($this->mozuUrl->getVerb(), $this->mozuUrl->getUrl(), null, $this->jsonBody );
		$this->request = $authentication->addAuthHeader($this->request);
		if (!$this->isStreamContent)
			$this->withHeader('Content-Type', 'application/json');
		foreach ($this->headers as $property=>$value) {
			$this->request->setHeader($property, $value);
		}
		$this->request->setHeader(Headers::X_VOL_VERSION,Version::$apiVersion);
		
		if ($this->contentType != null) {
			$this->request->setHeader(Headers::CONTENT_TYPE,$this->contentType);
		}
		
	    // turn off urlencoding so that filter and sortby params work correctly
	    $query = $this->request->getQuery();
	    $query->useUrlEncoding(false);
    
		
	}
		
	private function validateContext() {
		if ($this->mozuUrl->getLocation() == UrlLocation::TENANT_POD)
		{
			if ($this->apiContext->getTenantId() < 0)
				throw new \Exception("TenantId is missing");
		
			if (trim($this->apiContext->getTenantUrl()) == "")
			{
				$tenantResource = new TenantResource();
				
				$tenant = $tenantResource->getTenant($this->apiContext->getTenantId());
		
				if ($tenant == null)
					throw new \Exception("Tenant " . $apiContext->getTenantId() . " Not found");
				$this->baseAddress = HttpHelper::getUrl($tenant->domain);
			}
			else
				$this->baseAddress = HttpHelper::getUrl($this->apiContext->getTenantUrl());
		}
		else
		{
			$authentication = AppAuthenticator::getInstance();
			if ($authentication == null)
			throw new \Exception("App is not initialized. Use AppAuthenticator to initialize the app.");
			if ($authentication->getBaseUrl() == "")
				throw new \Exception("Authentication.Instance.BaseUrl is missing");
		
			$this->baseAddress = $authentication->getBaseUrl();
		}
	}
}
?>