<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Attributes\AttributeVocabularyValueUrl;
use Mozu\Api\Headers;

use Mozu\Api\Contracts\ProductAdmin\AttributeVocabularyValue;
use Mozu\Api\Contracts\ProductAdmin\AttributeVocabularyValueLocalizedContent;

/**
* Vocabulary values are predefined for an attribute.
*/
class AttributeVocabularyValueClient {

	/**
	* Retrieves a list of vocabulary values defined for the attribute specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return MozuClient
	*/
	public static function getAttributeVocabularyValuesClient($attributeFQN)
	{
		$url = AttributeVocabularyValueUrl::getAttributeVocabularyValuesUrl($attributeFQN);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $value 
	* @return MozuClient
	*/
	public static function getAttributeVocabularyValueLocalizedContentsClient($attributeFQN, $value)
	{
		$url = AttributeVocabularyValueUrl::getAttributeVocabularyValueLocalizedContentsUrl($attributeFQN, $value);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value 
	* @return MozuClient
	*/
	public static function getAttributeVocabularyValueLocalizedContentClient($attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$url = AttributeVocabularyValueUrl::getAttributeVocabularyValueLocalizedContentUrl($attributeFQN, $localeCode, $responseFields, $value);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Retrieves the details of a vocabulary value defined for an attribute by providing the attribute's fully qualified name and the value to retrieve.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The actual unique value of the attribute vocabulary to retrieve. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
	* @return MozuClient
	*/
	public static function getAttributeVocabularyValueClient($attributeFQN, $value, $responseFields =  null)
	{
		$url = AttributeVocabularyValueUrl::getAttributeVocabularyValueUrl($attributeFQN, $responseFields, $value);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value 
	* @param AttributeVocabularyValueLocalizedContent $localizedContent 
	* @return MozuClient
	*/
	public static function addAttributeVocabularyValueLocalizedContentClient($localizedContent, $attributeFQN, $value, $responseFields =  null)
	{
		$url = AttributeVocabularyValueUrl::addAttributeVocabularyValueLocalizedContentUrl($attributeFQN, $responseFields, $value);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($localizedContent);

	}
	
	/**
	* Creates a vocabulary value for a defined product attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeVocabularyValue $attributeVocabularyValue The predefined vocabulary value to add to the attribute content.
	* @return MozuClient
	*/
	public static function addAttributeVocabularyValueClient($attributeVocabularyValue, $attributeFQN, $responseFields =  null)
	{
		$url = AttributeVocabularyValueUrl::addAttributeVocabularyValueUrl($attributeFQN, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($attributeVocabularyValue);

	}
	
	/**
	* Update existing vocabulary values for an attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param array|AttributeVocabularyValue $vocabularyValues The actual vocabulary values for the attribute being updated.
	* @return MozuClient
	*/
	public static function updateAttributeVocabularyValuesClient($vocabularyValues, $attributeFQN)
	{
		$url = AttributeVocabularyValueUrl::updateAttributeVocabularyValuesUrl($attributeFQN);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($vocabularyValues);

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $value 
	* @param array|AttributeVocabularyValueLocalizedContent $localizedContent 
	* @return MozuClient
	*/
	public static function updateAttributeVocabularyValueLocalizedContentsClient($localizedContent, $attributeFQN, $value)
	{
		$url = AttributeVocabularyValueUrl::updateAttributeVocabularyValueLocalizedContentsUrl($attributeFQN, $value);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($localizedContent);

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value 
	* @param AttributeVocabularyValueLocalizedContent $localizedContent 
	* @return MozuClient
	*/
	public static function updateAttributeVocabularyValueLocalizedContentClient($localizedContent, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$url = AttributeVocabularyValueUrl::updateAttributeVocabularyValueLocalizedContentUrl($attributeFQN, $localeCode, $responseFields, $value);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($localizedContent);

	}
	
	/**
	* Updates existing attribute vocabulary values.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The actual unique value of the attribute vocabulary value to update. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
	* @param AttributeVocabularyValue $attributeVocabularyValue The predefined vocabulary value to add to the attribute content to update.
	* @return MozuClient
	*/
	public static function updateAttributeVocabularyValueClient($attributeVocabularyValue, $attributeFQN, $value, $responseFields =  null)
	{
		$url = AttributeVocabularyValueUrl::updateAttributeVocabularyValueUrl($attributeFQN, $responseFields, $value);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($attributeVocabularyValue);

	}
	
	/**
	* Deletes an attribute's vocabulary value.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $value The actual unique value of the attribute vocabulary to delete. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
	* @return MozuClient
	*/
	public static function deleteAttributeVocabularyValueClient($attributeFQN, $value)
	{
		$url = AttributeVocabularyValueUrl::deleteAttributeVocabularyValueUrl($attributeFQN, $value);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
	* @param string $value 
	* @return MozuClient
	*/
	public static function deleteAttributeVocabularyValueLocalizedContentClient($attributeFQN, $value, $localeCode)
	{
		$url = AttributeVocabularyValueUrl::deleteAttributeVocabularyValueLocalizedContentUrl($attributeFQN, $localeCode, $value);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	
}

?>

