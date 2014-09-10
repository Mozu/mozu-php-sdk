<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CartUrl  {

	/**
		* Get Resource Url for GetCart
		* @param string $cartId Identifier of the cart to retrieve.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getCartUrl($cartId, $responseFields)
	{
		$url = "/api/commerce/carts/{cartId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("cartId", $cartId)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetOrCreateCart
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getOrCreateCartUrl($responseFields)
	{
		$url = "/api/commerce/carts/current?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCartSummary
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getCartSummaryUrl($responseFields)
	{
		$url = "/api/commerce/carts/summary?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetUserCartSummary
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $userId Unique identifier of the user whose cart details you want to retrieve.
		* @return string Resource Url
	*/
	public static function getUserCartSummaryUrl($responseFields, $userId)
	{
		$url = "/api/commerce/carts/user/{userId}/summary?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields)
				->formatUrl("userId", $userId);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetUserCart
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $userId Unique identifier of the user whose cart you want to retrieve.
		* @return string Resource Url
	*/
	public static function getUserCartUrl($responseFields, $userId)
	{
		$url = "/api/commerce/carts/user/{userId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields)
				->formatUrl("userId", $userId);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCart
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateCartUrl($responseFields)
	{
		$url = "/api/commerce/carts/current?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCart
		* @param string $cartId Identifier of the cart to delete.
		* @return string Resource Url
	*/
	public static function deleteCartUrl($cartId)
	{
		$url = "/api/commerce/carts/{cartId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false);
		$mozuUrl->formatUrl("cartId", $cartId);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCurrentCart
		* @return string Resource Url
	*/
	public static function deleteCurrentCartUrl()
	{
		$url = "/api/commerce/carts/current";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false);
		return $mozuUrl;
	}
	
}

?>

