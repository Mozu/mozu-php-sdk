<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin;

use Mozu\Api\Urls\BaseUrl;

class FacetUrl extends BaseUrl {

	/**
		* Get Resource Url for GetFacet
		* @param int $facetId Unique identifier of the facet to retrieve.
		* @param bool $validate Validates that the product category associated with a facet is active. System-supplied and read only.
		* @return string Resource Url
	*/
	public static function getFacetUrl($facetId, $validate)
	{
		$url = "/api/commerce/catalog/admin/facets/{facetId}?validate={validate}";
		$url = parent::formatUrl($url, "facetId", $facetId);
		$url = parent::formatUrl($url, "validate", $validate);
		return $url;
	}
	
	/**
		* Get Resource Url for GetFacetCategoryList
		* @param int $categoryId Unique identifier of the category associated with the facets to retrieve.
		* @param bool $includeAvailable If true, returns a list of the attributes and categories associated with a product type that have not been defined as a facet for the category.
		* @param bool $validate Validates that the product category associated with a facet is active. System-supplied and read only.
		* @return string Resource Url
	*/
	public static function getFacetCategoryListUrl($categoryId, $includeAvailable, $validate)
	{
		$url = "/api/commerce/catalog/admin/facets/category/{categoryId}?includAvaliable={includeAvailable}&validate={validate}";
		$url = parent::formatUrl($url, "categoryId", $categoryId);
		$url = parent::formatUrl($url, "includeAvailable", $includeAvailable);
		$url = parent::formatUrl($url, "validate", $validate);
		return $url;
	}
	
	/**
		* Get Resource Url for AddFacet
		* @return string Resource Url
	*/
	public static function addFacetUrl()
	{
		$url = "/api/commerce/catalog/admin/facets/";
		return $url;
	}
	
	/**
		* Get Resource Url for UpdateFacet
		* @param int $facetId Unique identifier of the facet to modify.
		* @return string Resource Url
	*/
	public static function updateFacetUrl($facetId)
	{
		$url = "/api/commerce/catalog/admin/facets/{facetId}";
		$url = parent::formatUrl($url, "facetId", $facetId);
		return $url;
	}
	
	/**
		* Get Resource Url for DeleteFacetById
		* @param int $facetId Unique identifier of the facet to delete.
		* @return string Resource Url
	*/
	public static function deleteFacetByIdUrl($facetId)
	{
		$url = "/api/commerce/catalog/admin/facets/{facetId}";
		$url = parent::formatUrl($url, "facetId", $facetId);
		return $url;
	}
	
}

?>

