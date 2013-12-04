<?php

namespace Mozu\Api;

require_once __DIR__ . '/../../../vendor/autoload.php';
use Mozu\Api\iApiContext;
use Guzzle\Service\Client as Client;
use Mozu\Api\Security\AppAuthenticator;
use Mozu\Api\Headers;
use Mozu\Api\Resources\Platform\TenantResource;
use Mozu\Api\Security\UserAuthenticator;

class MozuClient {
	private $baseAddress;
	private $httpResponseMessage = null;
	private $baseUrl = "";
	private $mozuUrl = "";
	private $apiContext = "";
	private $headers = array();
	private $jsonBody = null;
	private $request = null;
	private $result = null;

	
	public function withBaseUrl($baseUrl) {
		$this->baseUrl = $baseUrl;
		return $this;
	}
	
	/*public function withVerb($verb) {
		$this->verb = $verb;
		return $this;
	}*/
	
	public function withUserAuth(Mozu\Api\Security\AuthTicket &$authTicket) {
		
		$authenticationProfile = UserAuthenticator::ensureAuthTicket($authTicket);
		if ($authenticationProfile != null)
		{
			$authTicket = $authenticationProfile->getAuthTicket();
		}
		
		_headers.Add(Headers::X_VOL_USER_CLAIMS, $authTicket->getAccessToken());
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
		return $this;
	}
	
	public function getResult() {
		return $this->result;
	}
	
	public function getHttpClient() {
		$this->buildClientAndRequest();
		return $this->client;
	}
	
	public function withHeader($header, $value) {
		$this->headers = array_merge($this->headers, array($header=>$value));
		return $this;
	}
	
	public function execute() {
		$this->validateContext();
		$this->buildClientAndRequest();
    try {
      $response = $this->request->send ();
      $jsonResp = $response->getBody ( true );
      $this->result = json_decode ( $jsonResp );
    } catch (Guzzle\Http\Exception\BadResponseException $e) {
      $jsonResp = $e->getResponse()->getBody ( true );
      $this->result = json_decode ( $jsonResp );
    }
    
		return $this;
	}

	private function buildClientAndRequest() {
		$config = array('version' => 'v1.1','curl.options' => array(CURLOPT_PROXY => 'http://localhost:8888'));
		//$config = null;
		$this->client = new Client ( $this->baseAddress, $config);
		$authentication = AppAuthenticator::getInstance();
		if (!isset($authentication)) {
			throw new \Exception("Authentication is not initailized");
		}
		
		if ($this->mozuUrl->getVerb()== ""  || $this->mozuUrl->getUrl() == "" ) {
			throw new \Exception("Verb or Resource Url is missing in MozuUrl");
		}
		$this->request = $this->client->createRequest($this->mozuUrl->getVerb(), $this->mozuUrl->getUrl(), null, $this->jsonBody );
		$this->request = $authentication->addAuthHeader($this->request);
		$this->withHeader('Content-Type', 'application/json');
		foreach ($this->headers as $property=>$value) {
			$this->request->setHeader($property, $value);
		}
		$this->request->setHeader(Headers::X_VOL_VERSION,Version::$apiVersion);
		
	    // turn off urlencoding so that filter and sortby params work correctly
	    $query = $this->request->getQuery();
	    $query->useUrlEncoding(false);
    
		
	}
		
	private function validateContext() {
		if ($this->mozuUrl->getLocation() == UrlLocation::TENANT_POD)
		{
			if ($this->apiContext->getTenantId() < 0)
				throw new \Exception("TenantId is missing");
		
			if ($this->apiContext->getTenantUrl() == "")
			{
				$tenantResource = new TenantResource();
				$tenant = $tenantResource->getTenant($this->apiContext->getTenantId());
		
				if ($tenant == null)
					throw new \Exception("Tenant " . $apiContext->getTenantId() . " Not found");
				$this->baseAddress = $this->apiContext->GetUrl($tenant->domain);
			}
			else
				$this->baseAddress = $this->apiContext->getTenantUrl();
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