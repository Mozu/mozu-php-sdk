<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Orders\OrderAttributeUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Order Attributes resource to define how an order attribute definition applies to a specific order.
*/
class OrderAttributeClient {

	/**
	* Retrieves a list of the attributes defined for the order specified in the request.
	*
	* @param string $orderId Unique identifier of the order for which to retrieve a list of defined attributes.
	* @return MozuClient
	*/
	public static function getOrderAttributesClient($orderId)
	{
		$url = OrderAttributeUrl::getOrderAttributesUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Applies a list of attributes to the order specified in the request and defines a value for each attribute in the request body.
	*
	* @param string $orderId Unique identifier of the order for which to assign the attributes.
	* @param array|OrderAttribute $orderAttributes The list of attributes to associate with the order, and the properties of each attribute to define for the order.
	* @return MozuClient
	*/
	public static function createOrderAttributesClient($orderAttributes, $orderId)
	{
		$url = OrderAttributeUrl::createOrderAttributesUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($orderAttributes);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of an attribute defined for the order specified in the request.
	*
	* @param string $orderId Identifier of the order for which to update attributes.
	* @param bool $removeMissing If true, the operation removes missing properties so that the updated order attributes will not show properties with a null value.
	* @param array|OrderAttribute $orderAttributes List of order attributes to update, including the properties of each defined attribute in the list.
	* @return MozuClient
	*/
	public static function updateOrderAttributesClient($orderAttributes, $orderId, $removeMissing =  null)
	{
		$url = OrderAttributeUrl::updateOrderAttributesUrl($orderId, $removeMissing);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($orderAttributes);
		return $mozuClient;

	}
	
	
}

?>

