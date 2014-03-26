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
use Mozu\Api\Urls\Commerce\Orders\OrderNoteUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use this subresource to manage notes associated with an active order.
*/
class OrderNoteClient {

	/**
	* Retrieves a list of all notes for an order.
	*
	* @param string $orderId Unique identifier of the order whose notes are retrieved.
	* @return MozuClient
	*/
	public static function getOrderNotesClient($orderId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = OrderNoteUrl::getOrderNotesUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves a specific order note from an order.
	*
	* @param string $noteId Unique identifier of the note text to retrieve.
	* @param string $orderId Unique identifier of the order note to retrieve.
	* @return MozuClient
	*/
	public static function getOrderNoteClient($orderId, $noteId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = OrderNoteUrl::getOrderNoteUrl($noteId, $orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Adds a note to the order. This is an internal note that the merchant can add to an order.
	*
	* @param string $orderId Unique identifier of the order to add a note.
	* @param OrderNote $orderNote The Unicode alphanumeric text contained in the note. Max length: 256 characters.
	* @return MozuClient
	*/
	public static function createOrderNoteClient($orderNote, $orderId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = OrderNoteUrl::createOrderNoteUrl($orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($orderNote);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Updates a specific order note for an order.
	*
	* @param string $noteId Unique identifier of the note whose text is being updated.
	* @param string $orderId Unique identifier of the order whose note is being updated.
	* @param OrderNote $orderNote The Unicode alphanumeric text contained in the note.
	* @return MozuClient
	*/
	public static function updateOrderNoteClient($orderNote, $orderId, $noteId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = OrderNoteUrl::updateOrderNoteUrl($noteId, $orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($orderNote);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes a specific order note on an order.
	*
	* @param string $noteId Unique identifier of the note text to delete.
	* @param string $orderId Unique identifier of the order note to delete.
	*/
	public static function deleteOrderNoteClient($orderId, $noteId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = OrderNoteUrl::deleteOrderNoteUrl($noteId, $orderId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	
}

?>

