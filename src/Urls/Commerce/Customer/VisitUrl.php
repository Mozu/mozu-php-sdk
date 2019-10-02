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

class VisitUrl  {

	/**
		* Get Resource Url for GetVisits
		* @param string $filter 
		* @param int $pageSize 
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getVisitsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/visits/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetVisit
		* @param string $responseFields 
		* @param string $visitId Unique identifier of the customer visit to retrieve.
		* @return string Resource Url
	*/
	public static function getVisitUrl($responseFields, $visitId)
	{
		$url = "/api/commerce/customer/visits/{visitId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("visitId", $visitId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddVisit
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function addVisitUrl($responseFields)
	{
		$url = "/api/commerce/customer/visits/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateVisit
		* @param string $responseFields 
		* @param string $visitId Unique identifier of the customer visit to update.
		* @return string Resource Url
	*/
	public static function updateVisitUrl($responseFields, $visitId)
	{
		$url = "/api/commerce/customer/visits/{visitId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("visitId", $visitId);
		return $mozuUrl;
	}
	
}

?>
