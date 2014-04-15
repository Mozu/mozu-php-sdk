<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CreditUrl  {

	/**
		* Get Resource Url for GetCredits
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @return string Resource Url
	*/
	public static function getCreditsUrl($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/credits/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCredit
		* @param string $code User-defined code that identifies the store credit to retrieve.
		* @return string Resource Url
	*/
	public static function getCreditUrl($code)
	{
		$url = "/api/commerce/customer/credits/{code}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("code", $code);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddCredit
		* @return string Resource Url
	*/
	public static function addCreditUrl()
	{
		$url = "/api/commerce/customer/credits/";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCredit
		* @param string $code User-defined code of the store credit to update.
		* @return string Resource Url
	*/
	public static function updateCreditUrl($code)
	{
		$url = "/api/commerce/customer/credits/{code}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("code", $code);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AssociateCreditToShopper
		* @param string $code 
		* @return string Resource Url
	*/
	public static function associateCreditToShopperUrl($code)
	{
		$url = "/api/commerce/customer/credits/{code}/associate-to-shopper";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("code", $code);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCredit
		* @param string $code User-defined code of the store credit to delete.
		* @return string Resource Url
	*/
	public static function deleteCreditUrl($code)
	{
		$url = "/api/commerce/customer/credits/{code}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("code", $code);
		return $mozuUrl;
	}
	
}

?>

