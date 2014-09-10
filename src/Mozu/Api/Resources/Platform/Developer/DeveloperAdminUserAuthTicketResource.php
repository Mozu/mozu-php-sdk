<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform\Developer;

use Mozu\Api\Clients\Platform\Developer\DeveloperAdminUserAuthTicketClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\Core\UserAuthInfo;
use Mozu\Api\Contracts\AdminUser\DeveloperAdminUserAuthTicket;

/**
* Use this resource to manage authentication tickets for your developer account.
*/
class DeveloperAdminUserAuthTicketResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	

	/**
	* Generate an authentication ticket for a developer account.
	*
	* @param int $developerAccountId Unique identifier of the developer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param UserAuthInfo $userAuthInfo The user authentication information required to generate the developer account user authentication ticket, which consists of a user name and password.
	* @return DeveloperAdminUserAuthTicket 
	*/
	public function createDeveloperUserAuthTicket($userAuthInfo, $developerAccountId =  null, $responseFields =  null)
	{
		$mozuClient = DeveloperAdminUserAuthTicketClient::createDeveloperUserAuthTicketClient($userAuthInfo, $developerAccountId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Generates a new developer account authentication ticket for the specified tenant by supplying the defined refresh token information.
	*
	* @param int $developerAccountId Unique identifier of the developer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DeveloperAdminUserAuthTicket $existingAuthTicket Properties of the authentication ticket to refresh. The refresh token is required to complete this request.
	* @return DeveloperAdminUserAuthTicket 
	*/
	public function refreshDeveloperAuthTicket($existingAuthTicket, $developerAccountId =  null, $responseFields =  null)
	{
		$mozuClient = DeveloperAdminUserAuthTicketClient::refreshDeveloperAuthTicketClient($existingAuthTicket, $developerAccountId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Deletes the authentication ticket for the developer account by supplying the refresh token.
	*
	* @param string $refreshToken Refresh token string associated with the developer account authentication ticket.
	* @return void
	*/
	public function deleteUserAuthTicket($refreshToken)
	{
		$mozuClient = DeveloperAdminUserAuthTicketClient::deleteUserAuthTicketClient($refreshToken);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	
}

?>

