<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypeVariationClient;
use Mozu\Api\ApiContext;


/**
* Use the variations resource to preview possible product variations for a specific product type based on the option attributes defined for the product type, such as size or color.
*/
class ProductTypeVariationResource {

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
	* @param string $productCode 
	* @param int $productTypeId Unique identifier of the product type.
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @param array|ProductOption $productOptionsIn The product option attributes configured for this product type.
	* @return ProductVariationPagedCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function generateProductVariations($productOptionsIn, $productTypeId, $productCode =  null, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ProductTypeVariationClient::generateProductVariationsClient($productOptionsIn, $productTypeId, $productCode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $productCode 
	* @param int $productTypeId Unique identifier of the product type.
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function generateProductVariationsAsync($productOptionsIn, $productTypeId, $productCode =  null, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ProductTypeVariationClient::generateProductVariationsClient($productOptionsIn, $productTypeId, $productCode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

