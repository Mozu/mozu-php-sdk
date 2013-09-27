<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce;

use Mozu\Api\Urls\BaseUrl;

class CartUrl extends BaseUrl {

	/**
		* Get Resource Url for GetCart
		* @param string $cartId Identifier of the cart being retrieved.
		* @return string Resource Url
	*/
	public static function getCartUrl($cartId)
	{
		$url = "/api/commerce/carts/{cartId}";
		$url = parent::formatUrl($url, "cartId", $cartId);
		return $url;
	}
	
	/**
		* Get Resource Url for GetOrCreateCart
		* @return string Resource Url
	*/
	public static function getOrCreateCartUrl()
	{
		$url = "/api/commerce/carts/current";
		return $url;
	}
	
	/**
		* Get Resource Url for GetCartSummary
		* @return string Resource Url
	*/
	public static function getCartSummaryUrl()
	{
		$url = "/api/commerce/carts/summary";
		return $url;
	}
	
	/**
		* Get Resource Url for GetUserCart
		* @param string $userId Unique identifier of the user whose cart you want to retrieve.
		* @return string Resource Url
	*/
	public static function getUserCartUrl($userId)
	{
		$url = "/api/commerce/carts/user/{userId}";
		$url = parent::formatUrl($url, "userId", $userId);
		return $url;
	}
	
	/**
		* Get Resource Url for GetUserCartSummary
		* @param string $userId Unique identifier of the user whose cart details you want to retrieve.
		* @return string Resource Url
	*/
	public static function getUserCartSummaryUrl($userId)
	{
		$url = "/api/commerce/carts/user/{userId}/summary";
		$url = parent::formatUrl($url, "userId", $userId);
		return $url;
	}
	
	/**
		* Get Resource Url for UpdateCart
		* @return string Resource Url
	*/
	public static function updateCartUrl()
	{
		$url = "/api/commerce/carts/current";
		return $url;
	}
	
	/**
		* Get Resource Url for DeleteCart
		* @param string $cartId Identifier of the cart being deleted.
		* @return string Resource Url
	*/
	public static function deleteCartUrl($cartId)
	{
		$url = "/api/commerce/carts/{cartId}";
		$url = parent::formatUrl($url, "cartId", $cartId);
		return $url;
	}
	
	/**
		* Get Resource Url for DeleteCurrentCart
		* @return string Resource Url
	*/
	public static function deleteCurrentCartUrl()
	{
		$url = "/api/commerce/carts/current";
		return $url;
	}
	
}

?>

