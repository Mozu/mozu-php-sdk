<?php 
namespace Mozu\Api\Security;
require_once __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use Mozu\Api\Security\UserAuthTicket;
use Mozu\Api\Security\Scope;
use Mozu\Api\Security\AuthenticationScope;
use Mozu\Api\Security\AuthenticationProfile;
use Mozu\Api\Contracts\Core\UserAuthInfo;
use Mozu\Api\Contracts\Core\UserProfile;
use Mozu\Api\Security\AppAuthenticator;
use Guzzle\Http\Client as Client;
use Guzzle\Http\Message\Request;
use Mozu\Api\Utilities\HttpHelper;
use Mozu\Api\Urls\Platform\Adminuser\TenantAdminUserAuthTicketUrl;
use Mozu\Api\Urls\Platform\Developer\DeveloperAdminUserAuthTicketUrl;
use Mozu\Api\MozuUrl;

class UserAuthenticator {
	
	public static function setActiveScope(UserAuthTicket $authTicket, Scope $scope)
	{
		return static::refreshUserAuthTicket($authTicket, $scope->getId());
	}
	
	public static function ensureAuthTicket(UserAuthTicket $authTicket)
	{
		$dateTimeNow = new DateTime();
		if ($dateTimeNow >= $authTicket->getAccessTokenExpiration())
			return static::refreshUserAuthTicket($authTicket);
	
		return null;
	}
	
	public static function refreshUserAuthTicket(UserAuthTicket $authTicket, $id = null)
	{
		try {
			$authentication = AppAuthenticator::getInstance();
			$resourceUrl = static::getResourceRefreshUrl($authTicket, $id);
		
			
			$client = new Client ( $authentication->getBaseUrl(), HttpHelper::getGuzzleConfig() );
			$request = $client->put( $resourceUrl  );
			$request->setBody ( json_encode($authTicket), 'application/json' );
			$authentication->addAuthHeader($request);
			$response = $request->send();
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
		
			$client = new Client ( $authentication->getBaseUrl(), HttpHelper::getGuzzleConfig() );
			$request = $client->post( $resourceUrl  );
			$request->setBody ( json_encode($userAuthInfo), 'application/json' );
			$authentication->addAuthHeader($request);
			$response = $request->send();
			$jsonResp = $response->getBody ( true );
			$authResponse = json_decode ( $jsonResp );
	
			return static::setUserAuth($authResponse, $scope);
		} catch(\Exception $e){
			HttpHelper::checkError($e);
		}
	}
	
	public static function Logout(UserAuthTicket $authTicket)
	{
		try {
			$authentication = AppAuthenticator::getInstance();
			
			$resourceUrl = static::getLogoutUrl($authTicket);
			
			$client = new Client ( $authentication->getBaseUrl() );
			$request = $client->delete( $resourceUrl  );
			$authentication->addAuthHeader($request);
			$response = $request->send();
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
				return TenantAdminUserAuthTicketUrl::refreshAuthTicketUrl($id)->getUrl();
			case AuthenticationScope::DEVELOEPR:
				return DeveloperAdminUserAuthTicketUrl::refreshDeveloperAuthTicketUrl($id)->getUrl();
			default:
				throw new \Exception("Not Implemented");
		}
	}
	
	private static function getResourceUrl($scope, $id = null)
	{
		switch ($scope)
		{
			case AuthenticationScope::TENANT:
				return TenantAdminUserAuthTicketUrl::createUserAuthTicketUrl($id)->getUrl();
			case AuthenticationScope::DEVELOEPR:
				return DeveloperAdminUserAuthTicketUrl::createDeveloperUserAuthTicketUrl($id)->getUrl();
			default:
				throw new \Exception("Not Implemented");
		}
	}
	
	private static function getLogoutUrl(UserAuthTicket $ticket)
	{
		switch ($ticket->getUserScope())
		{
			case AuthenticationScope::TENANT:
				return TenantAdminUserAuthTicketUrl::deleteUserAuthTicketUrl($ticket->getRefreshToken())->getUrl();
			case AuthenticationScope::DEVELOEPR:
				return DeveloperAdminUserAuthTicketUrl::deleteUserAuthTicketUrl($ticket->getRefreshToken())->getUrl();
			default:
				throw new \Exception("Not Implemented");
		}
	}
}

?>