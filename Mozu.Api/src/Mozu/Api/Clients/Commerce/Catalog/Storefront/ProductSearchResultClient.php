<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Storefront;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Storefront\ProductSearchResultUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Provide dynamic search results to shoppers as they browse and search for products on the storefront. Suggest possible search terms as the shopper enters text.
*/
class ProductSearchResultClient {

	/**
	* Searches the categories displayed on the storefront for products or product options that the shopper types in a search query.
	*
	* @param string $facet Individually list the facet fields you want to display in a storefront product search.
	* @param string $facetFieldRangeQuery Display a range facet not specified in a template in a storefront product search by listing the facet field and the range to display.
	* @param string $facetHierDepth If filtering using category facets in a hierarchy, the number of category hierarchy levels to return for the facet. This option is only available for category facets.
	* @param string $facetHierPrefix If filtering using category facets in a hierarchy, the parent categories you want to skip in the storefront product search. This parameter is only available for category facets.
	* @param string $facetHierValue If filtering using category facets in a hierarchy, the category in the hierarchy to begin faceting on. This parameter is only available for category facets.
	* @param string $facetPageSize The number of facet values to return for one or more facets.
	* @param string $facetSettings Settings reserved for future facet search functionality on a storefront product search.
	* @param string $facetStartIndex When paging through multiple facets, the startIndex value for each facet.
	* @param string $facetTemplate The facet template to use on the storefront. A template displays all facets associated with the template on the storefront product search. Currently, only category-level facet templates are available.
	* @param string $facetTemplateSubset Display a subset of the facets defined in the template specified in facetTemplate parameter.
	* @param string $facetValueFilter The facet values to apply to the filter.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter product search results by any of its properties, including product code, type, category, and name. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=categoryId+eq+12"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query The terms to search on.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function searchClient($query =  null, $filter =  null, $facetTemplate =  null, $facetTemplateSubset =  null, $facet =  null, $facetFieldRangeQuery =  null, $facetHierPrefix =  null, $facetHierValue =  null, $facetHierDepth =  null, $facetStartIndex =  null, $facetPageSize =  null, $facetSettings =  null, $facetValueFilter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null)
	{
		$url = ProductSearchResultUrl::searchUrl($facet, $facetFieldRangeQuery, $facetHierDepth, $facetHierPrefix, $facetHierValue, $facetPageSize, $facetSettings, $facetStartIndex, $facetTemplate, $facetTemplateSubset, $facetValueFilter, $filter, $pageSize, $query, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Suggests possible search terms as the shopper enters search text.
	*
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $q Text that the shopper is currently entering.
	* @return MozuClient
	*/
	public static function suggestClient($q =  null, $pageSize =  null)
	{
		$url = ProductSearchResultUrl::suggestUrl($pageSize, $q);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

