<?php

namespace Mozu\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise;
use GuzzleHttp\Psr7;
use Logger;
use Mozu\Api\Resources\Platform\TenantResource;
use Mozu\Api\Security\AppAuthenticator;
use Mozu\Api\Security\AuthenticationScope;
use Mozu\Api\Security\CustomerAuthenticator;
use Mozu\Api\Security\UserAuthenticator;
use Mozu\Api\Utilities\HttpHelper;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class MozuClient {
	private $baseAddress;
	private $baseUrl = "";
	private $mozuUrl = "";
	private $apiContext = null;
	private $headers = [];
	private $requestBody = null;
	private $request = null;
    private $response = null;
    //private $mozuResult = null;
	private $isStreamContent = false;
	private $contentType = null;
	private $client = null;
    private $logger = null;
    //private $apiError = null;

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
		$this->requestBody =  json_encode($body);
		$this->isStreamContent = false;
		return $this;
	}
	
	public function withStreamBody($body) {
		$this->requestBody = $body;
		$this->isStreamContent = true;
		return $this;
	}
	
	public function getResult() {
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
        $promise = $this->client->sendAsync($this->request);
        $this->response = $promise->wait();

		return $this;
	}

    public function executeAsync() {
        $this->validateContext();
        $this->buildClientAndRequest();
        $promise = $this->client->sendAsync($this->request);
        return $promise->then(function($response) {
            $mozuResult = new MozuResult();
            if (!$this->notFoundFromServer) {
                $mozuResult->contentType = $response->getHeader("Content-Type");
                $mozuResult->body = $response->getBody(true);
            }
            $mozuResult->correlationId = $response->getHeader(Headers::X_VOL_CORRELATION)[0];
            return new Promise\FulfilledPromise($mozuResult);
        }, function($e) {
            //$this->logger->error($e);
            return new Promise\RejectedPromise($e);
        });
    }

	private function buildClientAndRequest() {
        $this->logger->info("Getting Request Client");
        $stack = new HandlerStack();
        $stack->setHandler(new CurlHandler());
        $stack->push(Middleware::mapRequest( function(RequestInterface $request) {
            return $this->addRequestHeaders($request);
        }));

        $stack->push(Middleware::mapResponse(function(ResponseInterface $response){
            $this->logger->info('Response status code: ' . $response->getStatusCode());
            $this->validateResponse($response);



            return $response;
        }));

        $this->client = new Client (['handler'=>$stack,'base_uri' => $this->baseAddress,  'verify' => false]);

        $this->logger->info("Request URI : ".$this->mozuUrl->getUrl());
        $this->request = new Psr7\Request($this->mozuUrl->getVerb(),$this->mozuUrl->getUrl(), array(), $this->requestBody);
	}
		
	private function validateContext() {
		if ($this->mozuUrl->getLocation() == UrlLocation::TENANT_POD)
		{
			if ($this->apiContext->getTenantId() < 0)
				throw new \Exception("TenantId is missing");
		
			if (trim($this->apiContext->getTenantUrl()) == "")
			{
                $tenant = $this->getTenant();
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

            $tenant = $this->getTenant();
            if ($tenant->isDevTenant)
                $this->baseAddress = MozuConfig::$baseDevPciUrl;
            else
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

    private function getTenant() {
        $tenantResource = new TenantResource();

        $tenant = $tenantResource->getTenantAsync($this->apiContext->getTenantId())->wait();

        if ($tenant == null)
            throw new \Exception("Tenant " . $this->apiContext->getTenantId() . " Not found");

        return $tenant->json();
    }

    private function addRequestHeaders(RequestInterface $request) {
        $this->logger->info("Setting request headers");
        $authentication = AppAuthenticator::getInstance();
        if (!isset($authentication)) {
            throw new \Exception("Authentication is not initialized");
        }
        $this->logger->info("App Claim : ". $authentication->getAppClaim());
        $request = $request->withHeader(Headers::X_VOL_APP_CLAIMS,$authentication->getAppClaim());
        $request = $request->withHeader(Headers::X_VOL_VERSION,Version::$apiVersion);
        if (isset($this->contentType)) {
            $request = $request->withHeader(Headers::CONTENT_TYPE,$this->contentType);
        }
        if (!$this->isStreamContent)
            $request= $request->withHeader('Content-Type', 'application/json; charset=utf-8');

        if ($this->apiContext != null && $this->apiContext->getUserAuthTicket() != null) {
            $this->setUserAuth();
            $request =$request->withHeader(Headers::X_VOL_USER_CLAIMS, $this->apiContext->getUserAuthTicket());
        }

        $request = $request->withHeader("Accept-Encoding","gzip, deflate");
        foreach ($this->headers as $name => $value) {
            $request = $request->withHeader($name, $value );
        }

        if ($this->requestBody != null)
            $request = $request->withHeader("Content-Length", strlen($this->requestBody));
        return $request;
    }

    private $notFoundFromServer = false;
    private function validateResponse(ResponseInterface $response) {
        $statusCode = $response->getStatusCode();
        $correlationHdr = $response->getHeader(Headers::X_VOL_CORRELATION);

        if ($statusCode == 304 || $statusCode >= 200 && $statusCode <= 300) return;

        $apiError = null;
        if ($statusCode == 404 && empty($correlationHdr))
            $apiError = new ApiException($response->getReasonPhrase(), $statusCode);
        else if (!empty($correlationHdr)) {
            $body = $response->getBody(TRUE);
            $jsonResponse = json_decode($body);
            $message = $response->getReasonPhrase();
            if (!empty($jsonResponse)) {
                if ($jsonResponse->errorCode == "ITEM_NOT_FOUND" && $statusCode == 404  && $this->mozuUrl->getVerb() == "GET" && !MozuConfig::$throwExceptionOn404) {
                    $this->notFoundFromServer = true;
                    return;
                }
                $this->logger->debug($jsonResponse->errorCode . " : " . (MozuConfig::$throwExceptionOn404 == true));

                if (isset($jsonResponse->message))
                    $apiError = new ApiException($jsonResponse->message, $statusCode);
                else
                    $apiError = new ApiException($response->getReasonPhrase().", inspect Mozu\Api\ApiException->items property for more details", $statusCode);
                $apiError = new ApiException($jsonResponse->message, $statusCode);
                if (isset($jsonResponse->additionalErrorData)) {
                    $apiError->setAdditionalErrorData( $jsonResponse->additionalErrorData);
                }
                if (isset($jsonResponse->errorCode)) {
                    $apiError->setErrorCode($jsonResponse->errorCode);
                }
                if (isset($jsonResponse->applicationName)) {
                    $apiError->setApplicationName($jsonResponse->applicationName);
                }
                if (isset($jsonResponse->items)) {
                    $apiError->setItems($jsonResponse->items);
                }
            } else
                $apiError = new ApiException($message, $statusCode);

            $apiError->setCorrelationId($correlationHdr[0]);

        } else {
            $apiError = new ApiException("Unknown error", $statusCode);
        }

        if ($apiError != null)
            throw $apiError;
    }
}
?>