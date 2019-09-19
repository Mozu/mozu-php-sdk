<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\AttributeClient;
use Mozu\Api\ApiContext;


/**
* Use the Attribute Definition resource to manage the properties, options, and extras that uniquely describe products of a specific type. Attributes can be associated with a product type, assigned values by a client or shopper, and added as faceted search filters for a product category. Options are product attributes that describe unique configurations made by the shopper, such as size or color, and generate a new product variation (or unique SKU). Properties are product attributes that describe aspects of the product that do not represent an option configurable by the shopper, such as screen resolution or brand. Extras are product attributes that describe add-on configurations made by the shopper that do not represent a product variation, such as a monogram.
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
	* @param Attribute $attribute Properties of the new product attribute to create.
	* @return Attribute 
	* @deprecated deprecated since version 1.17
	*/
	public function addAttribute($attribute, $responseFields =  null)
	{
		$mozuClient = AttributeClient::addAttributeClient($attribute, $responseFields);
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
	public function addAttributeAsync($attribute, $responseFields =  null)
	{
		$mozuClient = AttributeClient::addAttributeClient($attribute, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @param Attribute $attribute Any properties of the attribute that to update.
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
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteAttribute($attributeFQN)
	{
		$mozuClient = AttributeClient::deleteAttributeClient($attributeFQN);
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
	public function deleteAttributeAsync($attributeFQN)
	{
		$mozuClient = AttributeClient::deleteAttributeClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

