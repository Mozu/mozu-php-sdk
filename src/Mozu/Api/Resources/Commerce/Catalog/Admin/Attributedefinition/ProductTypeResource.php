<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\ProductTypeClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Product Types resource to manage the types for your product catalog. Product types act as configuration templates, which store a set of attributes common to all products associated with that type. Unlike categories, products can only be associated with a single product type.
*/
class ProductTypeResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of product types according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter product type search results by any of its properties. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=Name+cont+shoes"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return ProductTypeCollection 
	*/
	public function getProductTypes($dataViewMode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null)
	{
		$mozuClient = ProductTypeClient::getProductTypesClient($dataViewMode, $startIndex, $pageSize, $sortBy, $filter);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of the product type specified in the request.
	*
	* @param int $productTypeId Identifier of the product type to retrieve.
	* @return ProductType 
	*/
	public function getProductType($dataViewMode, $productTypeId)
	{
		$mozuClient = ProductTypeClient::getProductTypeClient($dataViewMode, $productTypeId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new product type based on the information supplied in the request.
	*
	* @param ProductType $productType Properties of the product type to create.
	* @return ProductType 
	*/
	public function addProductType($dataViewMode, $productType)
	{
		$mozuClient = ProductTypeClient::addProductTypeClient($dataViewMode, $productType);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of a product type.
	*
	* @param int $productTypeId Identifier of the product type to update.
	* @param ProductType $productType The details of the product type to update.
	* @return ProductType 
	*/
	public function updateProductType($dataViewMode, $productType, $productTypeId)
	{
		$mozuClient = ProductTypeClient::updateProductTypeClient($dataViewMode, $productType, $productTypeId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the product type by providing the product type ID.
	*
	* @param int $productTypeId Identifier of the product type to delete.
	*/
	public function deleteProductType($dataViewMode, $productTypeId)
	{
		$mozuClient = ProductTypeClient::deleteProductTypeClient($dataViewMode, $productTypeId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

