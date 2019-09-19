<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\LocationUrl;


/**
* Use the Location resource to retrieve details about a location from a Mozu hosted storefront.
*/
class LocationClient {

	/**
	* 
	*
	* @param bool $includeAttributeDefinition 
	* @param string $locationCode 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getLocationClient($locationCode, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$url = LocationUrl::getLocationUrl($includeAttributeDefinition, $locationCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param bool $includeAttributeDefinition 
	* @param string $locationUsageType System-defined location usage type code, which is DS for direct ship, SP for in-store pickup, or storeFinder.
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getLocationsInUsageTypeClient($locationUsageType, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$url = LocationUrl::getLocationsInUsageTypeUrl($filter, $includeAttributeDefinition, $locationUsageType, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param bool $includeAttributeDefinition 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getDirectShipLocationClient($includeAttributeDefinition =  null, $responseFields =  null)
	{
		$url = LocationUrl::getDirectShipLocationUrl($includeAttributeDefinition, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param bool $includeAttributeDefinition 
	* @param string $locationCode 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getInStorePickupLocationClient($locationCode, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$url = LocationUrl::getInStorePickupLocationUrl($includeAttributeDefinition, $locationCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param bool $includeAttributeDefinition 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getInStorePickupLocationsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$url = LocationUrl::getInStorePickupLocationsUrl($filter, $includeAttributeDefinition, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

