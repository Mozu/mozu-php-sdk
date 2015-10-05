<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Products;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Products\ProductOptionClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Headers;

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
	* @deprecated deprecated since version 1.17
	*/
	public function getOptions($productCode)
	{
		$mozuClient = ProductOptionClient::getOptionsClient($this->dataViewMode, $productCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of all option attributes configured for the product specified in the request.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getOptionsAsync($productCode)
	{
		$mozuClient = ProductOptionClient::getOptionsClient($this->dataViewMode, $productCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of an option attribute configuration for the specified product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return ProductOption 
	* @deprecated deprecated since version 1.17
	*/
	public function getOption($productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductOptionClient::getOptionClient($this->dataViewMode, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of an option attribute configuration for the specified product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getOptionAsync($productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductOptionClient::getOptionClient($this->dataViewMode, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Configures an option attribute for the product specified in the request.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductOption $productOption Properties of the product option to create such as attribute detail, fully qualified name, and list of product option values.
	* @return ProductOption 
	* @deprecated deprecated since version 1.17
	*/
	public function addOption($productOption, $productCode, $responseFields =  null)
	{
		$mozuClient = ProductOptionClient::addOptionClient($this->dataViewMode, $productOption, $productCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Configures an option attribute for the product specified in the request.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addOptionAsync($productOption, $productCode, $responseFields =  null)
	{
		$mozuClient = ProductOptionClient::addOptionClient($this->dataViewMode, $productOption, $productCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates one or more properties of an option attribute configured for a product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductOption $productOption Properties of the product option to create such as attribute detail, fully qualified name, and list of product option values.
	* @return ProductOption 
	* @deprecated deprecated since version 1.17
	*/
	public function updateOption($productOption, $productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductOptionClient::updateOptionClient($this->dataViewMode, $productOption, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates one or more properties of an option attribute configured for a product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateOptionAsync($productOption, $productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductOptionClient::updateOptionClient($this->dataViewMode, $productOption, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the configuration of an option attribute for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteOption($productCode, $attributeFQN)
	{
		$mozuClient = ProductOptionClient::deleteOptionClient($this->dataViewMode, $productCode, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the configuration of an option attribute for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteOptionAsync($productCode, $attributeFQN)
	{
		$mozuClient = ProductOptionClient::deleteOptionClient($this->dataViewMode, $productCode, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

