<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Storefront;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ProductSearchResultUrl  {

	/**
		* Get Resource Url for GetRandomAccessCursor
		* @param string $filter 
		* @param int $pageSize 
		* @param string $query 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getRandomAccessCursorUrl($filter, $pageSize, $query, $responseFields)
	{
		$url = "/api/commerce/catalog/storefront/productsearch/randomAccessCursor/?query={query}&filter={filter}&pageSize={pageSize}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("query", $query);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for Search
		* @param string $cursorMark 
		* @param string $defaultSort 
		* @param string $defaultSortDefinitionName 
		* @param bool $enableSearchTuningRules 
		* @param string $facet Individually list the facet fields you want to display in a web storefront product search.
		* @param string $facetFieldRangeQuery Display a range facet not specified in a template in a web storefront product search by listing the facet field and the range to display.
		* @param string $facetHierDepth If filtering using category facets in a hierarchy, the number of category hierarchy levels to return for the facet. This option is only available for category facets.
		* @param string $facetHierPrefix If filtering using category facets in a hierarchy, the parent categories you want to skip in the storefront product search. This parameter is only available for category facets.
		* @param string $facetHierValue If filtering using category facets in a hierarchy, the category in the hierarchy to begin faceting on. This parameter is only available for category facets.
		* @param string $facetPageSize The number of facet values to return for one or more facets.
		* @param string $facetPrefix 
		* @param string $facetSettings Settings reserved for future facet search functionality on a web storefront product search.
		* @param string $facetStartIndex When paging through multiple facets, the startIndex value for each facet.
		* @param string $facetTemplate The facet template to use on the storefront. A template displays all facets associated with the template on the web storefront product search. Currently, only category-level facet templates are available.
		* @param string $facetTemplateExclude 
		* @param string $facetTemplateSubset Display a subset of the facets defined in the template specified in facetTemplate parameter.
		* @param string $facetValueFilter The facet values to apply to the filter.
		* @param string $facetValueSort 
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter product search results by any of its properties, including product code, type, category, and name. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=categoryId+eq+12"
		* @param int $pageSize Used to page results from a query. Indicates the maximum number of entities to return from a query. Default value: 12. Max value is 200.
		* @param string $query The terms to search on.
		* @param string $responseFields 
		* @param string $responseOptions 
		* @param string $searchSettings 
		* @param string $searchTuningRuleCode 
		* @param string $searchTuningRuleContext 
		* @param string $sortBy The element to sort the results by and the order in which the results appear. Either ascending order (a-z) which accepts 'asc' or 'asc' or descending order (z-a) which accepts 'desc' or 'desc'. The sortBy parameter follows an available property.
		* @param string $sortDefinitionName 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function searchUrl($cursorMark, $defaultSort, $defaultSortDefinitionName, $enableSearchTuningRules, $facet, $facetFieldRangeQuery, $facetHierDepth, $facetHierPrefix, $facetHierValue, $facetPageSize, $facetPrefix, $facetSettings, $facetStartIndex, $facetTemplate, $facetTemplateExclude, $facetTemplateSubset, $facetValueFilter, $facetValueSort, $filter, $pageSize, $query, $responseFields, $responseOptions, $searchSettings, $searchTuningRuleCode, $searchTuningRuleContext, $sortBy, $sortDefinitionName, $startIndex)
	{
		$url = "/api/commerce/catalog/storefront/productsearch/search/?query={query}&filter={filter}&facetTemplate={facetTemplate}&facetTemplateSubset={facetTemplateSubset}&facet={facet}&facetFieldRangeQuery={facetFieldRangeQuery}&facetHierPrefix={facetHierPrefix}&facetHierValue={facetHierValue}&facetHierDepth={facetHierDepth}&facetStartIndex={facetStartIndex}&facetPageSize={facetPageSize}&facetSettings={facetSettings}&facetValueFilter={facetValueFilter}&sortBy={sortBy}&pageSize={pageSize}&startIndex={startIndex}&searchSettings={searchSettings}&enableSearchTuningRules={enableSearchTuningRules}&searchTuningRuleContext={searchTuningRuleContext}&searchTuningRuleCode={searchTuningRuleCode}&facetTemplateExclude={facetTemplateExclude}&facetPrefix={facetPrefix}&responseOptions={responseOptions}&cursorMark={cursorMark}&facetValueSort={facetValueSort}&defaultSort={defaultSort}&sortDefinitionName={sortDefinitionName}&defaultSortDefinitionName={defaultSortDefinitionName}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("cursorMark", $cursorMark);
		$url = $mozuUrl->formatUrl("defaultSort", $defaultSort);
		$url = $mozuUrl->formatUrl("defaultSortDefinitionName", $defaultSortDefinitionName);
		$url = $mozuUrl->formatUrl("enableSearchTuningRules", $enableSearchTuningRules);
		$url = $mozuUrl->formatUrl("facet", $facet);
		$url = $mozuUrl->formatUrl("facetFieldRangeQuery", $facetFieldRangeQuery);
		$url = $mozuUrl->formatUrl("facetHierDepth", $facetHierDepth);
		$url = $mozuUrl->formatUrl("facetHierPrefix", $facetHierPrefix);
		$url = $mozuUrl->formatUrl("facetHierValue", $facetHierValue);
		$url = $mozuUrl->formatUrl("facetPageSize", $facetPageSize);
		$url = $mozuUrl->formatUrl("facetPrefix", $facetPrefix);
		$url = $mozuUrl->formatUrl("facetSettings", $facetSettings);
		$url = $mozuUrl->formatUrl("facetStartIndex", $facetStartIndex);
		$url = $mozuUrl->formatUrl("facetTemplate", $facetTemplate);
		$url = $mozuUrl->formatUrl("facetTemplateExclude", $facetTemplateExclude);
		$url = $mozuUrl->formatUrl("facetTemplateSubset", $facetTemplateSubset);
		$url = $mozuUrl->formatUrl("facetValueFilter", $facetValueFilter);
		$url = $mozuUrl->formatUrl("facetValueSort", $facetValueSort);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("query", $query);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("responseOptions", $responseOptions);
		$url = $mozuUrl->formatUrl("searchSettings", $searchSettings);
		$url = $mozuUrl->formatUrl("searchTuningRuleCode", $searchTuningRuleCode);
		$url = $mozuUrl->formatUrl("searchTuningRuleContext", $searchTuningRuleContext);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("sortDefinitionName", $sortDefinitionName);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for Suggest
		* @param string $groups 
		* @param int $pageSize Indicates the maximum number of entities to return from a query. Default value: 10. Max value: 200.
		* @param string $query 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function suggestUrl($groups, $pageSize, $query, $responseFields)
	{
		$url = "/api/commerce/catalog/storefront/productsearch/suggest?query={query}&groups={groups}&pageSize={pageSize}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("groups", $groups);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("query", $query);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>

