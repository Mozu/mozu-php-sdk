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
use Mozu\Api\Urls\Commerce\Orders\PickupUrl;


/**
* Use the Pickups resource to organize items submitted in an order into pickups that enable the shopper to fulfill the order items using the in-store pickup method.
*/
class PickupClient {

	/**
	* 
	*
	* @param string $orderId Unique identifier of the order associated with the pickup.
	* @param string $pickupId Unique identifier of the pickup for which to retrieve available actions.
	* @return MozuClient
	*/
	public static function getAvailablePickupFulfillmentActionsClient($orderId, $pickupId)
	{
		$url = PickupUrl::getAvailablePickupFulfillmentActionsUrl($orderId, $pickupId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $orderId Unique identifier of the order associated with the pickup.
	* @param string $pickupId Unique identifier of the pickup to retrieve.
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getPickupClient($orderId, $pickupId, $responseFields =  null)
	{
		$url = PickupUrl::getPickupUrl($orderId, $pickupId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields 
	* @param Pickup $pickup Properties of the in-store pickup to create.
	* @return MozuClient
	*/
	public static function createPickupClient($pickup, $orderId, $responseFields =  null)
	{
		$url = PickupUrl::createPickupUrl($orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($pickup);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $orderId Unique identifier of the order associated with the in-store pickup.
	* @param string $pickupId Unique identifier of the pickup to update.
	* @param string $responseFields 
	* @param Pickup $pickup Properties of the in-store pickup to update.
	* @return MozuClient
	*/
	public static function updatePickupClient($pickup, $orderId, $pickupId, $responseFields =  null)
	{
		$url = PickupUrl::updatePickupUrl($orderId, $pickupId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($pickup);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $orderId Unique identifier of the order associated with the pickup.
	* @param string $pickupId Unique identifier of the pickup to remove.
	* @return MozuClient
	*/
	public static function deletePickupClient($orderId, $pickupId)
	{
		$url = PickupUrl::deletePickupUrl($orderId, $pickupId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
