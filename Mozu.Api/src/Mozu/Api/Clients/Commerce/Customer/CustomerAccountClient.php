<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\CustomerAccountUrl;

/**
* Create, view, update, and delete a contact in a customer account. A customer account may have multiple contacts for billing or shipping addresses. Each contact may also list any groups to which the contact belongs and whether the contact accepts marketing material such as newsletters or email offers.
*/
class CustomerAccountClient {

	/**
	* Retrieves a list of customer accounts.
	*
	* @param string $fields The fields to include in the response.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize 
	* @param string $q A list of customer account search terms to use in the query when searching across customer name and email. Separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getAccountsClient($fields, $filter, $pageSize, $q, $qLimit, $sortBy, $startIndex)
	{
		$url = CustomerAccountUrl::getAccountsUrl($fields, $filter, $pageSize, $q, $qLimit, $sortBy, $startIndex);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieve details of a customer account.
	*
	* @param int $accountId Unique identifier of the customer account to retrieve.
	* @return MozuClient
	*/
	public static function getAccountClient($accountId)
	{
		$url = CustomerAccountUrl::getAccountUrl($accountId);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new customer account.
	*
	* @param CustomerAccount $customerAccount Properties of the new customer account to create.
	* @return MozuClient
	*/
	public static function addAccountClient($customerAccount)
	{
		$url = CustomerAccountUrl::addAccountUrl();
		$verb = "POST";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($customerAccount);
		return $mozuClient;

	}
	
	/**
	* Updates a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param CustomerAccount $customerAccount Properties of the customer account to update.
	* @return MozuClient
	*/
	public static function updateAccountClient($accountId, $customerAccount)
	{
		$url = CustomerAccountUrl::updateAccountUrl($accountId);
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($customerAccount);
		return $mozuClient;

	}
	
	/**
	* Deletes a customer account. A customer account cannot be deleted if any orders exist, past or present.
	*
	* @param int $accountId Unique identifier of the customer account to delete.
	*/
	public static function deleteAccountClient($accountId)
	{
		$url = CustomerAccountUrl::deleteAccountUrl($accountId);
		$verb = "DELETE";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

