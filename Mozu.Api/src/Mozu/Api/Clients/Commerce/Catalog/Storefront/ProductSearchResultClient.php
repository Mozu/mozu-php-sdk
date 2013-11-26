<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Storefront;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Storefront\ProductSearchResultUrl;

/**
* 
*/
class ProductSearchResultClient {

	/**
	* 
	*
	* @param string $facet 
	* @param string $facetFieldRangeQuery 
	* @param string $facetHierDepth 
	* @param string $facetHierPrefix 
	* @param string $facetHierValue 
	* @param string $facetPageSize 
	* @param string $facetSettings 
	* @param string $facetStartIndex 
	* @param string $facetTemplate 
	* @param string $facetTemplateSubset 
	* @param string $facetValueFilter 
	* @param string $filter 
	* @param int $pageSize 
	* @param string $query 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function searchClient($facet =  null, $facetFieldRangeQuery =  null, $facetHierDepth =  null, $facetHierPrefix =  null, $facetHierValue =  null, $facetPageSize =  null, $facetSettings =  null, $facetStartIndex =  null, $facetTemplate =  null, $facetTemplateSubset =  null, $facetValueFilter =  null, $filter =  null, $pageSize =  null, $query =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductSearchResultUrl::searchUrl($facet, $facetFieldRangeQuery, $facetHierDepth, $facetHierPrefix, $facetHierValue, $facetPageSize, $facetSettings, $facetStartIndex, $facetTemplate, $facetTemplateSubset, $facetValueFilter, $filter, $pageSize, $query, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $pageSize 
	* @param string $q 
	* @return MozuClient
	*/
	public static function suggestClient($pageSize =  null, $q =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductSearchResultUrl::suggestUrl($pageSize, $q);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

