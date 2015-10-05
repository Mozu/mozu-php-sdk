<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Products;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Products\ProductPropertyUrl;

use Mozu\Api\Headers;

/**
* Use the Properties resource to configure a property attribute for an individual product associated with a product type that uses the property attribute, as well as set property values for the product.
*/
class ProductPropertyClient {

	/**
	* Retrieves a list of the property attributes configured for the product specified in the request.
	*
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @return MozuClient
	*/
	public static function getPropertiesClient($dataViewMode, $productCode)
	{
		$url = ProductPropertyUrl::getPropertiesUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves a collection of property values for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $value The value string to create.
	* @return MozuClient
	*/
	public static function getPropertyValueLocalizedContentsClient($dataViewMode, $productCode, $attributeFQN, $value)
	{
		$url = ProductPropertyUrl::getPropertyValueLocalizedContentsUrl($attributeFQN, $productCode, $value);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return MozuClient
	*/
	public static function getPropertyValueLocalizedContentClient($dataViewMode, $productCode, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$url = ProductPropertyUrl::getPropertyValueLocalizedContentUrl($attributeFQN, $localeCode, $productCode, $responseFields, $value);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a property attribute configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getPropertyClient($dataViewMode, $productCode, $attributeFQN, $responseFields =  null)
	{
		$url = ProductPropertyUrl::getPropertyUrl($attributeFQN, $productCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Adds a property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @param ProductPropertyValueLocalizedContent $localizedContent Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function addPropertyValueLocalizedContentClient($dataViewMode, $localizedContent, $productCode, $attributeFQN, $value, $responseFields =  null)
	{
		$url = ProductPropertyUrl::addPropertyValueLocalizedContentUrl($attributeFQN, $productCode, $responseFields, $value);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($localizedContent)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Configures a property attribute for the product specified in the request.
	*
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductProperty $productProperty Details of a property defined for a product.
	* @return MozuClient
	*/
	public static function addPropertyClient($dataViewMode, $productProperty, $productCode, $responseFields =  null)
	{
		$url = ProductPropertyUrl::addPropertyUrl($productCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productProperty)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates all property values for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $value The value string to create.
	* @param array|ProductPropertyValueLocalizedContent $localizedContent Content of the product property value in the language defined for the locale code.
	* @return MozuClient
	*/
	public static function updatePropertyValueLocalizedContentsClient($dataViewMode, $localizedContent, $productCode, $attributeFQN, $value)
	{
		$url = ProductPropertyUrl::updatePropertyValueLocalizedContentsUrl($attributeFQN, $productCode, $value);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($localizedContent)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates the property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @param ProductPropertyValueLocalizedContent $localizedContent Content of the product property value in the language defined for the locale code.
	* @return MozuClient
	*/
	public static function updatePropertyValueLocalizedContentClient($dataViewMode, $localizedContent, $productCode, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$url = ProductPropertyUrl::updatePropertyValueLocalizedContentUrl($attributeFQN, $localeCode, $productCode, $responseFields, $value);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($localizedContent)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Update one or more details of a property attribute configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductProperty $productProperty Details of a property defined for a product.
	* @return MozuClient
	*/
	public static function updatePropertyClient($dataViewMode, $productProperty, $productCode, $attributeFQN, $responseFields =  null)
	{
		$url = ProductPropertyUrl::updatePropertyUrl($attributeFQN, $productCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productProperty)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Deletes the configuration of a property attribute for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	*/
	public static function deletePropertyClient($dataViewMode, $productCode, $attributeFQN)
	{
		$url = ProductPropertyUrl::deletePropertyUrl($attributeFQN, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Deletes the property value for localized content. This content is set by the locale code. 
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $productCode The unique, user-defined product code of a product, used throughout Mozu to reference and associate to a product.
	* @param string $value The value string to create.
	*/
	public static function deletePropertyValueLocalizedContentClient($dataViewMode, $productCode, $attributeFQN, $value, $localeCode)
	{
		$url = ProductPropertyUrl::deletePropertyValueLocalizedContentUrl($attributeFQN, $localeCode, $productCode, $value);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

