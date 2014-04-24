<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypePropertyUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Properties subresource to define how property product attributes are used for a specific product type. Product attribute definitions are unique for each associated product type.
*/
class ProductTypePropertyClient {

	/**
	* Retrieves a list of product property attributes defined for a product type.
	*
	* @param int $productTypeId Identifier of the product type.
	* @return MozuClient
	*/
	public static function getPropertiesClient($dataViewMode, $productTypeId)
	{
		$url = ProductTypePropertyUrl::getPropertiesUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves a product property attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @return MozuClient
	*/
	public static function getPropertyClient($dataViewMode, $productTypeId, $attributeFQN)
	{
		$url = ProductTypePropertyUrl::getPropertyUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Assigns a property attribute to the specified product type, according to the information defined in the request.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param AttributeInProductType $attributeInProductType Properties of the property attribute to define for the specified product type.
	* @return MozuClient
	*/
	public static function addPropertyClient($dataViewMode, $attributeInProductType, $productTypeId)
	{
		$url = ProductTypePropertyUrl::addPropertyUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates the definition of a property attribute for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param AttributeInProductType $attributeInProductType Properties of the property attribute to define for the product type.
	* @return MozuClient
	*/
	public static function updatePropertyClient($dataViewMode, $attributeInProductType, $productTypeId, $attributeFQN)
	{
		$url = ProductTypePropertyUrl::updatePropertyUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Removes a property attribute previously defined for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	*/
	public static function deletePropertyClient($dataViewMode, $productTypeId, $attributeFQN)
	{
		$url = ProductTypePropertyUrl::deletePropertyUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

