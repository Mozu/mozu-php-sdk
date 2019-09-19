<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Attributedefinition;

use Mozu\Api\Clients\Commerce\Customer\Attributedefinition\AttributeClient;
use Mozu\Api\ApiContext;


/**
* Use the Customer Attribute Definition resource to manage the attributes to define for your shoppers.
*/
class AttributeResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return AttributeCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttributes($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAttributesAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @return array|AttributeVocabularyValue 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttributeVocabularyValues($attributeFQN)
	{
		$mozuClient = AttributeClient::getAttributeVocabularyValuesClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAttributeVocabularyValuesAsync($attributeFQN)
	{
		$mozuClient = AttributeClient::getAttributeVocabularyValuesClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @return Attribute 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttribute($attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributeClient($attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAttributeAsync($attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeClient::getAttributeClient($attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param Attribute $attribute 
	* @return Attribute 
	* @deprecated deprecated since version 1.17
	*/
	public function createAttribute($attribute, $responseFields =  null)
	{
		$mozuClient = AttributeClient::createAttributeClient($attribute, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createAttributeAsync($attribute, $responseFields =  null)
	{
		$mozuClient = AttributeClient::createAttributeClient($attribute, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @param Attribute $attribute 
	* @return Attribute 
	* @deprecated deprecated since version 1.17
	*/
	public function updateAttribute($attribute, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeClient::updateAttributeClient($attribute, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateAttributeAsync($attribute, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeClient::updateAttributeClient($attribute, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

