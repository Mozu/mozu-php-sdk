<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Orders\ShipmentUrl;


/**
* Use the shipments resource to manage shipments of collections of packages for an order.
*/
class ShipmentClient {

	/**
	* Retrieves the details of the order shipment specified in the request.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $shipmentId Unique identifier of the shipment to retrieve.
	* @return MozuClient
	*/
	public static function getShipmentClient($orderId, $shipmentId, $responseFields =  null)
	{
		$url = ShipmentUrl::getShipmentUrl($orderId, $responseFields, $shipmentId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the available shipping methods applicable to the order. Typically used to display available shipping method options on the checkout page.
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order.
	* @return MozuClient
	*/
	public static function getAvailableShipmentMethodsClient($orderId, $draft =  null)
	{
		$url = ShipmentUrl::getAvailableShipmentMethodsUrl($draft, $orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a shipment from one or more package associated with an order and assign a label and tracking number to an order shipment.
	*
	* @param string $orderId Unique identifier of the order.
	* @param array|string $packageIds List of unique identifiers for each package associated with this shipment. Not all packages must belong to the same shipment.
	* @return MozuClient
	*/
	public static function createPackageShipmentsClient($packageIds, $orderId)
	{
		$url = ShipmentUrl::createPackageShipmentsUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($packageIds);
		return $mozuClient;

	}
	
	/**
	* Deletes the shipment specified in the request.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $shipmentId Unique identifier of the shipment to retrieve.
	*/
	public static function deleteShipmentClient($orderId, $shipmentId)
	{
		$url = ShipmentUrl::deleteShipmentUrl($orderId, $shipmentId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

