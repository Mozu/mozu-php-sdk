<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Orders;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class BillingInfoUrl  {

	/**
		* Get Resource Url for GetBillingInfo
		* @param bool $draft 
		* @param string $orderId 
		* @return string Resource Url
	*/
	public static function getBillingInfoUrl($draft, $orderId)
	{
		$url = "/api/commerce/orders/{orderId}/billinginfo?draft={draft}";
		$url = MozuUrl::formatUrl($url, "draft", $draft);
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for SetBillingInfo
		* @param string $orderId 
		* @param string $updateMode 
		* @param string $version 
		* @return string Resource Url
	*/
	public static function setBillingInfoUrl($orderId, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/billinginfo?updatemode={updateMode}&version={version}";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		$url = MozuUrl::formatUrl($url, "updateMode", $updateMode);
		$url = MozuUrl::formatUrl($url, "version", $version);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
}

?>

