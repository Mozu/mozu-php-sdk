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
use Mozu\Api\Urls\Commerce\Catalog\Storefront\CategoryUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Get the product category hierarchy as it appears to shoppers who are browsing the storefront. The hierarchy can be returned as a flat list or as a category tree.
*/
class CategoryClient {

	/**
	* Retrieves a list of categories according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter product category search results by any of its properties, including its position in the category hierarchy. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). <b>For example - "filter=IsDisplayed+eq+true"</b>
	* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getCategoriesClient($filter =  null, $startIndex =  null, $pageSize =  null, $sortBy =  null, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = CategoryUrl::getCategoriesUrl($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a single category.
	*
	* @param bool $allowInactive If true, allow inactive categories to be retrieved in the category list response. If false, the categories retrieved will not include ones marked inactive.
	* @param int $categoryId Unique identifier for the storefront container used to organize products.
	* @return MozuClient
	*/
	public static function getCategoryClient($categoryId, $allowInactive =  null, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = CategoryUrl::getCategoryUrl($allowInactive, $categoryId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the list of product categories that appear on the storefront organized in a hierarchical format. Hidden categories do not appear in the list.
	*
	* @return MozuClient
	*/
	public static function getCategoryTreeClient(Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = CategoryUrl::getCategoryTreeUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	
}

?>

