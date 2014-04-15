<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\FacetUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Facets resource to manage the facets shoppers use to filter product display results on a storefront. Facets can include categories, product attributes, or prices, and use either a range of values or discrete values.
*/
class FacetClient {

	/**
	* Retrieves a facet specified by its unique identifier and displays its properties.
	*
	* @param int $facetId Unique identifier of the facet to retrieve.
	* @param bool $validate Validates that the product category associated with a facet is active. System-supplied and read only.
	* @return MozuClient
	*/
	public static function getFacetClient($dataViewMode, $facetId, $validate =  null)
	{
		$url = FacetUrl::getFacetUrl($facetId, $validate);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of the facets defined for the specified category.
	*
	* @param int $categoryId Unique identifier of the category associated with the facets to retrieve.
	* @param bool $includeAvailable If true, returns a list of the attributes and categories associated with a product type that have not been defined as a facet for the category.
	* @param bool $validate Validates that the product category associated with a facet is active. System-supplied and read only.
	* @return MozuClient
	*/
	public static function getFacetCategoryListClient($dataViewMode, $categoryId, $includeAvailable =  null, $validate =  null)
	{
		$url = FacetUrl::getFacetCategoryListUrl($categoryId, $includeAvailable, $validate);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Creates a new category, price, or attribute facet. Supply the category or attribute source to use for the facet values.
	*
	* @param Facet $facet Properties of the new facet to create. Required properties: Source, FacetType, IsHidden, and CategoryId.
	* @return MozuClient
	*/
	public static function addFacetClient($dataViewMode, $facet)
	{
		$url = FacetUrl::addFacetUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($facet)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Modifies one or more properties of a defined facet.
	*
	* @param int $facetId Unique identifier of the facet to modify.
	* @param Facet $facet Properties of the defined facet to modify. Required properties: Source, FacetType, IsHidden, and CategoryId.
	* @return MozuClient
	*/
	public static function updateFacetClient($dataViewMode, $facet, $facetId)
	{
		$url = FacetUrl::updateFacetUrl($facetId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($facet)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Deletes the facet specified by its unique identifier.
	*
	* @param int $facetId Unique identifier of the facet to delete.
	*/
	public static function deleteFacetByIdClient($dataViewMode, $facetId)
	{
		$url = FacetUrl::deleteFacetByIdUrl($facetId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

