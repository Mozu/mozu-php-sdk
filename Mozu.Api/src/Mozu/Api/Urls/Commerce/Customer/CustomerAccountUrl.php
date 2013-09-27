<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer;

use Mozu\Api\Urls\BaseUrl;

class CustomerAccountUrl extends BaseUrl {

	/**
		* Get Resource Url for GetAccounts
		* @param string $fields The fields to include in the response.
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize 
		* @param string $q A list of customer account search terms to use in the query when searching across customer name and email. Separate multiple search terms with a space character.
		* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getAccountsUrl($fields, $filter, $pageSize, $q, $qLimit, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&fields={fields}&q={q}&qLimit={qLimit}";
		$url = parent::formatUrl($url, "fields", $fields);
		$url = parent::formatUrl($url, "filter", $filter);
		$url = parent::formatUrl($url, "pageSize", $pageSize);
		$url = parent::formatUrl($url, "q", $q);
		$url = parent::formatUrl($url, "qLimit", $qLimit);
		$url = parent::formatUrl($url, "sortBy", $sortBy);
		$url = parent::formatUrl($url, "startIndex", $startIndex);
		return $url;
	}
	
	/**
		* Get Resource Url for GetAccount
		* @param int $accountId Unique identifier of the customer account to retrieve.
		* @return string Resource Url
	*/
	public static function getAccountUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}";
		$url = parent::formatUrl($url, "accountId", $accountId);
		return $url;
	}
	
	/**
		* Get Resource Url for AddAccount
		* @return string Resource Url
	*/
	public static function addAccountUrl()
	{
		$url = "/api/commerce/customer/accounts/";
		return $url;
	}
	
	/**
		* Get Resource Url for UpdateAccount
		* @param int $accountId Unique identifier of the customer account.
		* @return string Resource Url
	*/
	public static function updateAccountUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}";
		$url = parent::formatUrl($url, "accountId", $accountId);
		return $url;
	}
	
	/**
		* Get Resource Url for DeleteAccount
		* @param int $accountId Unique identifier of the customer account to delete.
		* @return string Resource Url
	*/
	public static function deleteAccountUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}";
		$url = parent::formatUrl($url, "accountId", $accountId);
		return $url;
	}
	
}

?>

