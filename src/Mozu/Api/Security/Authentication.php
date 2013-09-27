<?php

namespace Mozu\Api\Security;

require_once __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use Mozu\Api\Contracts\AppDev\AppAuthInfo;
use Mozu\Api\Contracts\AppDev\AuthTicketRequest;
use Mozu\Api\Security\RefreshInterval;
use Mozu\Api\MozuClient as MozuClient;
use Mozu\Api\Urls\Platform\Applications\AuthTicketUrl;
use Guzzle\Http\Client as Client;
use Mozu\Api\Headers;
use Guzzle\Http\Message\Request;

class Authentication {
	private $applicationId;
	private $sharedSecret;
	private $baseUrl;
	private $authTicket = null;
	private static $instance = null;
	private $refreshInterval = null;
	
	private function __construct($appId, $sharedSecret, $baseUrl) {
		$this->applicationId = $appId;
		$this->sharedSecret = $sharedSecret;
		$this->baseUrl = $baseUrl;
		
	}
			
	public static function initialize($appId, $sharedSecret, $baseUrl,RefreshInterval  $refreshInterval = null) {
		if (!isset(static::$instance)) {
			static::$instance = new Authentication($appId, $sharedSecret, $baseUrl);
			if ($refreshInterval != null) {
				static::$instance->refreshInterval = $refreshInterval;
			} 
			static::$instance->authenticateApp();
		}
		return static::$instance;
	}
	
	private function authenticateApp() {
		$requestData = new AppAuthInfo ();
		$requestData->setApplicationId($this->applicationId)
					->setSharedSecret($this->sharedSecret);
		//$config = array('version' => 'v1.1','curl.options' => array(CURLOPT_PROXY => 'http://localhost:8888'));
		$client = new Client ( $this->baseUrl );
		$request = $client->post( AuthTicketUrl::AuthenticateAppUrl());
		$request->setBody ( json_encode($requestData), 'application/json' );
		$response = $request->send();
		$jsonResp = $response->getBody ( true );
		static::$instance->authTicket = json_decode ( $jsonResp );
		$this->setRefreshInterval(false);
	}
			
	private function refreshAuthTicket() {
		$requestData = new AuthTicketRequest();
		$requestData->setRefreshToken($this->authTicket->RefreshToken);
		//$config = array('version' => 'v1.1','curl.options' => array(CURLOPT_PROXY => 'http://localhost:8888'));
		$client = new Client ( $this->baseUrl );
		$request = $client->put( AuthTicketUrl::RefreshAppAuthTicketUrl());
		$request->setBody ( json_encode($requestData), 'application/json' );
		$response = $request->send();
		$jsonResp = $response->getBody ( true );
		$this->authTicket = json_decode ( $jsonResp );
		
		$this->setRefreshInterval(true);
	}
	
	private function setRefreshInterval($updateRefreshTokenInterval) {
		if ($this->refreshInterval == null)
		{
			date_default_timezone_set("UTC");
			$this->refreshInterval = new RefreshInterval();
			$this->refreshInterval
					->setAccessTokenExpirationInterval(strtotime(Authentication::getAuthTicket()->AccessTokenExpiration)-180)
					->setRefreshTokenExpirationInterval(strtotime(Authentication::getAuthTicket()->RefreshTokenExpiration)-180);
		}
		
		$accessTokenRefreshInterval = $this->refreshInterval->getAccessTokenExpirationInterval();
		$refreshTokenRefreshInterval = $this->refreshInterval->getRefreshTokenExpirationInterval();
		$accessTokenExpiration = new DateTime("@$accessTokenRefreshInterval");
		$refreshTokenExpiration = new DateTime("@$refreshTokenRefreshInterval");
		$this->refreshInterval
				->setAccessTokenExpiration($accessTokenExpiration)
				->setRefreshTokenExpiration($refreshTokenExpiration);
		
		echo "Access Token Expiration - " . $this->refreshInterval->getAccessTokenExpiration()->format('Y-m-d H:i:s') . "\n";
		echo "Refresh Token Expiration - " .$this->refreshInterval->getRefreshTokenExpiration()->format('Y-m-d H:i:s'). "\n";
	}
	
	public function addAuthHeader(Request $request) {
		if ($this->authTicket == null)
			throw new \Exception("Authentication not initialized");
		
		$this->ensureAuthTicket();
		
		return $request->setHeader(Headers::$X_VOL_APP_CLAIMS, static::$instance->authTicket->AccessToken);
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
		return static::$instance->authTicket->AccessToken;
	}
	
	public function getAuthTicket() {
		return static::$instance->authTicket;
	}
	
	public static function getInstance() {
		if (static::$instance == null) {
			//raise exception
		}
		return static::$instance;
	}
}
?>