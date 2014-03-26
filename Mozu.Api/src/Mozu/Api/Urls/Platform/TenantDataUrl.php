<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class TenantDataUrl  {

	/**
		* Get Resource Url for GetDBValue
		* @param string $dbEntryQuery The database entry query string used to retrieve the record information.
		* @return string Resource Url
	*/
	public static function getDBValueUrl($dbEntryQuery)
	{
		$url = "/api/platform/tenantdata/{*dbEntryQuery}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateDBValue
		* @param string $dbEntryQuery The database entry string to create.
		* @return string Resource Url
	*/
	public static function createDBValueUrl($dbEntryQuery)
	{
		$url = "/api/platform/tenantdata/{*dbEntryQuery}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateDBValue
		* @param string $dbEntryQuery The database entry query string used to update the record information.
		* @return string Resource Url
	*/
	public static function updateDBValueUrl($dbEntryQuery)
	{
		$url = "/api/platform/tenantdata/{*dbEntryQuery}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteDBValue
		* @param string $dbEntryQuery The database entry string to delete.
		* @return string Resource Url
	*/
	public static function deleteDBValueUrl($dbEntryQuery)
	{
		$url = "/api/platform/tenantdata/{*dbEntryQuery}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);
		return $mozuUrl;
	}
	
}

?>

