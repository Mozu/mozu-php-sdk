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
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypeExtraUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Extras subresource to define how a product attribute classified as an "extra" is used for a specific product type. Product attribute defintions are unique for each associated product type.
*/
class ProductTypeExtraClient {

	/**
	* Retrieves a list of extra attributes defined for the specified product type.
	*
	* @param int $productTypeId Identifier of the product type.
	* @return MozuClient
	*/
	public static function getExtrasClient($dataViewMode, $productTypeId)
	{
		$url = ProductTypeExtraUrl::getExtrasUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of an extra attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type whose extra is being retrieved.
	* @return MozuClient
	*/
	public static function getExtraClient($dataViewMode, $productTypeId, $attributeFQN)
	{
		$url = ProductTypeExtraUrl::getExtraUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Assigns a defined extra attribute to the product type based on the information supplied in the request.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param AttributeInProductType $attributeInProductType The properties of the extra attribute definition for this product type assignment.
	* @return MozuClient
	*/
	public static function addExtraClient($dataViewMode, $attributeInProductType, $productTypeId)
	{
		$url = ProductTypeExtraUrl::addExtraUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Update the definition of an extra attribute for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param AttributeInProductType $attributeInProductType The properties of the extra attribute definition to update for the product type.
	* @return MozuClient
	*/
	public static function updateExtraClient($dataViewMode, $attributeInProductType, $productTypeId, $attributeFQN)
	{
		$url = ProductTypeExtraUrl::updateExtraUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Removes an extra attribute definition from the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	*/
	public static function deleteExtraClient($dataViewMode, $productTypeId, $attributeFQN)
	{
		$url = ProductTypeExtraUrl::deleteExtraUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

