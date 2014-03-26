<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Orders;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ShipmentUrl  {

	/**
		* Get Resource Url for GetShipment
		* @param string $orderId 
		* @param string $shipmentId 
		* @return string Resource Url
	*/
	public static function getShipmentUrl($orderId, $shipmentId)
	{
		$url = "/api/commerce/orders/{orderId}/shipments/{shipmentId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("shipmentId", $shipmentId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAvailableShipmentMethods
		* @param string $orderId Unique identifier of the order for the available shipment methods being retrieved.
		* @return string Resource Url
	*/
	public static function getAvailableShipmentMethodsUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/shipments/methods";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreatePackageShipments
		* @param string $orderId Unique identifier of the order for this shipment.
		* @return string Resource Url
	*/
	public static function createPackageShipmentsUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/shipments";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteShipment
		* @param string $orderId Unique identifier of the order to cancel shipment.
		* @param string $shipmentId Unique identifier of the shipment to cancel.
		* @return string Resource Url
	*/
	public static function deleteShipmentUrl($orderId, $shipmentId)
	{
		$url = "/api/commerce/orders/{orderId}/shipments/{shipmentId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("shipmentId", $shipmentId);
		return $mozuUrl;
	}
	
}

?>

