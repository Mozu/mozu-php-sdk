<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
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
		* @param string $q 
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getReturnsUrl($filter, $pageSize, $q, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/returns/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&q={q}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("q", $q);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAvailableReturnActions
		* @param string $returnId Unique identifier of the return for which to retrieve available actions.
		* @return string Resource Url
	*/
	public static function getAvailableReturnActionsUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}/actions";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetReturnItem
		* @param string $responseFields 
		* @param string $returnId 
		* @param string $returnItemId 
		* @return string Resource Url
	*/
	public static function getReturnItemUrl($responseFields, $returnId, $returnItemId)
	{
		$url = "/api/commerce/returns/{returnId}/items/{returnItemId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		$url = $mozuUrl->formatUrl("returnItemId", $returnItemId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetReturnItems
		* @param string $responseFields 
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function getReturnItemsUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/items?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAvailablePaymentActionsForReturn
		* @param string $paymentId Unique identifier of the payment for which to perform the action.
		* @param string $returnId Unique identifier of the return associated with the payment.
		* @return string Resource Url
	*/
	public static function getAvailablePaymentActionsForReturnUrl($paymentId, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/{paymentId}/actions";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("paymentId", $paymentId);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPayment
		* @param string $paymentId Unique identifier of the return payment to retrieve.
		* @param string $responseFields 
		* @param string $returnId Unique identifier of the return associated with the payment.
		* @return string Resource Url
	*/
	public static function getPaymentUrl($paymentId, $responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/{paymentId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("paymentId", $paymentId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPayments
		* @param string $responseFields 
		* @param string $returnId Returns the details of the refund payment associated with the return specified in the request.
		* @return string Resource Url
	*/
	public static function getPaymentsUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetReturn
		* @param string $responseFields 
		* @param string $returnId Returns the properties of the return specified in the request as well as system-supplied information.
		* @return string Resource Url
	*/
	public static function getReturnUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetReasons
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getReasonsUrl($responseFields)
	{
		$url = "/api/commerce/returns/reasons?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateReturn
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function createReturnUrl($responseFields)
	{
		$url = "/api/commerce/returns/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateReturnItem
		* @param string $responseFields 
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function createReturnItemUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/items?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for PerformPaymentActionForReturn
		* @param string $paymentId Unique identifier of the return payment to update.
		* @param string $responseFields 
		* @param string $returnId Unique identifier of the return associated with the refund payment.
		* @return string Resource Url
	*/
	public static function performPaymentActionForReturnUrl($paymentId, $responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/{paymentId}/actions?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("paymentId", $paymentId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreatePaymentActionForReturn
		* @param string $responseFields 
		* @param string $returnId Unique identifier of the return associated with the payment action.
		* @return string Resource Url
	*/
	public static function createPaymentActionForReturnUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/payments/actions?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RestockReturnItems
		* @param string $responseFields 
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function restockReturnItemsUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/restock?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateReturnShippingOrder
		* @param string $responseFields 
		* @param string $returnId 
		* @return string Resource Url
	*/
	public static function createReturnShippingOrderUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}/ship?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for PerformReturnActions
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function performReturnActionsUrl($responseFields)
	{
		$url = "/api/commerce/returns/actions?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateReturn
		* @param string $responseFields 
		* @param string $returnId Unique identifier of the return.
		* @return string Resource Url
	*/
	public static function updateReturnUrl($responseFields, $returnId)
	{
		$url = "/api/commerce/returns/{returnId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ResendReturnEmail
		* @return string Resource Url
	*/
	public static function resendReturnEmailUrl()
	{
		$url = "/api/commerce/returns/email/resend";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteOrderItem
		* @param string $returnId 
		* @param string $returnItemId 
		* @return string Resource Url
	*/
	public static function deleteOrderItemUrl($returnId, $returnItemId)
	{
		$url = "/api/commerce/returns/{orderId}/items/{orderItemId}?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		$url = $mozuUrl->formatUrl("returnItemId", $returnItemId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteReturn
		* @param string $returnId Unique identifier of the return to delete.
		* @return string Resource Url
	*/
	public static function deleteReturnUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("returnId", $returnId);
		return $mozuUrl;
	}
	
}

?>
