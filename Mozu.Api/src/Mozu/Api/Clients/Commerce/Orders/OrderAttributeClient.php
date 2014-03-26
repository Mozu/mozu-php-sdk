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
* List of attributes that describe an order. An order attribute has content localized to the locale code of the site and several other properties that uniquely identify it to associate with an order.
*/
class OrderAttributeClient {

	/**
	* Retrieves a list of order attributes.
	*
	* @param string $orderId Identifier of the order whose order attributes are being retrieved.
	* @return MozuClient
	*/
	public static function getOrderAttributesClient($orderId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = OrderAttributeUrl::getOrderAttributesUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Create a new list of order attributes by providing the order ID.
	*
	* @param string $orderId Identifier of the order whose attributes are being created.
	* @param array|OrderAttribute $orderAttributes The attribute properties to create to associate with the order ID.
	* @return MozuClient
	*/
	public static function createOrderAttributesClient($orderAttributes, $orderId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = OrderAttributeUrl::createOrderAttributesUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($orderAttributes);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Update the properties of an order's attributes by providing the order ID and by removing any missing properties if removeMissing is set to true.
	*
	* @param string $orderId Identifier of the order whose order attributes are being updated.
	* @param bool $removeMissing If true, the operation removes missing properties so that the updated order attributes will not show properties with a null value.
	* @param array|OrderAttribute $orderAttributes List of order attributes being updated.
	* @return MozuClient
	*/
	public static function updateOrderAttributesClient($orderAttributes, $orderId, $removeMissing =  null, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = OrderAttributeUrl::updateOrderAttributesUrl($orderId, $removeMissing);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($orderAttributes);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	
}

?>

