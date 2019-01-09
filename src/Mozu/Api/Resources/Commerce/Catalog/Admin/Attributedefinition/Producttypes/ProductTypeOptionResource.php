<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypeOptionClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\ProductAdmin\AttributeInProductType;

/**
* Use the Options subresource to define how an option attribute is used for a specific product type. Product attribute definitions are unique for each associated product type.
*/
class ProductTypeOptionResource {

	private $apiContext;
	private $dataViewMode;
	public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}

	

	/**
	* Retrieves a list of option product attributes defined for the specified product type.
	*
	* @param int $productTypeId Identifier of the product type to retrieve.
	* @return array|AttributeInProductType 
	*/
	public function getOptions($productTypeId)
	{
		$mozuClient = ProductTypeOptionClient::getOptionsClient($this->dataViewMode, $productTypeId);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves the details of an option attribute defined for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId The identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return AttributeInProductType 
	*/
	public function getOption($productTypeId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductTypeOptionClient::getOptionClient($this->dataViewMode, $productTypeId, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Assigns an option attribute to the product type based on the information supplied in the request.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeInProductType $attributeInProductType Properties of the option attribute to define for the specified product type.
	* @return AttributeInProductType 
	*/
	public function addOption($attributeInProductType, $productTypeId, $responseFields =  null)
	{
		$mozuClient = ProductTypeOptionClient::addOptionClient($this->dataViewMode, $attributeInProductType, $productTypeId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates an option attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param AttributeInProductType $attributeInProductType Properties of the option product attribute to define for the specified product type.
	* @return AttributeInProductType 
	*/
	public function updateOption($attributeInProductType, $productTypeId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductTypeOptionClient::updateOptionClient($this->dataViewMode, $attributeInProductType, $productTypeId, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Removes an option attribute definition for the specified product type.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param int $productTypeId Identifier of the product type.
	* @return void
	*/
	public function deleteOption($productTypeId, $attributeFQN)
	{
		$mozuClient = ProductTypeOptionClient::deleteOptionClient($this->dataViewMode, $productTypeId, $attributeFQN);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	
}

?>
