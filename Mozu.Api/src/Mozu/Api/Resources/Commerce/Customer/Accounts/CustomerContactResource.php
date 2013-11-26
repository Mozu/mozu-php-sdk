<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Customer\Accounts\CustomerContactClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class CustomerContactResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param int $accountId 
	* @param int $contactId 
	* @return CustomerContact 
	*/
	public function getAccountContact( $accountId,  $contactId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerContactClient::getAccountContactClient( $accountId,  $contactId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CustomerContactCollection 
	*/
	public function getAccountContacts( $accountId, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerContactClient::getAccountContactsClient( $accountId, $filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param CustomerContact $contact 
	* @return CustomerContact 
	*/
	public function addAccountContact($contact,  $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerContactClient::addAccountContactClient($contact,  $accountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param int $contactId 
	* @param CustomerContact $contact 
	* @return CustomerContact 
	*/
	public function updateAccountContact($contact,  $accountId,  $contactId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerContactClient::updateAccountContactClient($contact,  $accountId,  $contactId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param int $contactId 
	*/
	public function deleteAccountContact( $accountId,  $contactId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerContactClient::deleteAccountContactClient( $accountId,  $contactId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

