<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\ProductTypeUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Product Types resource to manage the types for your product catalog. Product types act as configuration templates, which store a set of attributes common to all products associated with that type. Unlike categories, products can only be associated with a single product type.
*/
class ProductTypeClient {

	/**
	* Retrieves a list of product types according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter product type search results by any of its properties. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=Name+cont+shoes"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getProductTypesClient($dataViewMode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null)
	{
		$url = ProductTypeUrl::getProductTypesUrl($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the product type specified in the request.
	*
	* @param int $productTypeId Identifier of the product type to retrieve.
	* @return MozuClient
	*/
	public static function getProductTypeClient($dataViewMode, $productTypeId)
	{
		$url = ProductTypeUrl::getProductTypeUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Creates a new product type based on the information supplied in the request.
	*
	* @param ProductType $productType Properties of the product type to create.
	* @return MozuClient
	*/
	public static function addProductTypeClient($dataViewMode, $productType)
	{
		$url = ProductTypeUrl::addProductTypeUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a product type.
	*
	* @param int $productTypeId Identifier of the product type to update.
	* @param ProductType $productType The details of the product type to update.
	* @return MozuClient
	*/
	public static function updateProductTypeClient($dataViewMode, $productType, $productTypeId)
	{
		$url = ProductTypeUrl::updateProductTypeUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Deletes the product type by providing the product type ID.
	*
	* @param int $productTypeId Identifier of the product type to delete.
	*/
	public static function deleteProductTypeClient($dataViewMode, $productTypeId)
	{
		$url = ProductTypeUrl::deleteProductTypeUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

