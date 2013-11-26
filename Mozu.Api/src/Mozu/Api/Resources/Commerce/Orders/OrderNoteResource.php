<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Orders\OrderNoteClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class OrderNoteResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $orderId 
	* @return array|OrderNote 
	*/
	public function getOrderNotes( $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderNoteClient::getOrderNotesClient( $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $noteId 
	* @param string $orderId 
	* @return OrderNote 
	*/
	public function getOrderNote( $noteId,  $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderNoteClient::getOrderNoteClient( $noteId,  $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $orderId 
	* @param OrderNote $orderNote 
	* @return OrderNote 
	*/
	public function createOrderNote($orderNote,  $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderNoteClient::createOrderNoteClient($orderNote,  $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $noteId 
	* @param string $orderId 
	* @param OrderNote $orderNote 
	* @return OrderNote 
	*/
	public function updateOrderNote($orderNote,  $noteId,  $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderNoteClient::updateOrderNoteClient($orderNote,  $noteId,  $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $noteId 
	* @param string $orderId 
	*/
	public function deleteOrderNote( $noteId,  $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderNoteClient::deleteOrderNoteClient( $noteId,  $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

