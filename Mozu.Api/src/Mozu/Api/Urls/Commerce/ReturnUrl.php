<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ReturnUrl  {

	/**
		* Get Resource Url for GetReturns
		* @param string $filter 
		* @param int $pageSize 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getReturnsUrl($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/returns/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetReturn
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function getReturnUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}";
		$url = MozuUrl::formatUrl($url, "returnId", $returnId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetAvailableReturnActions
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function getAvailableReturnActionsUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}/actions";
		$url = MozuUrl::formatUrl($url, "returnId", $returnId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetPayments
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function getPaymentsUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments";
		$url = MozuUrl::formatUrl($url, "returnId", $returnId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetPayment
		* @param string $paymentId 
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function getPaymentUrl($paymentId, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/{paymentId}";
		$url = MozuUrl::formatUrl($url, "paymentId", $paymentId);
		$url = MozuUrl::formatUrl($url, "returnId", $returnId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetAvailablePaymentActionsForReturn
		* @param string $paymentId 
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function getAvailablePaymentActionsForReturnUrl($paymentId, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/{paymentId}/actions";
		$url = MozuUrl::formatUrl($url, "paymentId", $paymentId);
		$url = MozuUrl::formatUrl($url, "returnId", $returnId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for CreateReturn
		* @return string Resource Url
	*/
	public static function createReturnUrl()
	{
		$url = "/api/commerce/returns/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for PerformPaymentActionForReturn
		* @param string $paymentId 
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function performPaymentActionForReturnUrl($paymentId, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/{paymentId}/actions";
		$url = MozuUrl::formatUrl($url, "paymentId", $paymentId);
		$url = MozuUrl::formatUrl($url, "returnId", $returnId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for CreatePaymentActionForReturn
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function createPaymentActionForReturnUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/actions";
		$url = MozuUrl::formatUrl($url, "returnId", $returnId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for PerformReturnActions
		* @return string Resource Url
	*/
	public static function performReturnActionsUrl()
	{
		$url = "/api/commerce/returns/actions";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateReturn
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function updateReturnUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}";
		$url = MozuUrl::formatUrl($url, "returnId", $returnId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteReturn
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function deleteReturnUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}";
		$url = MozuUrl::formatUrl($url, "returnId", $returnId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>

