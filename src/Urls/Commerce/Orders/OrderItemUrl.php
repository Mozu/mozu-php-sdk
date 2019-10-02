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

class OrderItemUrl  {

	/**
		* Get Resource Url for GetOrderItemViaLineId
		* @param bool $draft 
		* @param int $lineId 
		* @param string $orderId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getOrderItemViaLineIdUrl($draft, $lineId, $orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/items/{lineId}?draft={draft}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("draft", $draft);
		$url = $mozuUrl->formatUrl("lineId", $lineId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetOrderItem
		* @param bool $draft If true, retrieve the draft version of this order item, which might include uncommitted changes to the order item, the order, or other order components.
		* @param string $orderId Unique identifier of the order item to retrieve.
		* @param string $orderItemId Unique identifier of the order item details to retrieve.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getOrderItemUrl($draft, $orderId, $orderItemId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}?draft={draft}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("draft", $draft);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetOrderItems
		* @param bool $draft If true, retrieve the draft version of the order's items, which might include uncommitted changes to one or more order items, the order itself, or other order components.
		* @param string $orderId Unique identifier of the order items to retrieve.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getOrderItemsUrl($draft, $orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/items?draft={draft}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("draft", $draft);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateOrderItem
		* @param string $orderId Unique identifier of the order for which to add the item.
		* @param string $responseFields 
		* @param bool $skipInventoryCheck If true, do not validate the product inventory when adding this item to the order.
		* @param string $updateMode Specifies whether to add the item by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function createOrderItemUrl($orderId, $responseFields, $skipInventoryCheck, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items?updatemode={updateMode}&version={version}&skipInventoryCheck={skipInventoryCheck}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateOrderItemDiscount
		* @param int $discountId Unique identifier of the discount. System-supplied and read only.
		* @param string $orderId Unique identifier of the order associated with the item discount.
		* @param string $orderItemId Unique identifier of the item in the order.
		* @param string $responseFields 
		* @param string $updateMode Specifies whether to change the item discount by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function updateOrderItemDiscountUrl($discountId, $orderId, $orderItemId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}/discounts/{discountId}?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("discountId", $discountId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateItemDuty
		* @param decimal $dutyAmount 
		* @param string $orderId 
		* @param string $orderItemId 
		* @param string $responseFields 
		* @param string $updateMode 
		* @param string $version 
		* @return string Resource Url
	*/
	public static function updateItemDutyUrl($dutyAmount, $orderId, $orderItemId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}/dutyAmount/{dutyAmount}?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("dutyAmount", $dutyAmount);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateItemFulfillment
		* @param string $orderId Unique identifier of the order.
		* @param string $orderItemId Unique identifier of the item in the order.
		* @param string $responseFields 
		* @param string $updateMode Specifies whether to apply the coupon by updating the original order, updating the order in draft mode, or updating the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function updateItemFulfillmentUrl($orderId, $orderItemId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}/fulfillment?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateItemProductPrice
		* @param string $orderId Unique identifier of the order containing the item to price override.
		* @param string $orderItemId Unique identifier of the item in the order to price override.
		* @param decimal $price The override price to specify for this item in the specified order.
		* @param string $responseFields 
		* @param string $updateMode Specifies whether to change the product price by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function updateItemProductPriceUrl($orderId, $orderItemId, $price, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}/price/{price}?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("price", $price);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateItemQuantity
		* @param string $orderId Unique identifier of the order containing the item to update quantity.
		* @param string $orderItemId Unique identifier of the item in the order to update quantity.
		* @param int $quantity The quantity of the item in the order to update.
		* @param string $responseFields 
		* @param string $updateMode Specifies whether to change the item quantity by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function updateItemQuantityUrl($orderId, $orderItemId, $quantity, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}/quantity/{quantity}?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("quantity", $quantity);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteOrderItem
		* @param string $orderId Unique identifier of the order with the item to remove.
		* @param string $orderItemId Unique identifier of the item to remove from the order.
		* @param string $updateMode Specifies whether to remove the item by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function deleteOrderItemUrl($orderId, $orderItemId, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
}

?>
