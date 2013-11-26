<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Orders;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class OrderNoteUrl  {

	/**
		* Get Resource Url for GetOrderNotes
		* @param string $orderId 
		* @return string Resource Url
	*/
	public static function getOrderNotesUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/notes";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetOrderNote
		* @param string $noteId 
		* @param string $orderId 
		* @return string Resource Url
	*/
	public static function getOrderNoteUrl($noteId, $orderId)
	{
		$url = "/api/commerce/orders/{orderId}/notes/{noteId}";
		$url = MozuUrl::formatUrl($url, "noteId", $noteId);
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for CreateOrderNote
		* @param string $orderId 
		* @return string Resource Url
	*/
	public static function createOrderNoteUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/notes";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateOrderNote
		* @param string $noteId 
		* @param string $orderId 
		* @return string Resource Url
	*/
	public static function updateOrderNoteUrl($noteId, $orderId)
	{
		$url = "/api/commerce/orders/{orderId}/notes/{noteId}";
		$url = MozuUrl::formatUrl($url, "noteId", $noteId);
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteOrderNote
		* @param string $noteId 
		* @param string $orderId 
		* @return string Resource Url
	*/
	public static function deleteOrderNoteUrl($noteId, $orderId)
	{
		$url = "/api/commerce/orders/{orderId}/notes/{noteId}";
		$url = MozuUrl::formatUrl($url, "noteId", $noteId);
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>

