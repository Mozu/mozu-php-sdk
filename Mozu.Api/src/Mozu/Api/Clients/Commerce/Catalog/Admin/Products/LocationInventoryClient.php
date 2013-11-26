<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Products;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Products\LocationInventoryUrl;

/**
* 
*/
class LocationInventoryClient {

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $productCode 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getLocationInventoriesClient($dataViewMode,  $productCode, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationInventoryUrl::getLocationInventoriesUrl($filter, $pageSize, $productCode, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationCode 
	* @param string $productCode 
	* @return MozuClient
	*/
	public static function getLocationInventoryClient($dataViewMode,  $locationCode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationInventoryUrl::getLocationInventoryUrl($locationCode, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $productCode 
	* @param array|LocationInventory $locationInventoryList 
	* @return MozuClient
	*/
	public static function addLocationInventoryClient($dataViewMode, $locationInventoryList,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationInventoryUrl::addLocationInventoryUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationInventoryList)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $productCode 
	* @param array|LocationInventoryAdjustment $locationInventoryAdjustments 
	* @return MozuClient
	*/
	public static function updateLocationInventoryClient($dataViewMode, $locationInventoryAdjustments,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationInventoryUrl::updateLocationInventoryUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($locationInventoryAdjustments)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationCode 
	* @param string $productCode 
	*/
	public static function deleteLocationInventoryClient($dataViewMode,  $locationCode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationInventoryUrl::deleteLocationInventoryUrl($locationCode, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

