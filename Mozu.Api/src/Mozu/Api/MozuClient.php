<?php

namespace Mozu\Api;

require_once __DIR__ . '/../../../vendor/autoload.php';
use Guzzle\Service\Client as Client;
use Mozu\Api\Security\Authentication;
use Mozu\Api\Headers;

class MozuClient {
	private $baseAddress;
	private $httpResponseMessage = null;
	private $verb = "";
	private $baseUrl = "";
	private $resourceUrl = "";
	private $headers = array();
	private $jsonBody = null;
	private $request = null;
	private $result = null;

	public function __construct() {
	}
	

	public function withBaseUrl($baseUrl) {
		$this->baseUrl = $baseUrl;
		return $this;
	}
	
	public function withVerb($verb) {
		$this->verb = $verb;
		return $this;
	}
	
	public function withResourceUrl($resourceUrl) {
		$this->resourceUrl = $resourceUrl;
		return $this;
	}
	
	
	public function withContext($tenantId, $siteGroupId, $siteId) {
		if (isset($tenantId) && !empty($tenantId)) {
			$this->addHeader(Headers::$X_VOL_TENANT,$tenantId);
		}
		if (isset($siteGroupId) && !empty($siteGroupId)) {
			$this->addHeader(Headers::$X_VOL_SITEGROUP,$siteGroupId);
		}
		if (isset($siteId) && !empty($siteId)) {
			$this->addHeader(Headers::$X_VOL_SITE,$siteId);
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
	
	public function addHeader($header, $value) {
		$this->headers = array_merge($this->headers, array($header=>$value));
		return $this;
	}
	
	public function execute() {
		$this->buildClientAndRequest();
		$response = $this->request->send ();
		$jsonResp = $response->getBody ( true );
		$this->result = json_decode ( $jsonResp );
		return $this;
	}

	private function buildClientAndRequest() {
		//$config = array('version' => 'v1.1','curl.options' => array(CURLOPT_PROXY => 'http://localhost:8888'));
		$config = null;
		$this->client = new Client ( $this->baseUrl, $config);
		$authentication = Authentication::getInstance();
		if (!isset($authentication)) {
			throw new \Exception("Authentication is not initailized");
		}
		
		$this->request = $this->client->createRequest($this->verb, $this->resourceUrl, null, $this->jsonBody );
		$this->request = $authentication->addAuthHeader($this->request);
		foreach ($this->headers as $property=>$value) {
			$this->request->setHeader($property, $value);
		}
		$this->request->setHeader(Headers::$X_VOL_VERSION,Version::$apiVersion);
	}
	
}
?>