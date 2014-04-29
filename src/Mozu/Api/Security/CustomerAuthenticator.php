<?php
namespace Mozu\Api\Security;

use DateTime;
use Mozu\Api\Security\UserAuthTicket;
use Mozu\Api\Security\Scope;
use Mozu\Api\Security\AuthenticationScope;
use Mozu\Api\Security\CustomerAuthenticationProfile;
use Mozu\Api\Contracts\Customer\CustomerUserAuthInfo;
use Mozu\Api\Urls\Commerce\Customer\CustomerAuthTicketUrl;
use Mozu\Api\Security\AppAuthenticator;
use Guzzle\Http\Client as Client;
use Guzzle\Http\Message\Request;
use Mozu\Api\Utilities\HttpHelper;
use Mozu\Api\Resources\Platform\TenantResource;
use Mozu\Api\Headers;

class CustomerAuthenticator {
	public static function ensureAuthTicket(UserAuthTicket $authTicket)
	{
		$dateTimeNow = new DateTime();
		if ($dateTimeNow >= $authTicket->getAccessTokenExpiration())
			return static::refreshUserAuthTicket($authTicket)->authTicket;
	
		return null;
	}
	
	private static function getAuthUrl($tenantId)
	{
		$tenantResource = new TenantResource();
		$tenant = $tenantResource->GetTenant($tenantId);
		return HttpHelper::getUrl($tenant->domain);
	}
	
	public static function refreshUserAuthTicket(UserAuthTicket $authTicket)
	{
		try {
			$authentication = AppAuthenticator::getInstance();
			$resourceUrl = CustomerAuthTicketUrl::refreshUserAuthTicketUrl($authTicket->refreshToken)->getUrl();
	
				
			$client = new Client ( static::getAuthUrl($authTicket->tenantId), HttpHelper::getGuzzleConfig() );
			$request = $client->put( $resourceUrl  );
			$request->setBody ( json_encode($authTicket), 'application/json' );
			$authentication->addAuthHeader($request);
			$request->setHeader(Headers::X_VOL_SITE, $siteId);
			$response = $request->send();
			$jsonResp = $response->getBody ( true );
			$authResponse = json_decode ( $jsonResp );
				
			return static::setUserAuth($authResponse, $authTicket->tenantId, $authTicket->siteId);
		} catch(\Exception $e) {
			HttpHelper::checkError($e);
		}
	}
	
	public static function authenticate(CustomerUserAuthInfo $customerAuthInfo, $tenantId, $siteId)
	{
		try {
			$authentication = AppAuthenticator::getInstance();
			$resourceUrl = CustomerAuthTicketUrl::createUserAuthTicketUrl()->getUrl();
	
			$client = new Client ( static::getAuthUrl($tenantId), HttpHelper::getGuzzleConfig() );
			$request = $client->post( $resourceUrl  );
			$request->setBody ( json_encode($customerAuthInfo), 'application/json' );
			$authentication->addAuthHeader($request);
			$request->setHeader(Headers::X_VOL_SITE, $siteId);
			$response = $request->send();
			$jsonResp = $response->getBody ( true );
			$authResponse = json_decode ( $jsonResp );
	
			return static::setUserAuth($authResponse, $tenantId, $siteId);
		} catch(\Exception $e){
			//var_dump($e);
			HttpHelper::checkError($e);
		}
	}
	
	private static function setUserAuth($authResponse, $tenantId, $siteId)
	{
		$customerAuthenticationProfile = new CustomerAuthenticationProfile();
	
		$authTicket = new UserAuthTicket();
		$authTicket->scope = AuthenticationScope::CUSTOMER;
		$authTicket->accessToken = $authResponse->$accessToken;
		$authTicket->refreshToken = $authResponse->$refreshToken;
		$authTicket->accessTokenExpiration = $authResponse->accessTokenExpiration;
		$authTicket->refreshTokenExpiration = $authResponse->refreshTokenExpiration;
		$authTicket->tenantId = $tenantId;
		$authTicket->siteId = $siteId;
		$customerAuthenticationProfile->authTicket = $authTicket;
		
		$customerAuthenticationProfile->customerAccount = $authResponse->customerAccount;
	
		return $customerAuthenticationProfile;
	}
	
}

?>