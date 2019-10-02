<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Carts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Carts\CartItemUrl;


/**
* Use the Cart Items subresource to manage a collection of items in an active shopping cart.
*/
class CartItemClient {

	/**
	* 
	*
	* @param string $cartItemId Identifier of the cart item to retrieve.
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getCartItemClient($cartItemId, $responseFields =  null)
	{
		$url = CartItemUrl::getCartItemUrl($cartItemId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getCartItemsClient($responseFields =  null)
	{
		$url = CartItemUrl::getCartItemsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param bool $throwErrorOnInvalidItems 
	* @param array|CartItem $cartItems 
	* @return MozuClient
	*/
	public static function addItemsToCartClient($cartItems, $throwErrorOnInvalidItems =  null)
	{
		$url = CartItemUrl::addItemsToCartUrl($throwErrorOnInvalidItems);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($cartItems);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param CartItem $cartItem All properties of the new cart item. The product code is required.
	* @return MozuClient
	*/
	public static function addItemToCartClient($cartItem, $responseFields =  null)
	{
		$url = CartItemUrl::addItemToCartUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($cartItem);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $cartItemId Identifier of the cart item to update quantity.
	* @param int $quantity The number of cart items in the shopper's active cart.
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function updateCartItemQuantityClient($cartItemId, $quantity, $responseFields =  null)
	{
		$url = CartItemUrl::updateCartItemQuantityUrl($cartItemId, $quantity, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $cartItemId Identifier of the cart item to update.
	* @param string $responseFields 
	* @param CartItem $cartItem The properties of the cart item to update.
	* @return MozuClient
	*/
	public static function updateCartItemClient($cartItem, $cartItemId, $responseFields =  null)
	{
		$url = CartItemUrl::updateCartItemUrl($cartItemId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($cartItem);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @return MozuClient
	*/
	public static function removeAllCartItemsClient()
	{
		$url = CartItemUrl::removeAllCartItemsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @return MozuClient
	*/
	public static function deleteCartItemClient($cartItemId)
	{
		$url = CartItemUrl::deleteCartItemUrl($cartItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
