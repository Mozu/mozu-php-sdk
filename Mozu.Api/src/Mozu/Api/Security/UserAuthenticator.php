<?php 
namespace Mozu\Api\Security;
require_once __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use Mozu\Api\Security\AuthTicket;
use Mozu\Api\Security\Scope;
use Mozu\Api\Security\UserScope;
use Mozu\Api\Security\AuthenticationProfile;
use Mozu\Api\Contracts\Core\UserAuthInfo;
use Mozu\Api\Contracts\Core\UserProfile;
use Mozu\Api\Security\AppAuthenticator;
use Guzzle\Http\Client as Client;
use Guzzle\Http\Message\Request;


class UserAuthenticator {
	
	public static function setActiveScope(AuthTicket $authTicket, Scope $scope)
	{
		return static::refreshUserAuthTicket($authTicket, $scope->getId());
	}
	
	public static function ensureAuthTicket(AuthTicket $authTicket)
	{
		$dateTimeNow = new DateTime();
		if ($dateTimeNow >= $authTicket->getAccessTokenExpiration())
			return static::refreshUserAuthTicket($authTicket);
	
		return null;
	}
	
	public static function refreshUserAuthTicket(AuthTicket $authTicket, $id = null)
	{
	
		$authentication = AppAuthenticator::getInstance();
		$resourceUrl = static::getResourceRefreshUrl($authTicket, $id);
	
		
		$client = new Client ( $authentication->getBaseUrl() );
		$request = $client->put( $resourceUrl  );
		$request->setBody ( json_encode($authTicket), 'application/json' );
		$authentication->addAuthHeader($request);
		$response = $request->send();
		$jsonResp = $response->getBody ( true );
		$authResponse = json_decode ( $jsonResp );
		
		return static::setUserAuth($authResponse, $authTicket->getUserScope());
	}
	
	public static function authenticate(UserAuthInfo $userAuthInfo, UserScope $scope, $id = null)
	{
		$authentication = AppAuthenticator::getInstance();
		$resourceUrl = getResourceUrl($scope, $id);
	
		$client = new Client ( $authentication->getBaseUrl() );
		$request = $client->post( $resourceUrl  );
		$request->setBody ( json_encode($userAuthInfo), 'application/json' );
		$authentication->addAuthHeader($request);
		$response = $request->send();
		$jsonResp = $response->getBody ( true );
		$authResponse = json_decode ( $jsonResp );

		return static::setUserAuth($authResponse, $scope);
		
	}
	
	public static function Logout(AuthTicket $authTicket)
	{
		$authentication = AppAuthenticator::getInstance();
		
		$resourceUrl = static::getLogoutUrl($authTicket);
		
		$client = new Client ( $authentication->getBaseUrl() );
		$request = $client->delete( $resourceUrl  );
		$authentication->addAuthHeader($request);
		$response = $request->send();
	}
	
	private static function setUserAuth($authResponse, UserScope $scope)
	{
		$authenticationProfile = new AuthenticationProfile();
	
		$authTicket = new AuthTicket();
		$authTicket->setUserScope($scope);
		$authTicket->setAccessToken($authResponse->$accessToken);
		$authTicket->setRefreshToken($authResponse->$refreshToken);
		$authTicket->setAccessTokenExpiration($authResponse->accessTokenExpiration);
		$authTicket->setRefreshTokenExpiration($authResponse->refreshTokenExpiration);
		$authenticationProfile->setAuthTicket($authTicket);
	
		$user = new UserProfile();
		$user->setFirstName($authResponse->userProfile->firstName);
		$user->setLastName($authResponse->userProfile->lastName);
		$user->setEmailAddress($authResponse->userProfile->emailAddress);
		$user->setUserId($authResponse->userProfile->userId);
		
		$authenticationProfile->setUser($user);
		
		$authorizedScopes = $array();
		
		switch ($scope)
		{
			case UserScope::TENANT:
				foreach ($authResponse->avaliableTenants as $tenant) {
					$authorizedScope = new Scope($tenant->id, $tenant->name);
					array_push($authorizedScopes,$authorizedScope);
				}
				if ($authResponse->tenant != null)
					$authenticationProfile->setActiveScope( new Scope($authResponse->tenant->id,$authResponse->tenant->name ));
				break;
			case UserScope::DEVELOEPR:
				foreach ($authResponse->availableAccounts as $account) {
					$authorizedScope = new Scope($account->id, $account->name);
					array_push($authorizedScopes,$authorizedScope);
				}
				if ($authResponse->account != null)
					$authenticationProfile->setActiveScope( new Scope($authResponse->account->id,$authResponse->account->name ));
				break;
		}
	
		return authenticationProfile;
	}

	private static function getResourceRefreshUrl(AuthTicket $authTicket, $id = null)
	{
		switch ($authTicket->getUserScope())
		{
			case UserScope::TENANT:
				return TenantAdminUserAuthTicketUrl.refreshAuthTicketUrl($id)->getUrl();
			case UserScope::SHOPPER:
				return UserAuthTicketUrl.refreshUserAuthTicketUrl($authTicket->getRefreshToken())->getUrl();
			case UserScope::DEVELOEPR:
				return DeveloperAdminUserAuthTicketUrl.refreshDeveloperAuthTicketUrl($id)->getUrl();
			default:
				throw new \Exception("Not Implemented");
		}
	}
	
	private static function getResourceUrl(UserScope $scope, $id = null)
	{
		switch ($scope)
		{
			case UserScope::TENANT:
				return TenantAdminUserAuthTicketUrl.createUserAuthTicketUrl($id).Url;
			case UserScope::SHOPPER:
				return UserAuthTicketUrl.createUserAuthTicketUrl().Url;
			case UserScope::DEVELOEPR:
				return DeveloperAdminUserAuthTicketUrl.createDeveloperUserAuthTicketUrl($id).Url;
			default:
				throw new \Exception("Not Implemented");
		}
	}
	
	private static function getLogoutUrl(AuthTicket $ticket)
	{
		switch ($ticket->getUserScope())
		{
			case UserScope::TENANT:
				return TenantAdminUserAuthTicketUrl.deleteUserAuthTicketUrl($ticket->getRefreshToken())->getUrl();
			case UserScope::DEVELOEPR:
				return DeveloperAdminUserAuthTicketUrl.deleteUserAuthTicketUrl($ticket->getRefreshToken())->getUrl();
			default:
				throw new \Exception("Not Implemented");
		}
	}
}

?>