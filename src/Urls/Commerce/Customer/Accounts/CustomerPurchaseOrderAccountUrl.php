<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer\Accounts;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CustomerPurchaseOrderAccountUrl  {

	/**
		* Get Resource Url for GetCustomerPurchaseOrderAccount
		* @param int $accountId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getCustomerPurchaseOrderAccountUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/purchaseOrderAccount?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCustomerPurchaseOrderTransactions
		* @param int $accountId 
		* @param string $filter 
		* @param int $pageSize 
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getCustomerPurchaseOrderTransactionsUrl($accountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/PurchaseOrderTransaction?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateCustomerPurchaseOrderAccount
		* @param int $accountId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function createCustomerPurchaseOrderAccountUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/purchaseOrderAccount?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreatePurchaseOrderTransaction
		* @param int $accountId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function createPurchaseOrderTransactionUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/PurchaseOrderTransaction?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCustomerPurchaseOrderAccount
		* @param int $accountId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function updateCustomerPurchaseOrderAccountUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/purchaseOrderAccount?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCustomerPurchaseOrderAccount
		* @param int $accountId 
		* @return string Resource Url
	*/
	public static function deleteCustomerPurchaseOrderAccountUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/internal/{accountId}/purchaseOrderAccount";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		return $mozuUrl;
	}
	
}

?>
