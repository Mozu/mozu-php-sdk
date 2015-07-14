<?php
namespace Mozu\Api\Security;

use DateTime;
use GuzzleHttp\Client;
use Mozu\Api\Contracts\Customer\CustomerUserAuthInfo;
use Mozu\Api\Headers;
use Mozu\Api\Resources\Platform\TenantResource;
use Mozu\Api\Urls\Commerce\Customer\CustomerAuthTicketUrl;
use Mozu\Api\Utilities\HttpHelper;

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
		$mozuResult = $tenantResource->GetTenantAsync($tenantId)->wait();

		return HttpHelper::getUrl($mozuResult->json()->domain);
	}
	
	public static function refreshUserAuthTicket(UserAuthTicket $authTicket)
	{
		try {
			$authentication = AppAuthenticator::getInstance();
			$resourceUrl = CustomerAuthTicketUrl::refreshUserAuthTicketUrl($authTicket->refreshToken,null);
	
				
			$client = new Client ( [ 'base_uri' => static::getAuthUrl($authTicket->tenantId), 'verify' => false ]);
            $headers = ["content-type" => "application/json", Headers::X_VOL_APP_CLAIMS=>$authentication->getAppClaim(), Headers::X_VOL_SITE=>$authTicket->siteId];

            $body = json_encode($authTicket);

            $promise = $client->requestAsync($resourceUrl->getVerb(), $resourceUrl->getUrl(),['headers'=>$headers,'body'=>$body,'exceptions'=>true]);

			$response = $promise->wait();
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
			$resourceUrl = CustomerAuthTicketUrl::createUserAuthTicketUrl(null);

            $client = new Client ( [ 'base_uri' =>  static::getAuthUrl($tenantId), 'verify' => false ]);
            $headers = ["content-type" => "application/json", Headers::X_VOL_APP_CLAIMS=>$authentication->getAppClaim(), Headers::X_VOL_SITE=>$siteId];

            $body = json_encode($customerAuthInfo);

            $promise = $client->requestAsync($resourceUrl->getVerb(), $resourceUrl->getUrl(),['headers'=>$headers,'body'=>$body,'exceptions'=>true]);

            $response = $promise->wait();
            $jsonResp = $response->getBody ( true );
			$authResponse = json_decode ( $jsonResp );

			$authProfile= static::setUserAuth($authResponse, $tenantId, $siteId);
            return $authProfile;
		} catch(\Exception $e){
			HttpHelper::checkError($e);
		}
	}
	
	private static function setUserAuth($authResponse, $tenantId, $siteId)
	{
		$customerAuthenticationProfile = new CustomerAuthenticationProfile();
	
		$authTicket = new UserAuthTicket();
		$authTicket->authenticationScope = AuthenticationScope::CUSTOMER;
		$authTicket->accessToken = $authResponse->accessToken;
		$authTicket->refreshToken = $authResponse->refreshToken;

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