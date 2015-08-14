<?php

namespace Mozu\Api\Security;


use DateTime;
use GuzzleHttp\Client;
use Logger;
use Mozu\Api\Contracts\AppDev\AppAuthInfo;
use Mozu\Api\Contracts\AppDev\AuthTicketRequest;
use Mozu\Api\MozuConfig;
use Mozu\Api\Urls\Platform\Applications\AuthTicketUrl;
use Mozu\Api\Utilities\HttpHelper;


class AppAuthenticator {
	private $appAuthInfo;
	private $authTicket = null;
	private static $instance = null;
	private $refreshInterval = null;
	private $log;
	private function __construct(AppAuthInfo $appAuthInfo) {
		$this->appAuthInfo = $appAuthInfo;
		$this->log = Logger::getLogger("AppAuthenticator");
	}
			
	public static function initialize(AppAuthInfo $appAuthInfo, RefreshInterval  $refreshInterval = null) {

		if (!isset($appAuthInfo->applicationId) || !isset($appAuthInfo->sharedSecret)
			|| trim($appAuthInfo->applicationId) == "" || trim($appAuthInfo->sharedSecret) == "")
			throw new \Exception("Application or SharedSecret is missing");
		
		$parsedUrl =  parse_url(MozuConfig::$baseAppAuthUrl);
		HttpHelper::$urlScheme =$parsedUrl["scheme"];
		
		if (!isset(static::$instance)) {
			static::$instance = new AppAuthenticator($appAuthInfo);
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
            $this->log->info("Authenticating App using Key : ".$this->appAuthInfo->applicationId);
			$client = new Client (['base_uri' => MozuConfig::$baseAppAuthUrl,  'verify' => false]);

            $this->log->info(AuthTicketUrl::AuthenticateAppUrl(null)->getUrl());
            $headers = ["content-type" => "application/json"];
            $body = json_encode($this->appAuthInfo);

            $promise = $client->requestAsync("POST",AuthTicketUrl::AuthenticateAppUrl(null)->getUrl(), ['headers'=>$headers, 'body'=>$body, 'exceptions'=> true]);
            $response = $promise->wait();
            $jsonResp = $response->getBody ( true );
            static::$instance->authTicket = json_decode ( $jsonResp );
            $this->setRefreshInterval(true);
		} catch(\Exception $e) {
			HttpHelper::checkError($e);
		}
	}
			
	private function refreshAuthTicket() {
		try {
			$requestData = new AuthTicketRequest();
			$requestData->refreshToken = $this->authTicket->refreshToken;
            $client = new Client (['base_uri' => MozuConfig::$baseAppAuthUrl,  'verify' => false]);
            $headers = ["content-type" => "application/json"];
            $body = json_encode($requestData);

            $promise = $client->requestAsync("PUT",AuthTicketUrl::RefreshAppAuthTicketUrl(null)->getUrl(), ['headers'=>$headers, 'body'=>$body, 'exceptions'=> true]);
            $response = $promise->wait();
			$jsonResp = $response->getBody ( true );
			$this->authTicket = json_decode ( $jsonResp );
			
			$this->setRefreshInterval(true);
		} catch(\Exception $e) {
			HttpHelper::checkError($e);
		}
	}
	
	private function setRefreshInterval($updateRefreshTokenInterval) {
		$existingTimezone = date_default_timezone_get();
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

       		$this->log->info("Access Token Expiration - " . $this->refreshInterval->getAccessTokenExpiration()->format('Y-m-d H:i:s'));
        	$this->log->info("Refresh Token Expiration - " .$this->refreshInterval->getRefreshTokenExpiration()->format('Y-m-d H:i:s'));
		date_default_timezone_set($existingTimezone);
	}
	
	public function getAppClaim() {
		if ($this->authTicket == null)
			throw new \Exception("Authentication not initialized");
		
		$this->ensureAuthTicket();
        return static::$instance->authTicket->accessToken;
	}

	private function ensureAuthTicket() {
		$dateTimeNow = new DateTime();
		if ($this->authTicket == null || $dateTimeNow >= $this->refreshInterval->getRefreshTokenExpiration()) {
            $this->log->info("Refresh token expired..Generating new token");
            $this->authenticateApp();
        }
		else if ($dateTimeNow >= $this->refreshInterval->getAccessTokenExpiration()) {
            $this->log->info("Access token expired..Getting new token using refresh token");
            $this->refreshAuthTicket();
        }
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
