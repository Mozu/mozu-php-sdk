<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Settings;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class GeneralSettingsUrl  {

	/**
		* Get Resource Url for GetGeneralSettings
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getGeneralSettingsUrl($responseFields)
	{
		$url = "/api/commerce/settings/general/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateGeneralSettings
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function updateGeneralSettingsUrl($responseFields)
	{
		$url = "/api/commerce/settings/general/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>
