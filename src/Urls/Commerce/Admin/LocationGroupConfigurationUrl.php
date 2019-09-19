<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Admin;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class LocationGroupConfigurationUrl  {

	/**
		* Get Resource Url for GetLocationGroupConfiguration
		* @param int $locationGroupId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getLocationGroupConfigurationUrl($locationGroupId, $responseFields)
	{
		$url = "/api/commerce/admin/locationGroupConfiguration/{locationGroupId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("locationGroupId", $locationGroupId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetLocationGroupConfigurationByLocationCode
		* @param string $locationCode 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getLocationGroupConfigurationByLocationCodeUrl($locationCode, $responseFields)
	{
		$url = "/api/commerce/admin/locationGroupConfiguration/location/{locationCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("locationCode", $locationCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for SetLocationGroupConfiguration
		* @param int $locationGroupId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function setLocationGroupConfigurationUrl($locationGroupId, $responseFields)
	{
		$url = "/api/commerce/admin/locationGroupConfiguration/{locationGroupId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("locationGroupId", $locationGroupId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>

