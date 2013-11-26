<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\ReferenceDataUrl;

/**
* 
*/
class ReferenceDataClient {

	/**
	* 
	*
	* @param string $countryCode 
	* @return MozuClient
	*/
	public static function getAddressSchemaClient($countryCode =  null)
	{
		$url = ReferenceDataUrl::getAddressSchemaUrl($countryCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getAddressSchemasClient()
	{
		$url = ReferenceDataUrl::getAddressSchemasUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $behaviorId 
	* @return MozuClient
	*/
	public static function getBehaviorClient( $behaviorId)
	{
		$url = ReferenceDataUrl::getBehaviorUrl($behaviorId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getBehaviorCategoriesClient()
	{
		$url = ReferenceDataUrl::getBehaviorCategoriesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $categoryId 
	* @return MozuClient
	*/
	public static function getBehaviorCategoryClient( $categoryId)
	{
		$url = ReferenceDataUrl::getBehaviorCategoryUrl($categoryId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $userType 
	* @return MozuClient
	*/
	public static function getBehaviorsClient($userType =  null)
	{
		$url = ReferenceDataUrl::getBehaviorsUrl($userType);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getContentLocalesClient()
	{
		$url = ReferenceDataUrl::getContentLocalesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getCountriesClient()
	{
		$url = ReferenceDataUrl::getCountriesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getCurrenciesClient()
	{
		$url = ReferenceDataUrl::getCurrenciesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getTimeZonesClient()
	{
		$url = ReferenceDataUrl::getTimeZonesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getTopLevelDomainsClient()
	{
		$url = ReferenceDataUrl::getTopLevelDomainsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @return MozuClient
	*/
	public static function getUnitsOfMeasureClient($filter =  null)
	{
		$url = ReferenceDataUrl::getUnitsOfMeasureUrl($filter);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

