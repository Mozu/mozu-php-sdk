<?php

namespace Mozu\Api\Security;

use DateTime;
use Mozu\Api\Contracts\AppDev\AppAuthInfo;
use Mozu\Api\Contracts\AppDev\AuthTicketRequest;
use Mozu\Api\MozuConfig;
use Mozu\Api\Security\RefreshInterval;
use Mozu\Api\MozuClient as MozuClient;
use Mozu\Api\Urls\Platform\Applications\AuthTicketUrl;
use Guzzle\Http\Client as Client;
use Mozu\Api\Headers;
use Guzzle\Http\Message\Request;
use Mozu\Api\Utilities\HttpHelper;
use Guzzle\Http\Exception\ClientErrorResponseException;

class AppAuthenticator {
	private $appAuthInfo;
	private $baseUrl;
	private $authTicket = null;
	private static $instance = null;
	private $refreshInterval = null;
	
	private function __construct(AppAuthInfo $appAuthInfo, $baseUrl) {
		$this->appAuthInfo = $appAuthInfo;
		$this->baseUrl = $baseUrl;
		
		
	}
			
	public static function initialize(AppAuthInfo $appAuthInfo, RefreshInterval  $refreshInterval = null) {

		if (!isset($appAuthInfo))
			throw new \Exception("AppAuthInfo is missing");

        $baseUrl = MozuConfig::getBaseUrl();

		if (!isset($appAuthInfo->applicationId) || !isset($appAuthInfo->sharedSecret) 
			|| trim($appAuthInfo->applicationId) == "" || trim($appAuthInfo->sharedSecret) == "")
			throw new \Exception("Application or SharedSecret is missing");
		
		$parsedUrl =  parse_url($baseUrl);
		HttpHelper::$urlScheme =$parsedUrl["scheme"];
		
		if (!isset(static::$instance)) {
			static::$instance = new AppAuthenticator($appAuthInfo, $baseUrl);
			if ($refreshInterval != null) {
				static::$instance->refreshInterval = $refreshInterval;
			} 
			try {
				static::$instance->authenticateApp();
			} catch(\Exception $exc) {
				static::$instance == null;
				throw $exc;
			}
		}
		return static::$instance;
	}
	
	private function authenticateApp() {
		try {
			$client = new Client ( $this->baseUrl, HttpHelper::getGuzzleConfig() );
			$request = $client->post( AuthTicketUrl::AuthenticateAppUrl(null)->getUrl());
			$request->setBody ( json_encode($this->appAuthInfo), 'application/json' );
			$response = $request->send();
			$jsonResp = $response->getBody ( true );
			static::$instance->authTicket = json_decode ( $jsonResp );
			$this->setRefreshInterval(false);
            echo "Access Token - " .$this->authTicket->accessToken . "\n";

		} catch(\Exception $e) {
			HttpHelper::checkError($e);	
		} 
	}
			
	private function refreshAuthTicket() {
		try {
			$requestData = new AuthTicketRequest();
			$requestData->refreshToken = $this->authTicket->refreshToken;
			$client = new Client ( $this->baseUrl, HttpHelper::getGuzzleConfig() );
			$request = $client->put( AuthTicketUrl::RefreshAppAuthTicketUrl(null)->getUrl());
			$request->setBody ( json_encode($requestData), 'application/json' );
			$response = $request->send();
			$jsonResp = $response->getBody ( true );
			$this->authTicket = json_decode ( $jsonResp );
			
			$this->setRefreshInterval(true);

		} catch(\Exception $e) {
			HttpHelper::checkError($e);
		}
	}
	
	private function setRefreshInterval($updateRefreshTokenInterval) {
		if ($this->refreshInterval == null)
		{
			date_default_timezone_set("UTC");
			$this->refreshInterval = new RefreshInterval();
			$this->refreshInterval
					->setAccessTokenExpirationInterval(strtotime(static::$instance->getAuthTicket()->accessTokenExpiration)-180)
					->setRefreshTokenExpirationInterval(strtotime(static::$instance->getAuthTicket()->refreshTokenExpiration)-180);
		}
		
		$accessTokenRefreshInterval = $this->refreshInterval->getAccessTokenExpirationInterval();
		$refreshTokenRefreshInterval = $this->refreshInterval->getRefreshTokenExpirationInterval();
		$accessTokenExpiration = new DateTime("@$accessTokenRefreshInterval");
		$refreshTokenExpiration = new DateTime("@$refreshTokenRefreshInterval");
		$this->refreshInterval
				->setAccessTokenExpiration($accessTokenExpiration)
				->setRefreshTokenExpiration($refreshTokenExpiration);

		echo "Access Token Expiration - " .$this->refreshInterval->getAccessTokenExpiration()->format('Y-m-d H:i:s') . "\n";
		echo "Refresh Token Expiration - " .$this->refreshInterval->getRefreshTokenExpiration()->format('Y-m-d H:i:s'). "\n";
	}
	
	public function addAuthHeader(Request $request) {
		if ($this->authTicket == null)
			throw new \Exception("Authentication not initialized");
		
		$this->ensureAuthTicket();
		
		return $request->setHeader(Headers::X_VOL_APP_CLAIMS, static::$instance->authTicket->accessToken);
	} 

	private function ensureAuthTicket() {
		$dateTimeNow = new DateTime();
		echo  ($dateTimeNow >= $this->refreshInterval->getRefreshTokenExpiration());
		if ($this->authTicket == null || $dateTimeNow >= $this->refreshInterval->getRefreshTokenExpiration())
			$this->authenticateApp();
		else if ($dateTimeNow >= $this->refreshInterval->getAccessTokenExpiration())
			$this->refreshAuthTicket();
	} 
	
	public function getAccessToken() {
		return static::$instance->authTicket->accessToken;
	}
	
	public function getAuthTicket() {
		return static::$instance->authTicket;
	}
	
	public function getBaseUrl() {
		return static::$instance->baseUrl;
	} 
		
	public static function getInstance() {
		if (static::$instance == null) {
			//raise exception
		}
		return static::$instance;
	}
}
?>