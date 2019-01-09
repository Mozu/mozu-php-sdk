<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Admin;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class LocationUrl  {

	/**
		* Get Resource Url for GetLocations
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @return string Resource Url
	*/
	public static function getLocationsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/admin/locations/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("filter", $filter)
				->formatUrl("pageSize", $pageSize)
				->formatUrl("responseFields", $responseFields)
				->formatUrl("sortBy", $sortBy)
				->formatUrl("startIndex", $startIndex);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetLocation
		* @param string $locationCode The merchant-defined code of the location to retrieve.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getLocationUrl($locationCode, $responseFields)
	{
		$url = "/api/commerce/admin/locations/{locationCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("locationCode", $locationCode)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddLocation
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function addLocationUrl($responseFields)
	{
		$url = "/api/commerce/admin/locations/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateLocation
		* @param string $locationCode The merchant-defined code associated with the location to update.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateLocationUrl($locationCode, $responseFields)
	{
		$url = "/api/commerce/admin/locations/{locationCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false);
		$mozuUrl->formatUrl("locationCode", $locationCode)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteLocation
		* @param string $locationCode The merchant-defined code of the location to delete.
		* @return string Resource Url
	*/
	public static function deleteLocationUrl($locationCode)
	{
		$url = "/api/commerce/admin/locations/{locationCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false);
		$mozuUrl->formatUrl("locationCode", $locationCode);

		return $mozuUrl;
	}
	
}

?>
