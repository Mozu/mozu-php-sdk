<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Products;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Products\ProductOptionClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\ProductAdmin\ProductOption;

/**
* Use the Options resource to configure the option attributes and vocabulary values for an individual product associated with the product type that uses the option attribute. Options are used to generate variations of a product.
*/
class ProductOptionResource {

	private $apiContext;
	private $dataViewMode;
	public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}

	

	/**
	* Retrieves a list of all option attributes configured for the product specified in the request.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return array|ProductOption 
	*/
	public function getOptions($productCode)
	{
		$mozuClient = ProductOptionClient::getOptionsClient($this->dataViewMode, $productCode);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves the details of an option attribute configuration for the specified product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return ProductOption 
	*/
	public function getOption($productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductOptionClient::getOptionClient($this->dataViewMode, $productCode, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Configures an option attribute for the product specified in the request.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductOption $productOption Properties of the option attribute to define for the product.
	* @return ProductOption 
	*/
	public function addOption($productOption, $productCode, $responseFields =  null)
	{
		$mozuClient = ProductOptionClient::addOptionClient($this->dataViewMode, $productOption, $productCode, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates one or more properties of an option attribute configured for a product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductOption $productOption Properties of the product option attribute configuration to update.
	* @return ProductOption 
	*/
	public function updateOption($productOption, $productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductOptionClient::updateOptionClient($this->dataViewMode, $productOption, $productCode, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Deletes the configuration of an option attribute for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return void
	*/
	public function deleteOption($productCode, $attributeFQN)
	{
		$mozuClient = ProductOptionClient::deleteOptionClient($this->dataViewMode, $productCode, $attributeFQN);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	
}

?>
