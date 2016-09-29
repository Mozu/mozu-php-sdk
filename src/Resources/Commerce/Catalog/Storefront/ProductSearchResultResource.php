<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Storefront;

use Mozu\Api\Clients\Commerce\Catalog\Storefront\ProductSearchResultClient;
use Mozu\Api\ApiContext;


/**
* Use the Product Search resource to provide dynamic search results to shoppers as they browse and search for products on the web storefront, and to suggest possible search terms as the shopper enters text.
*/
class ProductSearchResultResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Searches the categories displayed on the web storefront for products or product options that the shopper types in a search query.
	*
	* @param string $cursorMark 
	* @param bool $enableSearchTuningRules Enables search tuning rules on your site.
	* @param string $facet Individually list the facet fields you want to display in a web storefront product search.
	* @param string $facetFieldRangeQuery Display a range facet not specified in a template in a web storefront product search by listing the facet field and the range to display.
	* @param string $facetHierDepth If filtering using category facets in a hierarchy, the number of category hierarchy levels to return for the facet. This option is only available for category facets.
	* @param string $facetHierPrefix If filtering using category facets in a hierarchy, the parent categories you want to skip in the storefront product search. This parameter is only available for category facets.
	* @param string $facetHierValue If filtering using category facets in a hierarchy, the category in the hierarchy to begin faceting on. This parameter is only available for category facets.
	* @param string $facetPageSize The number of facet values to return for one or more facets.
	* @param string $facetPrefix Use this parameter to filter facet values that are returned by an associated search result by a prefix.For example, to filter on colors that start with b, such as blue, black, or brown you can specify the following:
	* @param string $facetSettings Settings reserved for future facet search functionality on a web storefront product search.
	* @param string $facetStartIndex When paging through multiple facets, the startIndex value for each facet.
	* @param string $facetTemplate The facet template to use on the storefront. A template displays all facets associated with the template on the web storefront product search. Currently, only category-level facet templates are available.
	* @param string $facetTemplateExclude A comma-separated list of the facets to exclude from the facetTemplate.
        
	* @param string $facetTemplateSubset Display a subset of the facets defined in the template specified in facetTemplate parameter.
	* @param string $facetValueFilter The facet values to apply to the filter.
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $responseOptions 
	* @param string $searchSettings The settings to control product search and indexing behavior.
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @param string $searchTuningRuleContext The category ID that the search tuning rule applies to.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return ProductSearchResult 
	* @deprecated deprecated since version 1.17
	*/
	public function search($query =  null, $filter =  null, $facetTemplate =  null, $facetTemplateSubset =  null, $facet =  null, $facetFieldRangeQuery =  null, $facetHierPrefix =  null, $facetHierValue =  null, $facetHierDepth =  null, $facetStartIndex =  null, $facetPageSize =  null, $facetSettings =  null, $facetValueFilter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $searchSettings =  null, $enableSearchTuningRules =  null, $searchTuningRuleContext =  null, $searchTuningRuleCode =  null, $facetTemplateExclude =  null, $facetPrefix =  null, $responseOptions =  null, $cursorMark =  null, $responseFields =  null)
	{
		$mozuClient = ProductSearchResultClient::searchClient($query, $filter, $facetTemplate, $facetTemplateSubset, $facet, $facetFieldRangeQuery, $facetHierPrefix, $facetHierValue, $facetHierDepth, $facetStartIndex, $facetPageSize, $facetSettings, $facetValueFilter, $sortBy, $pageSize, $startIndex, $searchSettings, $enableSearchTuningRules, $searchTuningRuleContext, $searchTuningRuleCode, $facetTemplateExclude, $facetPrefix, $responseOptions, $cursorMark, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Searches the categories displayed on the web storefront for products or product options that the shopper types in a search query.
	*
	* @param string $cursorMark 
	* @param bool $enableSearchTuningRules Enables search tuning rules on your site.
	* @param string $facet Individually list the facet fields you want to display in a web storefront product search.
	* @param string $facetFieldRangeQuery Display a range facet not specified in a template in a web storefront product search by listing the facet field and the range to display.
	* @param string $facetHierDepth If filtering using category facets in a hierarchy, the number of category hierarchy levels to return for the facet. This option is only available for category facets.
	* @param string $facetHierPrefix If filtering using category facets in a hierarchy, the parent categories you want to skip in the storefront product search. This parameter is only available for category facets.
	* @param string $facetHierValue If filtering using category facets in a hierarchy, the category in the hierarchy to begin faceting on. This parameter is only available for category facets.
	* @param string $facetPageSize The number of facet values to return for one or more facets.
	* @param string $facetPrefix Use this parameter to filter facet values that are returned by an associated search result by a prefix.For example, to filter on colors that start with b, such as blue, black, or brown you can specify the following:
	* @param string $facetSettings Settings reserved for future facet search functionality on a web storefront product search.
	* @param string $facetStartIndex When paging through multiple facets, the startIndex value for each facet.
	* @param string $facetTemplate The facet template to use on the storefront. A template displays all facets associated with the template on the web storefront product search. Currently, only category-level facet templates are available.
	* @param string $facetTemplateExclude A comma-separated list of the facets to exclude from the facetTemplate.
        
	* @param string $facetTemplateSubset Display a subset of the facets defined in the template specified in facetTemplate parameter.
	* @param string $facetValueFilter The facet values to apply to the filter.
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $responseOptions 
	* @param string $searchSettings The settings to control product search and indexing behavior.
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @param string $searchTuningRuleContext The category ID that the search tuning rule applies to.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function searchAsync($query =  null, $filter =  null, $facetTemplate =  null, $facetTemplateSubset =  null, $facet =  null, $facetFieldRangeQuery =  null, $facetHierPrefix =  null, $facetHierValue =  null, $facetHierDepth =  null, $facetStartIndex =  null, $facetPageSize =  null, $facetSettings =  null, $facetValueFilter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $searchSettings =  null, $enableSearchTuningRules =  null, $searchTuningRuleContext =  null, $searchTuningRuleCode =  null, $facetTemplateExclude =  null, $facetPrefix =  null, $responseOptions =  null, $cursorMark =  null, $responseFields =  null)
	{
		$mozuClient = ProductSearchResultClient::searchClient($query, $filter, $facetTemplate, $facetTemplateSubset, $facet, $facetFieldRangeQuery, $facetHierPrefix, $facetHierValue, $facetHierDepth, $facetStartIndex, $facetPageSize, $facetSettings, $facetValueFilter, $sortBy, $pageSize, $startIndex, $searchSettings, $enableSearchTuningRules, $searchTuningRuleContext, $searchTuningRuleCode, $facetTemplateExclude, $facetPrefix, $responseOptions, $cursorMark, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Suggests possible search terms as the shopper enters search text.
	*
	* @param string $groups 
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return SearchSuggestionResult 
	* @deprecated deprecated since version 1.17
	*/
	public function suggest($query =  null, $groups =  null, $pageSize =  null, $responseFields =  null)
	{
		$mozuClient = ProductSearchResultClient::suggestClient($query, $groups, $pageSize, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Suggests possible search terms as the shopper enters search text.
	*
	* @param string $groups 
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $query Properties for the product location inventory provided for queries to locate products by their location.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function suggestAsync($query =  null, $groups =  null, $pageSize =  null, $responseFields =  null)
	{
		$mozuClient = ProductSearchResultClient::suggestClient($query, $groups, $pageSize, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

