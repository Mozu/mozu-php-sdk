<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\Clients\Commerce\Catalog\Admin\ProductSortDefinitionClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Headers;

/**
* 
*/
class ProductSortDefinitionResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return ProductSortDefinitionPagedCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getProductSortDefinitions($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ProductSortDefinitionClient::getProductSortDefinitionsClient($this->dataViewMode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
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
	public function getProductSortDefinitionsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ProductSortDefinitionClient::getProductSortDefinitionsClient($this->dataViewMode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param int $productSortDefinitionId 
	* @param string $responseFields 
	* @return ProductSortDefinition 
	* @deprecated deprecated since version 1.17
	*/
	public function getProductSortDefinition($productSortDefinitionId, $responseFields =  null)
	{
		$mozuClient = ProductSortDefinitionClient::getProductSortDefinitionClient($this->dataViewMode, $productSortDefinitionId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param int $productSortDefinitionId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getProductSortDefinitionAsync($productSortDefinitionId, $responseFields =  null)
	{
		$mozuClient = ProductSortDefinitionClient::getProductSortDefinitionClient($this->dataViewMode, $productSortDefinitionId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param bool $useProvidedId 
	* @param ProductSortDefinition $definition 
	* @return ProductSortDefinition 
	* @deprecated deprecated since version 1.17
	*/
	public function addProductSortDefinition($definition, $useProvidedId =  null, $responseFields =  null)
	{
		$mozuClient = ProductSortDefinitionClient::addProductSortDefinitionClient($this->dataViewMode, $definition, $useProvidedId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @param bool $useProvidedId 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addProductSortDefinitionAsync($definition, $useProvidedId =  null, $responseFields =  null)
	{
		$mozuClient = ProductSortDefinitionClient::addProductSortDefinitionClient($this->dataViewMode, $definition, $useProvidedId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param int $productSortDefinitionId 
	* @param string $responseFields 
	* @param ProductSortDefinition $definition 
	* @return ProductSortDefinition 
	* @deprecated deprecated since version 1.17
	*/
	public function updateProductSortDefinition($definition, $productSortDefinitionId, $responseFields =  null)
	{
		$mozuClient = ProductSortDefinitionClient::updateProductSortDefinitionClient($this->dataViewMode, $definition, $productSortDefinitionId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param int $productSortDefinitionId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateProductSortDefinitionAsync($definition, $productSortDefinitionId, $responseFields =  null)
	{
		$mozuClient = ProductSortDefinitionClient::updateProductSortDefinitionClient($this->dataViewMode, $definition, $productSortDefinitionId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param int $productSortDefinitionId 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteProductSortDefinition($productSortDefinitionId)
	{
		$mozuClient = ProductSortDefinitionClient::deleteProductSortDefinitionClient($this->dataViewMode, $productSortDefinitionId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param int $productSortDefinitionId 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteProductSortDefinitionAsync($productSortDefinitionId)
	{
		$mozuClient = ProductSortDefinitionClient::deleteProductSortDefinitionClient($this->dataViewMode, $productSortDefinitionId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
