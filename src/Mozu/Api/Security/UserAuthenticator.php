<?php 
namespace Mozu\Api\Security;

use DateTime;
use Mozu\Api\Headers;
use Mozu\Api\MozuConfig;
use Mozu\Api\Contracts\Core\UserAuthInfo;
use GuzzleHttp\Client;
use Mozu\Api\Utilities\HttpHelper;
use Mozu\Api\Urls\Platform\Adminuser\TenantAdminUserAuthTicketUrl;
use Mozu\Api\Urls\Platform\Developer\DeveloperAdminUserAuthTicketUrl;

class UserAuthenticator {
	
	public static function setActiveScope(UserAuthTicket $authTicket, Scope $scope)
	{
		return static::refreshUserAuthTicket($authTicket, $scope->getId());
	}
	
	public static function ensureAuthTicket(UserAuthTicket $authTicket)
	{
		$dateTimeNow = new DateTime();
		$accessTokenExpiration = strtotime($authTicket->accessTokenExpiration);
		$accessTokenExpiratonDate =  new DateTime("@$accessTokenExpiration");

		if ($dateTimeNow >= $accessTokenExpiratonDate)
			return static::refreshUserAuthTicket($authTicket);
	
		return null;
	}
	
	public static function refreshUserAuthTicket(UserAuthTicket $authTicket, $id = null)
	{
		try {
			$authentication = AppAuthenticator::getInstance();
			$resourceUrl = static::getResourceRefreshUrl($authTicket, $id);

            $client = new Client ( [ 'base_uri' =>  MozuConfig::$baseAppAuthUrl, 'verify' => false ]);
            $headers = ["content-type" => "application/json", Headers::X_VOL_APP_CLAIMS=>$authentication->getAppClaim()];

            $body = json_encode($authTicket);
            $promise = $client->requestAsync("PUT", $resourceUrl,['headers'=>$headers,'body'=>$body,'exceptions'=>true]);
            $response = $promise->wait();
			$jsonResp = $response->getBody ( true );
			$authResponse = json_decode ( $jsonResp );
			
			return static::setUserAuth($authResponse, $authTicket->authenticationScope);
		} catch(\Exception $e) {
			HttpHelper::checkError($e);
		}
	}
	
	public static function authenticate(UserAuthInfo $userAuthInfo, $scope, $id = null)
	{
		try {
			$authentication = AppAuthenticator::getInstance();
			$resourceUrl = static::getResourceUrl($scope, $id);

            $client = new Client ( [ 'base_uri' =>  MozuConfig::$baseAppAuthUrl, 'verify' => false ]);

            $headers = ["content-type" => "application/json",Headers::X_VOL_APP_CLAIMS => $authentication->getAppClaim()];

            $body = json_encode($userAuthInfo);

            $promise = $client->requestAsync("POST", $resourceUrl,['headers'=>$headers,'body'=>$body,'exceptions'=>true]);
            $response = $promise->wait();
            $jsonResp = $response->getBody ( true );

    		$authResponse = json_decode ( $jsonResp );
			return static::setUserAuth($authResponse, $scope);
		} catch(\Exception $e){
			HttpHelper::checkError($e);
		}
	}
	
	public static function logout(UserAuthTicket $authTicket)
	{
		try {
			$authentication = AppAuthenticator::getInstance();
            //var_dump($authTicket);
			$resourceUrl = static::getLogoutUrl($authTicket);

            $client = new Client ( [ 'base_uri' =>  MozuConfig::$baseAppAuthUrl, 'verify' => false ]);
            $headers = ["content-type" => "application/json", Headers::X_VOL_APP_CLAIMS => $authentication->getAppClaim()];
            var_dump($headers);
            $promise = $client->requestAsync("DELETE", $resourceUrl,['headers'=>$headers,'exceptions'=>true]);
            $promise->wait();
		} catch(\Exception $e) {
			HttpHelper::checkError($e);
		}
	}
	
	private static function setUserAuth($authResponse, $scope)
	{
		$authenticationProfile = new AuthenticationProfile();
	
		$authTicket = new UserAuthTicket();
		$authTicket->authenticationScope = $scope;
		$authTicket->accessToken = $authResponse->accessToken;
		$authTicket->refreshToken = $authResponse->refreshToken;
		$authTicket->accessTokenExpiration = $authResponse->accessTokenExpiration;
		$authTicket->refreshTokenExpiration = $authResponse->refreshTokenExpiration;
		$authenticationProfile->authTicket = $authTicket;
		$authenticationProfile->user = $authResponse->user;
			
		$authorizedScopes = array();
		
		switch ($scope)
		{
			case AuthenticationScope::TENANT:
				foreach ($authResponse->availableTenants as $tenant) {
					$authorizedScope = new Scope($tenant->id, $tenant->name);
					array_push($authorizedScopes,$authorizedScope);
				}
				
				if ($authResponse->tenant != null)
					$authenticationProfile->activeScope =new Scope($authResponse->tenant->id,$authResponse->tenant->name );
				break;
			case AuthenticationScope::DEVELOEPR:
				foreach ($authResponse->availableAccounts as $account) {
					$authorizedScope = new Scope($account->id, $account->name);
					array_push($authorizedScopes,$authorizedScope);
				}
				if ($authResponse->account != null)
					$authenticationProfile->activeScope =  new Scope($authResponse->account->id,$authResponse->account->name );
				break;
		}
	
		$authenticationProfile->authorizedScopes=$authorizedScopes;
		return $authenticationProfile;
	}

	private static function getResourceRefreshUrl(UserAuthTicket $authTicket, $id = null)
	{
		switch ($authTicket->authenticationScope)
		{
			case AuthenticationScope::TENANT:
				return TenantAdminUserAuthTicketUrl::refreshAuthTicketUrl($id,null)->getUrl();
			case AuthenticationScope::DEVELOEPR:
				return DeveloperAdminUserAuthTicketUrl::refreshDeveloperAuthTicketUrl($id,null)->getUrl();
			default:
				throw new \Exception("Not Implemented");
		}
	}
	
	private static function getResourceUrl($scope, $id = null)
	{
		switch ($scope)
		{
			case AuthenticationScope::TENANT:
				return TenantAdminUserAuthTicketUrl::createUserAuthTicketUrl($id,null)->getUrl();
			case AuthenticationScope::DEVELOEPR:
				return DeveloperAdminUserAuthTicketUrl::createDeveloperUserAuthTicketUrl($id,null)->getUrl();
			default:
				throw new \Exception("Not Implemented");
		}
	}
	
	private static function getLogoutUrl(UserAuthTicket $ticket)
	{
		switch ($ticket->authenticationScope)
		{
			case AuthenticationScope::TENANT:
				return TenantAdminUserAuthTicketUrl::deleteUserAuthTicketUrl($ticket->getRefreshToken)->getUrl();
			case AuthenticationScope::DEVELOEPR:
                var_dump($ticket->refreshToken);
				return DeveloperAdminUserAuthTicketUrl::deleteUserAuthTicketUrl($ticket->refreshToken)->getUrl();
			default:
				throw new \Exception("Not Implemented");
		}
	}
}

?>