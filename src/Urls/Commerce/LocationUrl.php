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

class LocationUrl  {

	/**
		* Get Resource Url for GetLocation
		* @param bool $includeAttributeDefinition 
		* @param string $locationCode 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getLocationUrl($includeAttributeDefinition, $locationCode, $responseFields)
	{
		$url = "/api/commerce/storefront/locations/{locationCode}?includeAttributeDefinition={includeAttributeDefinition}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("includeAttributeDefinition", $includeAttributeDefinition);
		$url = $mozuUrl->formatUrl("locationCode", $locationCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetLocationsInUsageType
		* @param string $filter 
		* @param bool $includeAttributeDefinition 
		* @param string $locationUsageType System-defined location usage type code, which is DS for direct ship, SP for in-store pickup, or storeFinder.
		* @param int $pageSize 
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getLocationsInUsageTypeUrl($filter, $includeAttributeDefinition, $locationUsageType, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/storefront/locationUsageTypes/{locationUsageType}/locations?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&includeAttributeDefinition={includeAttributeDefinition}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("includeAttributeDefinition", $includeAttributeDefinition);
		$url = $mozuUrl->formatUrl("locationUsageType", $locationUsageType);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetDirectShipLocation
		* @param bool $includeAttributeDefinition 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getDirectShipLocationUrl($includeAttributeDefinition, $responseFields)
	{
		$url = "/api/commerce/storefront/locationUsageTypes/DS/location?includeAttributeDefinition={includeAttributeDefinition}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("includeAttributeDefinition", $includeAttributeDefinition);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetInStorePickupLocation
		* @param bool $includeAttributeDefinition 
		* @param string $locationCode 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getInStorePickupLocationUrl($includeAttributeDefinition, $locationCode, $responseFields)
	{
		$url = "/api/commerce/storefront/locationUsageTypes/SP/locations/{locationCode}?includeAttributeDefinition={includeAttributeDefinition}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("includeAttributeDefinition", $includeAttributeDefinition);
		$url = $mozuUrl->formatUrl("locationCode", $locationCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetInStorePickupLocations
		* @param string $filter 
		* @param bool $includeAttributeDefinition 
		* @param int $pageSize 
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getInStorePickupLocationsUrl($filter, $includeAttributeDefinition, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/storefront/locationUsageTypes/SP/locations?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&includeAttributeDefinition={includeAttributeDefinition}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("includeAttributeDefinition", $includeAttributeDefinition);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
}

?>
