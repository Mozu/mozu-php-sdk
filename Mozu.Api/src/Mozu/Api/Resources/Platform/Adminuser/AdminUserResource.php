<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform\Adminuser;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Platform\Adminuser\AdminUserClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Displays the user accounts and account details associated with a developer or Mozu tenant administrator. Email addresses uniquely identify admin user accounts.
*/
class AdminUserResource {

	/**
	* Retrieves the details of the specified administrator user account.
	*
	* @param string $userId Unique identifier of the administrator account to retrieve.
	* @return User 
	*/
	public function getUser($userId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = AdminUserClient::getUserClient($userId, $userAuthTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a list of the Mozu tenants or development stores for which the specified user has an assigned role.
	*
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return TenantCollection 
	*/
	public function getTenantScopesForUser($userId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = AdminUserClient::getTenantScopesForUserClient($userId, $userAuthTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

