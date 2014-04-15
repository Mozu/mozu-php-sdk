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

class BillingInfoUrl  {

	/**
		* Get Resource Url for GetBillingInfo
		* @param bool $draft If true, retrieve the draft version of the order billing information, which might include uncommitted changes.
		* @param string $orderId Unique identifier of the order.
		* @return string Resource Url
	*/
	public static function getBillingInfoUrl($draft, $orderId)
	{
		$url = "/api/commerce/orders/{orderId}/billinginfo?draft={draft}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("draft", $draft);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for SetBillingInfo
		* @param string $orderId Unique identifier of the order.
		* @param string $updateMode Specifies whether to set the billing information by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
		* @return string Resource Url
	*/
	public static function setBillingInfoUrl($orderId, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/billinginfo?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
}

?>

