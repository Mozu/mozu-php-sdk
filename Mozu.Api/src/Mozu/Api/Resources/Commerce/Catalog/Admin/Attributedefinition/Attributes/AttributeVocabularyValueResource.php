<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Attributes\AttributeVocabularyValueClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Vocabulary values are predefined for an attribute.
*/
class AttributeVocabularyValueResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of attribute vocabulary values. To target a query, use one or several valid optional response groups.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return array|AttributeVocabularyValue 
	*/
	public function getAttributeVocabularyValues($attributeFQN)
	{
		$mozuClient = AttributeVocabularyValueClient::getAttributeVocabularyValuesClient($attributeFQN);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves an attribute vocabulary value by providing the attribute FQN and value.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $value The actual unique value of the attribute vocabulary to retrieve. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
	* @return AttributeVocabularyValue 
	*/
	public function getAttributeVocabularyValue($attributeFQN, $value)
	{
		$mozuClient = AttributeVocabularyValueClient::getAttributeVocabularyValueClient($attributeFQN, $value);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds a new attribute vocabulary value.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param AttributeVocabularyValue $attributeVocabularyValue The predefined vocabulary value to add to the attribute content.
	* @return AttributeVocabularyValue 
	*/
	public function addAttributeVocabularyValue($attributeFQN, $attributeVocabularyValue)
	{
		$mozuClient = AttributeVocabularyValueClient::addAttributeVocabularyValueClient($attributeFQN, $attributeVocabularyValue);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update existing vocabulary values for an attribute.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param array|AttributeVocabularyValue $vocabularyValues The actual vocabulary values for the attribute being updated.
	* @return array|AttributeVocabularyValue 
	*/
	public function updateAttributeVocabularyValues($attributeFQN, $vocabularyValues)
	{
		$mozuClient = AttributeVocabularyValueClient::updateAttributeVocabularyValuesClient($attributeFQN, $vocabularyValues);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates existing attribute vocabulary values.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $value The actual unique value of the attribute vocabulary value to update. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
	* @param AttributeVocabularyValue $attributeVocabularyValue The predefined vocabulary value to add to the attribute content to update.
	* @return AttributeVocabularyValue 
	*/
	public function updateAttributeVocabularyValue($attributeFQN, $value, $attributeVocabularyValue)
	{
		$mozuClient = AttributeVocabularyValueClient::updateAttributeVocabularyValueClient($attributeFQN, $value, $attributeVocabularyValue);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes an attribute's vocabulary value.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $value The actual unique value of the attribute vocabulary to delete. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
	*/
	public function deleteAttributeVocabularyValue($attributeFQN, $value)
	{
		$mozuClient = AttributeVocabularyValueClient::deleteAttributeVocabularyValueClient($attributeFQN, $value);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	
}

?>

