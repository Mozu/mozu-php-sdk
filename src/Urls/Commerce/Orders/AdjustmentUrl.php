<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Orders;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class AdjustmentUrl  {

	/**
		* Get Resource Url for ApplyHandlingAdjustment
		* @param string $orderId 
		* @param string $responseFields 
		* @param string $updateMode 
		* @param string $version 
		* @return string Resource Url
	*/
	public static function applyHandlingAdjustmentUrl($orderId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/adjustment/handling?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ApplyShippingAdjustment
		* @param string $orderId Unique identifier of the order associated with the shipping adjustment.
		* @param string $responseFields 
		* @param string $updateMode Specifies whether to apply the shipping adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function applyShippingAdjustmentUrl($orderId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/adjustment/shipping?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ApplyAdjustment
		* @param string $orderId Unique identifier of the order for which to apply the adjustment.
		* @param string $responseFields 
		* @param string $updateMode Specifies whether to apply the adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function applyAdjustmentUrl($orderId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/adjustment?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveHandlingAdjustment
		* @param string $orderId 
		* @param string $updateMode 
		* @param string $version 
		* @return string Resource Url
	*/
	public static function removeHandlingAdjustmentUrl($orderId, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/adjustment/handling?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveShippingAdjustment
		* @param string $orderId Unique identifier of the order with the applied shipping adjustment.
		* @param string $updateMode Specifies whether to remove the shipping adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function removeShippingAdjustmentUrl($orderId, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/adjustment/shipping?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveAdjustment
		* @param string $orderId Unique identifier of the order for which to delete the adjustment.
		* @param string $updateMode Specifies whether to remove the adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function removeAdjustmentUrl($orderId, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/adjustment?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
}

?>

