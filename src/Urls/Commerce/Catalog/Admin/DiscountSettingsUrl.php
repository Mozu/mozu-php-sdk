<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class DiscountSettingsUrl  {

	/**
		* Get Resource Url for GetDiscountSettings
		* @param int $catalogId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getDiscountSettingsUrl($catalogId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/discountsettings/{catalogId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("catalogId", $catalogId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateDiscountSettings
		* @param int $catalogId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function updateDiscountSettingsUrl($catalogId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/discountsettings/{catalogId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("catalogId", $catalogId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>

