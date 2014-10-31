<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ProductReservationUrl  {

	/**
		* Get Resource Url for GetProductReservations
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getProductReservationsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/productreservations/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("filter", $filter)
				->formatUrl("pageSize", $pageSize)
				->formatUrl("responseFields", $responseFields)
				->formatUrl("sortBy", $sortBy)
				->formatUrl("startIndex", $startIndex);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductReservation
		* @param int $productReservationId Unique identifier of the product reservation.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getProductReservationUrl($productReservationId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/productreservations/{productReservationId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("productReservationId", $productReservationId)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddProductReservations
		* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
		* @return string Resource Url
	*/
	public static function addProductReservationsUrl($skipInventoryCheck)
	{
		$url = "/api/commerce/catalog/admin/productreservations/?skipInventoryCheck={skipInventoryCheck}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false);
		$mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CommitReservations
		* @return string Resource Url
	*/
	public static function commitReservationsUrl()
	{
		$url = "/api/commerce/catalog/admin/productreservations/commit";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateProductReservations
		* @param bool $skipInventoryCheck If true, skip the inventory validation process when updating this product reservation.
		* @return string Resource Url
	*/
	public static function updateProductReservationsUrl($skipInventoryCheck)
	{
		$url = "/api/commerce/catalog/admin/productreservations/?skipInventoryCheck={skipInventoryCheck}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false);
		$mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteProductReservation
		* @param int $productReservationId Unique identifier of the reservation.
		* @return string Resource Url
	*/
	public static function deleteProductReservationUrl($productReservationId)
	{
		$url = "/api/commerce/catalog/admin/productreservations/{productReservationId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false);
		$mozuUrl->formatUrl("productReservationId", $productReservationId);

		return $mozuUrl;
	}
	
}

?>

