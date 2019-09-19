<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Wishlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Wishlists\WishlistItemUrl;


/**
* Use the Wish List Items subresource to manage items in a shopper wish list. The same product can be defined as an item in any number of wish lists for the customer account. Use the Wish Lists resource to manage shopper wish lists.
*/
class WishlistItemClient {

	/**
	* 
	*
	* @param string $responseFields 
	* @param string $wishlistId Unique identifier of the wish list item to retrieve.
	* @param string $wishlistItemId Unique identifier of the wish list associated with the item to retrieve.
	* @return MozuClient
	*/
	public static function getWishlistItemClient($wishlistId, $wishlistItemId, $responseFields =  null)
	{
		$url = WishlistItemUrl::getWishlistItemUrl($responseFields, $wishlistId, $wishlistItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @param string $wishlistId Unique identifier of the wish list associated with the items to retrieve.
	* @return MozuClient
	*/
	public static function getWishlistItemsClient($wishlistId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = WishlistItemUrl::getWishlistItemsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex, $wishlistId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $customerAccountId The unique identifier of the customer account associated with the wish list.
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @param string $wishlistName The name of the wish list that contains the items to retrieve.
	* @return MozuClient
	*/
	public static function getWishlistItemsByWishlistNameClient($customerAccountId, $wishlistName, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = WishlistItemUrl::getWishlistItemsByWishlistNameUrl($customerAccountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex, $wishlistName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param string $wishlistId Unique identifier of the wish list associated with the item to add.
	* @param WishlistItem $wishlistItem Properties of the item to add to the wish list.
	* @return MozuClient
	*/
	public static function addItemToWishlistClient($wishlistItem, $wishlistId, $responseFields =  null)
	{
		$url = WishlistItemUrl::addItemToWishlistUrl($responseFields, $wishlistId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($wishlistItem);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $quantity The quantity of the item in the wish list.
	* @param string $responseFields 
	* @param string $wishlistId Unique identifier of the wish list associated with the item quantity to update.
	* @param string $wishlistItemId Unique identifier of the item in the wish list to update quantity.
	* @return MozuClient
	*/
	public static function updateWishlistItemQuantityClient($wishlistId, $wishlistItemId, $quantity, $responseFields =  null)
	{
		$url = WishlistItemUrl::updateWishlistItemQuantityUrl($quantity, $responseFields, $wishlistId, $wishlistItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param string $wishlistId Unique identifier of the wish list associated with the item to update.
	* @param string $wishlistItemId Unique identifier of the item in the shopper wish list to update.
	* @param WishlistItem $wishlistItem Properties of the shopper wish list item to update.
	* @return MozuClient
	*/
	public static function updateWishlistItemClient($wishlistItem, $wishlistId, $wishlistItemId, $responseFields =  null)
	{
		$url = WishlistItemUrl::updateWishlistItemUrl($responseFields, $wishlistId, $wishlistItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($wishlistItem);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $wishlistId Unique identifier of the wish list associated with the items to remove.
	* @return MozuClient
	*/
	public static function removeAllWishlistItemsClient($wishlistId)
	{
		$url = WishlistItemUrl::removeAllWishlistItemsUrl($wishlistId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $wishlistId Unique identifier of the wish list associated with the item to remove.
	* @param string $wishlistItemId Unique identifier of the item to remove from the shopper wish list.
	* @return MozuClient
	*/
	public static function deleteWishlistItemClient($wishlistId, $wishlistItemId)
	{
		$url = WishlistItemUrl::deleteWishlistItemUrl($wishlistId, $wishlistItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

