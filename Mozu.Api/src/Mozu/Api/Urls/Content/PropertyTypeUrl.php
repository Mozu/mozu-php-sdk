<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Content;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class PropertyTypeUrl  {

	/**
		* Get Resource Url for GetList
		* @param int $pageSize 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getListUrl($pageSize, $startIndex)
	{
		$url = "/api/content/propertytypes/?pageSize={pageSize}&startIndex={startIndex}";
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for Get
		* @param string $propertyTypeName 
		* @return string Resource Url
	*/
	public static function getUrl($propertyTypeName)
	{
		$url = "/api/content/propertytypes/{propertyTypeName}";
		$url = MozuUrl::formatUrl($url, "propertyTypeName", $propertyTypeName);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for PropertyValueTypes
		* @return string Resource Url
	*/
	public static function propertyValueTypesUrl()
	{
		$url = "/api/content/propertytypes/propertyvaluetypes";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
}

?>

