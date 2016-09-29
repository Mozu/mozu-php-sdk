<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\Accounts\CustomerPurchaseOrderAccountUrl;


/**
* commerce/customer/accounts/purchaseOrder related resources. DOCUMENT_HERE 
*/
class CustomerPurchaseOrderAccountClient {

	/**
	* accounts-purchaseOrder Get GetCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getCustomerPurchaseOrderAccountClient($accountId, $responseFields =  null)
	{
		$url = CustomerPurchaseOrderAccountUrl::getCustomerPurchaseOrderAccountUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* accounts-purchaseOrder Get GetCustomerPurchaseOrderTransactions description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter 
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return MozuClient
	*/
	public static function getCustomerPurchaseOrderTransactionsClient($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = CustomerPurchaseOrderAccountUrl::getCustomerPurchaseOrderTransactionsUrl($accountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* accounts-purchaseOrder Post CreateCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CustomerPurchaseOrderAccount $customerPurchaseOrderAccount Mozu.Customer.Contracts.CustomerPurchaseOrderAccount ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function createCustomerPurchaseOrderAccountClient($customerPurchaseOrderAccount, $accountId, $responseFields =  null)
	{
		$url = CustomerPurchaseOrderAccountUrl::createCustomerPurchaseOrderAccountUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customerPurchaseOrderAccount);
		return $mozuClient;

	}
	
	/**
	* accounts-purchaseOrder Post CreatePurchaseOrderTransaction description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param PurchaseOrderTransaction $purchaseOrderTransaction Mozu.Customer.Contracts.PurchaseOrderTransaction ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function createPurchaseOrderTransactionClient($purchaseOrderTransaction, $accountId, $responseFields =  null)
	{
		$url = CustomerPurchaseOrderAccountUrl::createPurchaseOrderTransactionUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($purchaseOrderTransaction);
		return $mozuClient;

	}
	
	/**
	* accounts-purchaseOrder Put UpdateCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CustomerPurchaseOrderAccount $customerPurchaseOrderAccount Mozu.Customer.Contracts.CustomerPurchaseOrderAccount ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function updateCustomerPurchaseOrderAccountClient($customerPurchaseOrderAccount, $accountId, $responseFields =  null)
	{
		$url = CustomerPurchaseOrderAccountUrl::updateCustomerPurchaseOrderAccountUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customerPurchaseOrderAccount);
		return $mozuClient;

	}
	
	/**
	* accounts-purchaseOrder Delete DeleteCustomerPurchaseOrderAccount description DOCUMENT_HERE 
	*
	* @param int $accountId Unique identifier of the customer account.
	*/
	public static function deleteCustomerPurchaseOrderAccountClient($accountId)
	{
		$url = CustomerPurchaseOrderAccountUrl::deleteCustomerPurchaseOrderAccountUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

