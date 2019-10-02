<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Quotes;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class OrderItemUrl  {

	/**
		* Get Resource Url for GetQuoteItem
		* @param string $quoteId 
		* @param string $quoteItemId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getQuoteItemUrl($quoteId, $quoteItemId, $responseFields)
	{
		$url = "/api/commerce/quotes/{quoteId}/items/{quoteItemId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("quoteId", $quoteId);
		$url = $mozuUrl->formatUrl("quoteItemId", $quoteItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetQuoteItems
		* @param string $filter 
		* @param int $pageSize 
		* @param string $quoteId 
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getQuoteItemsUrl($filter, $pageSize, $quoteId, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/quotes/{quoteId}/items?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("quoteId", $quoteId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetQuoteItemsByQuoteName
		* @param int $customerAccountId 
		* @param string $filter 
		* @param int $pageSize 
		* @param string $quoteName 
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getQuoteItemsByQuoteNameUrl($customerAccountId, $filter, $pageSize, $quoteName, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/quotes/customers/{customerAccountId}/{quoteName}/items?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("customerAccountId", $customerAccountId);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("quoteName", $quoteName);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddItemToQuote
		* @param string $quoteId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function addItemToQuoteUrl($quoteId, $responseFields)
	{
		$url = "/api/commerce/quotes/{quoteId}/items?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("quoteId", $quoteId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateQuoteItem
		* @param string $quoteId 
		* @param string $quoteItemId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function updateQuoteItemUrl($quoteId, $quoteItemId, $responseFields)
	{
		$url = "/api/commerce/quotes/{quoteId}/items/{quoteItemId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("quoteId", $quoteId);
		$url = $mozuUrl->formatUrl("quoteItemId", $quoteItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteQuoteItem
		* @param string $quoteId 
		* @param string $quoteItemId 
		* @return string Resource Url
	*/
	public static function deleteQuoteItemUrl($quoteId, $quoteItemId)
	{
		$url = "/api/commerce/quotes/{quoteId}/items/{quoteItemId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("quoteId", $quoteId);
		$url = $mozuUrl->formatUrl("quoteItemId", $quoteItemId);
		return $mozuUrl;
	}
	
}

?>
