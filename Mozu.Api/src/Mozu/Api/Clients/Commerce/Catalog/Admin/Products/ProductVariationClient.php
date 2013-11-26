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
use Mozu\Api\Urls\Commerce\Catalog\Admin\Products\ProductVariationUrl;

/**
* 
*/
class ProductVariationClient {

	/**
	* 
	*
	* @param string $productCode 
	* @param string $variationKey 
	* @return MozuClient
	*/
	public static function getProductVariationClient($dataViewMode,  $productCode,  $variationKey, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductVariationUrl::getProductVariationUrl($productCode, $variationKey);
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
	* @param string $filter 
	* @param int $pageSize 
	* @param string $productCode 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getProductVariationsClient($dataViewMode,  $productCode, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductVariationUrl::getProductVariationsUrl($filter, $pageSize, $productCode, $sortBy, $startIndex);
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
	* @param ProductVariationCollection $productVariations 
	* @return MozuClient
	*/
	public static function updateProductVariationsClient($dataViewMode, $productVariations,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductVariationUrl::updateProductVariationsUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productVariations)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $productCode 
	* @param string $variationKey 
	* @param ProductVariation $productVariation 
	* @return MozuClient
	*/
	public static function updateProductVariationClient($dataViewMode, $productVariation,  $productCode,  $variationKey, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductVariationUrl::updateProductVariationUrl($productCode, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productVariation)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $productCode 
	* @param string $variationKey 
	*/
	public static function deleteProductVariationClient($dataViewMode,  $productCode,  $variationKey, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductVariationUrl::deleteProductVariationUrl($productCode, $variationKey);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

