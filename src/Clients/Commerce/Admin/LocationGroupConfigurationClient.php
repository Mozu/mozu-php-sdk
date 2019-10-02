<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Admin\LocationGroupConfigurationUrl;


/**
* 
*/
class LocationGroupConfigurationClient {

	/**
	* 
	*
	* @param int $locationGroupId 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getLocationGroupConfigurationClient($locationGroupId, $responseFields =  null)
	{
		$url = LocationGroupConfigurationUrl::getLocationGroupConfigurationUrl($locationGroupId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationCode 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getLocationGroupConfigurationByLocationCodeClient($locationCode, $responseFields =  null)
	{
		$url = LocationGroupConfigurationUrl::getLocationGroupConfigurationByLocationCodeUrl($locationCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $locationGroupId 
	* @param string $responseFields 
	* @param LocationGroupConfiguration $configuration 
	* @return MozuClient
	*/
	public static function setLocationGroupConfigurationClient($configuration, $locationGroupId, $responseFields =  null)
	{
		$url = LocationGroupConfigurationUrl::setLocationGroupConfigurationUrl($locationGroupId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($configuration);
		return $mozuClient;

	}
	
	
}

?>
