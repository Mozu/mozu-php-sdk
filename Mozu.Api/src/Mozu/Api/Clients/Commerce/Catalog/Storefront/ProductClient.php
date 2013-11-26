<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Storefront;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Storefront\ProductUrl;

/**
* 
*/
class ProductClient {

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getProductsClient($filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductUrl::getProductsUrl($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationCodes 
	* @param string $productCode 
	* @return MozuClient
	*/
	public static function getProductInventoryClient( $productCode, $locationCodes =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductUrl::getProductInventoryUrl($locationCodes, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param bool $allowInactive 
	* @param string $productCode 
	* @param string $variationProductCode 
	* @return MozuClient
	*/
	public static function getProductClient( $productCode, $allowInactive =  null, $variationProductCode =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductUrl::getProductUrl($allowInactive, $productCode, $variationProductCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param bool $includeOptionDetails 
	* @param string $productCode 
	* @param ProductOptionSelections $productOptionSelections 
	* @return MozuClient
	*/
	public static function configuredProductClient($productOptionSelections,  $productCode, $includeOptionDetails =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductUrl::configuredProductUrl($includeOptionDetails, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productOptionSelections);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $productCode 
	* @param ProductOptionSelections $productOptionSelections 
	* @return MozuClient
	*/
	public static function validateProductClient($productOptionSelections,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductUrl::validateProductUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productOptionSelections);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

