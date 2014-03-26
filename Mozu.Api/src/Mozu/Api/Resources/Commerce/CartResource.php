<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\CartClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Carts resource to manage storefront shopping carts as items are added and removed. Each time a shopper's cart is modified, the Carts resource updates estimated prices, discounts, tax, and shipping.
*/
class CartResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieve a cart specified by its cart ID.
	*
	* @param string $cartId Identifier of the cart being retrieved.
	* @return Cart 
	*/
	public function getCart($cartId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = CartClient::getCartClient($cartId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a cart's contents for the current shopper. If the shopper does not have an active cart on the site, the service creates one.
	*
	* @return Cart 
	*/
	public function getOrCreateCart(Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = CartClient::getOrCreateCartClient($userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the number of items in the active cart and the status of the cart such as whether or not it has expired. Only an anonymous user's cart (guest that does not log in) that is emptied and idle will expire after 14 days. Note that the expiration counter is renewed each time action is made to the cart. For shoppers or users that are logged in, the cart does not expire.
	*
	* @return CartSummary 
	*/
	public function getCartSummary(Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = CartClient::getCartSummaryClient($userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieve a user's cart by specifying the user ID.
	*
	* @param string $userId Unique identifier of the user whose cart you want to retrieve.
	* @return Cart 
	*/
	public function getUserCart($userId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = CartClient::getUserCartClient($userId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the current status of the specified user's cart, including the number of items in the active cart.
	*
	* @param string $userId Unique identifier of the user whose cart details you want to retrieve.
	* @return CartSummary 
	*/
	public function getUserCartSummary($userId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = CartClient::getUserCartSummaryClient($userId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update the current shopper's cart.
	*
	* @param Cart $cart All of the properties of the cart to update. The product code is required.
	* @return Cart 
	*/
	public function updateCart($cart, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = CartClient::updateCartClient($cart, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Delete the cart specified by its cart ID.
	*
	* @param string $cartId Identifier of the cart being deleted.
	*/
	public function deleteCart($cartId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = CartClient::deleteCartClient($cartId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Deletes the cart of the currently active shopper.
	*
	*/
	public function deleteCurrentCart(Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = CartClient::deleteCurrentCartClient($userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

