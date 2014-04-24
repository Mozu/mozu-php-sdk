<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ProductUrl  {

	/**
		* Get Resource Url for GetProducts
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param bool $noCount If true, the operation does not return the TotalCount number of results.
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $q A list of product search terms to use in the query when searching across product code and product name. Separate multiple search terms with a space character.
		* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getProductsUrl($filter, $noCount, $pageSize, $q, $qLimit, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/products/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&q={q}&qLimit={qLimit}&noCount={noCount}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("noCount", $noCount);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("q", $q);
		$url = $mozuUrl->formatUrl("qLimit", $qLimit);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProduct
		* @param string $productCode Merchant-created code associated with the product such as a SKU. Max length: 30. Accepts a to z, A to Z, Ãƒâ€¹-ÃƒËœ, 0 to 9, #, semicolon, commas, apostrophes, and Spaces, but no punctuation or other characters.
		* @return string Resource Url
	*/
	public static function getProductUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductInCatalogs
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @return string Resource Url
	*/
	public static function getProductInCatalogsUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/ProductInCatalogs";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductInCatalog
		* @param int $catalogId 
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @return string Resource Url
	*/
	public static function getProductInCatalogUrl($catalogId, $productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/ProductInCatalogs/{catalogId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("catalogId", $catalogId);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddProduct
		* @return string Resource Url
	*/
	public static function addProductUrl()
	{
		$url = "/api/commerce/catalog/admin/products/";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddProductInCatalog
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @return string Resource Url
	*/
	public static function addProductInCatalogUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/ProductInCatalogs";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateProduct
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @return string Resource Url
	*/
	public static function updateProductUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateProductInCatalogs
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @return string Resource Url
	*/
	public static function updateProductInCatalogsUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/ProductInCatalogs";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateProductInCatalog
		* @param int $catalogId 
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @return string Resource Url
	*/
	public static function updateProductInCatalogUrl($catalogId, $productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/ProductInCatalogs/{catalogId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("catalogId", $catalogId);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteProduct
		* @param string $productCode 
		* @return string Resource Url
	*/
	public static function deleteProductUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteProductInCatalog
		* @param int $catalogId 
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @return string Resource Url
	*/
	public static function deleteProductInCatalogUrl($catalogId, $productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/ProductInCatalogs/{catalogId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("catalogId", $catalogId);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
}

?>
