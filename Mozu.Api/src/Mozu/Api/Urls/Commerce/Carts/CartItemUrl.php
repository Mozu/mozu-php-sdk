<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Carts;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CartItemUrl  {

	/**
		* Get Resource Url for GetCartItems
		* @return string Resource Url
	*/
	public static function getCartItemsUrl()
	{
		$url = "/api/commerce/carts/current/items";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetCartItem
		* @param string $cartItemId 
		* @return string Resource Url
	*/
	public static function getCartItemUrl($cartItemId)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}";
		$url = MozuUrl::formatUrl($url, "cartItemId", $cartItemId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for AddItemToCart
		* @return string Resource Url
	*/
	public static function addItemToCartUrl()
	{
		$url = "/api/commerce/carts/current/items";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateCartItem
		* @param string $cartItemId 
		* @return string Resource Url
	*/
	public static function updateCartItemUrl($cartItemId)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}";
		$url = MozuUrl::formatUrl($url, "cartItemId", $cartItemId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for UpdateCartItemQuantity
		* @param string $cartItemId 
		* @param int $quantity 
		* @return string Resource Url
	*/
	public static function updateCartItemQuantityUrl($cartItemId, $quantity)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}/{quantity}";
		$url = MozuUrl::formatUrl($url, "cartItemId", $cartItemId);
		$url = MozuUrl::formatUrl($url, "quantity", $quantity);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for RemoveAllCartItems
		* @return string Resource Url
	*/
	public static function removeAllCartItemsUrl()
	{
		$url = "/api/commerce/carts/current/items";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
	/**
		* Get Resource Url for DeleteCartItem
		* @param string $cartItemId 
		* @return string Resource Url
	*/
	public static function deleteCartItemUrl($cartItemId)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}";
		$url = MozuUrl::formatUrl($url, "cartItemId", $cartItemId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>

