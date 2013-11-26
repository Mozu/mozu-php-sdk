<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypeOptionUrl;

/**
* 
*/
class ProductTypeOptionClient {

	/**
	* 
	*
	* @param int $productTypeId 
	* @return MozuClient
	*/
	public static function getOptionsClient($dataViewMode,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductTypeOptionUrl::getOptionsUrl($productTypeId);
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
	* @param string $attributeFQN 
	* @param int $productTypeId 
	* @return MozuClient
	*/
	public static function getOptionClient($dataViewMode,  $attributeFQN,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductTypeOptionUrl::getOptionUrl($attributeFQN, $productTypeId);
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
	* @param int $productTypeId 
	* @param AttributeInProductType $attributeInProductType 
	* @return MozuClient
	*/
	public static function addOptionClient($dataViewMode, $attributeInProductType,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductTypeOptionUrl::addOptionUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param int $productTypeId 
	* @param AttributeInProductType $attributeInProductType 
	* @return MozuClient
	*/
	public static function updateOptionClient($dataViewMode, $attributeInProductType,  $attributeFQN,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductTypeOptionUrl::updateOptionUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param int $productTypeId 
	*/
	public static function deleteOptionClient($dataViewMode,  $attributeFQN,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductTypeOptionUrl::deleteOptionUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

