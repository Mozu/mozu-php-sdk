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
use Mozu\Api\Urls\Commerce\Catalog\Admin\ProductReservationUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Temporarily hold a product from inventory while a shopper is filling out payment information. Create a product reservation when a shopper proceeds to check out and then release the reservation when the order process is complete.
*/
class ProductReservationClient {

	/**
	* Retrieves a list of product reservations according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getProductReservationsClient($dataViewMode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null)
	{
		$url = ProductReservationUrl::getProductReservationsUrl($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a product reservation.
	*
	* @param int $productReservationId Unique identifier of the product reservation.
	* @return MozuClient
	*/
	public static function getProductReservationClient($dataViewMode, $productReservationId)
	{
		$url = ProductReservationUrl::getProductReservationUrl($productReservationId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param bool $skipInventoryCheck 
	* @param array|ProductReservation $productReservations 
	* @return MozuClient
	*/
	public static function addProductReservationsClient($dataViewMode, $productReservations, $skipInventoryCheck =  null)
	{
		$url = ProductReservationUrl::addProductReservationsUrl($skipInventoryCheck);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productReservations)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param array|ProductReservation $productReservations 
	*/
	public static function commitReservationsClient($dataViewMode, $productReservations)
	{
		$url = ProductReservationUrl::commitReservationsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productReservations)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param bool $skipInventoryCheck 
	* @param array|ProductReservation $productReservations 
	* @return MozuClient
	*/
	public static function updateProductReservationsClient($dataViewMode, $productReservations, $skipInventoryCheck =  null)
	{
		$url = ProductReservationUrl::updateProductReservationsUrl($skipInventoryCheck);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productReservations)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Deletes a product reservation. For example, delete a reservation when an order is not processed to return the product quantity back to inventory.
	*
	* @param int $productReservationId Unique identifier of the reservation.
	*/
	public static function deleteProductReservationClient($dataViewMode, $productReservationId)
	{
		$url = ProductReservationUrl::deleteProductReservationUrl($productReservationId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>

