<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Admin\LocationTypeUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class LocationTypeClient {

	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getLocationTypesClient()
	{
		$url = LocationTypeUrl::getLocationTypesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationTypeCode 
	* @return MozuClient
	*/
	public static function getLocationTypeClient($locationTypeCode)
	{
		$url = LocationTypeUrl::getLocationTypeUrl($locationTypeCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param LocationType $locationType 
	* @return MozuClient
	*/
	public static function addLocationTypeClient($locationType)
	{
		$url = LocationTypeUrl::addLocationTypeUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationType);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationTypeCode 
	* @param LocationType $locationType 
	* @return MozuClient
	*/
	public static function updateLocationTypeClient($locationType, $locationTypeCode)
	{
		$url = LocationTypeUrl::updateLocationTypeUrl($locationTypeCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationType);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationTypeCode 
	*/
	public static function deleteLocationTypeClient($locationTypeCode)
	{
		$url = LocationTypeUrl::deleteLocationTypeUrl($locationTypeCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

