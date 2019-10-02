<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\AttributeUrl;


/**
* Use the Attribute Definition resource to manage the properties, options, and extras that uniquely describe products of a specific type. Attributes can be associated with a product type, assigned values by a client or shopper, and added as faceted search filters for a product category. Options are product attributes that describe unique configurations made by the shopper, such as size or color, and generate a new product variation (or unique SKU). Properties are product attributes that describe aspects of the product that do not represent an option configurable by the shopper, such as screen resolution or brand. Extras are product attributes that describe add-on configurations made by the shopper that do not represent a product variation, such as a monogram.
*/
class AttributeClient {

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getAttributesClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = AttributeUrl::getAttributesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getAttributeClient($attributeFQN, $responseFields =  null)
	{
		$url = AttributeUrl::getAttributeUrl($attributeFQN, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param Attribute $attribute Properties of the new product attribute to create.
	* @return MozuClient
	*/
	public static function addAttributeClient($attribute, $responseFields =  null)
	{
		$url = AttributeUrl::addAttributeUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @param Attribute $attribute Any properties of the attribute that to update.
	* @return MozuClient
	*/
	public static function updateAttributeClient($attribute, $attributeFQN, $responseFields =  null)
	{
		$url = AttributeUrl::updateAttributeUrl($attributeFQN, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @return MozuClient
	*/
	public static function deleteAttributeClient($attributeFQN)
	{
		$url = AttributeUrl::deleteAttributeUrl($attributeFQN);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
