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
use Mozu\Api\Urls\Commerce\Orders\OrderItemUrl;


/**
* Use this subresource to retrieve details about items in an active order.
*/
class OrderItemClient {

	/**
	* orders-orderitems Get GetOrderItemViaLineId description DOCUMENT_HERE 
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param int $lineId 
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @return MozuClient
	*/
	public static function getOrderItemViaLineIdClient($orderId, $lineId, $draft =  null, $responseFields =  null)
	{
		$url = OrderItemUrl::getOrderItemViaLineIdUrl($draft, $lineId, $orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a single order item.
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order.
	* @param string $orderItemId Unique identifier of the item to remove from the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getOrderItemClient($orderId, $orderItemId, $draft =  null, $responseFields =  null)
	{
		$url = OrderItemUrl::getOrderItemUrl($draft, $orderId, $orderItemId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of all items in an order.
	*
	* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getOrderItemsClient($orderId, $draft =  null, $responseFields =  null)
	{
		$url = OrderItemUrl::getOrderItemsUrl($draft, $orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a new item to a defined order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param OrderItem $orderItem The details associated with a specific item in an order.
	* @return MozuClient
	*/
	public static function createOrderItemClient($orderItem, $orderId, $updateMode =  null, $version =  null, $skipInventoryCheck =  null, $responseFields =  null)
	{
		$url = OrderItemUrl::createOrderItemUrl($orderId, $responseFields, $skipInventoryCheck, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($orderItem);
		return $mozuClient;

	}
	
	/**
	* Update the discount applied to an item in an order.
	*
	* @param int $discountId Unique identifier of the discount. System-supplied and read only.
	* @param string $orderId Unique identifier of the order.
	* @param string $orderItemId Unique identifier of the item to remove from the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param AppliedDiscount $discount Properties of all applied discounts for an associated cart, order, or product. 
	* @return MozuClient
	*/
	public static function updateOrderItemDiscountClient($discount, $orderId, $orderItemId, $discountId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = OrderItemUrl::updateOrderItemDiscountUrl($discountId, $orderId, $orderItemId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($discount);
		return $mozuClient;

	}
	
	/**
	* orders-orderitems Put UpdateItemDuty description DOCUMENT_HERE 
	*
	* @param decimal $dutyAmount 
	* @param string $orderId Unique identifier of the order.
	* @param string $orderItemId Unique identifier of the item to remove from the order.
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
	* @return MozuClient
	*/
	public static function updateItemDutyClient($orderId, $orderItemId, $dutyAmount, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = OrderItemUrl::updateItemDutyUrl($dutyAmount, $orderId, $orderItemId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates the item fulfillment information for the order specified in the request.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $orderItemId Unique identifier of the item to remove from the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param OrderItem $orderItem The details associated with a specific item in an order.
	* @return MozuClient
	*/
	public static function updateItemFulfillmentClient($orderItem, $orderId, $orderItemId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = OrderItemUrl::updateItemFulfillmentUrl($orderId, $orderItemId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($orderItem);
		return $mozuClient;

	}
	
	/**
	* Override the price of an individual product on a line item in the specified order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $orderItemId Unique identifier of the item to remove from the order.
	* @param decimal $price The override price to specify for this item in the specified order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return MozuClient
	*/
	public static function updateItemProductPriceClient($orderId, $orderItemId, $price, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = OrderItemUrl::updateItemProductPriceUrl($orderId, $orderItemId, $price, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Update the quantity of an item in an order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $orderItemId Unique identifier of the item to remove from the order.
	* @param int $quantity The number of cart items in the shopper's active cart.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return MozuClient
	*/
	public static function updateItemQuantityClient($orderId, $orderItemId, $quantity, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = OrderItemUrl::updateItemQuantityUrl($orderId, $orderItemId, $quantity, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Removes a previously added item from a defined order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $orderItemId Unique identifier of the item to remove from the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return MozuClient
	*/
	public static function deleteOrderItemClient($orderId, $orderItemId, $updateMode =  null, $version =  null)
	{
		$url = OrderItemUrl::deleteOrderItemUrl($orderId, $orderItemId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

