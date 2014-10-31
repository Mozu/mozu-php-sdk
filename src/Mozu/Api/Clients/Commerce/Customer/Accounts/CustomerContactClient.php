<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\Accounts\CustomerContactUrl;
use Mozu\Api\Headers;

use Mozu\Api\Contracts\Customer\CustomerContact;
use Mozu\Api\Contracts\Customer\CustomerContactCollection;

/**
* Merchants and customers can create, view, update, and delete a contact for a customer account. A customer account may have multiple contacts for billing and shipping addresses.
*/
class CustomerContactClient {

	/**
	* Retrieves the specified contact for a customer account such as a billing or shipping contact.
	*
	* @param int $accountId Unique identifier of the customer account whose contact information is being retrieved.
	* @param int $contactId Unique identifier of the customer account contact to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getAccountContactClient($accountId, $contactId, $responseFields =  null)
	{
		$url = CustomerContactUrl::getAccountContactUrl($accountId, $contactId, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Retrieves a list of contacts for a customer according to any specified filter criteria and sort options.
	*
	* @param int $accountId Unique identifier of the customer account associated with the contact information to retrieve.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getAccountContactsClient($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = CustomerContactUrl::getAccountContactsUrl($accountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Creates a new contact for a customer account such as a new shipping address.
	*
	* @param int $accountId Unique identifier of the customer account containing the new contact.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerContact $contact Properties of the new contact. Required properties: Contact.Email, ContactType.
	* @return MozuClient
	*/
	public static function addAccountContactClient($contact, $accountId, $responseFields =  null)
	{
		$url = CustomerContactUrl::addAccountContactUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($contact);

	}
	
	/**
	* Updates a contact for a specified customer account such as to update addresses or change which contact is the primary contact for billing.
	*
	* @param int $accountId Unique identifier of the customer account whose contact information is being updated.
	* @param int $contactId Unique identifer of the customer account contact being updated.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerContact $contact All properties the updated contact will have. Required properties: Name and email address.
	* @return MozuClient
	*/
	public static function updateAccountContactClient($contact, $accountId, $contactId, $responseFields =  null)
	{
		$url = CustomerContactUrl::updateAccountContactUrl($accountId, $contactId, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($contact);

	}
	
	/**
	* Deletes a contact for the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param int $contactId Unique identifier of the customer account contact to delete.
	* @return MozuClient
	*/
	public static function deleteAccountContactClient($accountId, $contactId)
	{
		$url = CustomerContactUrl::deleteAccountContactUrl($accountId, $contactId);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	
}

?>

