<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Admin\Locations\Attributedefinition;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Admin\Locations\Attributedefinition\AttributeUrl;


/**
* 
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
	* @return MozuClient
	*/
	public static function getAttributeVocabularyValuesClient($attributeFQN)
	{
		$url = AttributeUrl::getAttributeVocabularyValuesUrl($attributeFQN);
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
	* @param Attribute $attribute 
	* @return MozuClient
	*/
	public static function createAttributeClient($attribute, $responseFields =  null)
	{
		$url = AttributeUrl::createAttributeUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @param Attribute $attribute 
	* @return MozuClient
	*/
	public static function updateAttributeClient($attribute, $attributeFQN, $responseFields =  null)
	{
		$url = AttributeUrl::updateAttributeUrl($attributeFQN, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	
}

?>

