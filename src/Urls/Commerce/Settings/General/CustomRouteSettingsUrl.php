<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Settings\General;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CustomRouteSettingsUrl  {

	/**
		* Get Resource Url for GetCustomRouteSettings
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getCustomRouteSettingsUrl($responseFields)
	{
		$url = "/api/commerce/settings/general/customroutes?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateCustomRouteSettings
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function createCustomRouteSettingsUrl($responseFields)
	{
		$url = "/api/commerce/settings/general/customroutes?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCustomRouteSettings
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function updateCustomRouteSettingsUrl($responseFields)
	{
		$url = "/api/commerce/settings/general/customroutes?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCustomRouteSettings
		* @return string Resource Url
	*/
	public static function deleteCustomRouteSettingsUrl()
	{
		$url = "/api/commerce/settings/general/customroutes";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		return $mozuUrl;
	}
	
}

?>

