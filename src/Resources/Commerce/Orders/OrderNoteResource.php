<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\Clients\Commerce\Orders\OrderNoteClient;
use Mozu\Api\ApiContext;


/**
* Use the Order Notes subresource to manage merchant-level notes associated with an active order.
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
	* @param string $orderId Unique identifier of the order.
	* @return array|OrderNote 
	* @deprecated deprecated since version 1.17
	*/
	public function getOrderNotes($orderId)
	{
		$mozuClient = OrderNoteClient::getOrderNotesClient($orderId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $orderId Unique identifier of the order.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getOrderNotesAsync($orderId)
	{
		$mozuClient = OrderNoteClient::getOrderNotesClient($orderId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $noteId Unique identifier of the order note to retrieve.
	* @param string $orderId Unique identifier of the order associated with the note.
	* @param string $responseFields 
	* @return OrderNote 
	* @deprecated deprecated since version 1.17
	*/
	public function getOrderNote($orderId, $noteId, $responseFields =  null)
	{
		$mozuClient = OrderNoteClient::getOrderNoteClient($orderId, $noteId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $noteId Unique identifier of the order note to retrieve.
	* @param string $orderId Unique identifier of the order associated with the note.
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getOrderNoteAsync($orderId, $noteId, $responseFields =  null)
	{
		$mozuClient = OrderNoteClient::getOrderNoteClient($orderId, $noteId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $orderId Unique identifier of the order for which to add a note.
	* @param string $responseFields 
	* @param OrderNote $orderNote The alphanumeric text contained in the note. The maximum length is 256 characters.
	* @return OrderNote 
	* @deprecated deprecated since version 1.17
	*/
	public function createOrderNote($orderNote, $orderId, $responseFields =  null)
	{
		$mozuClient = OrderNoteClient::createOrderNoteClient($orderNote, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $orderId Unique identifier of the order for which to add a note.
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createOrderNoteAsync($orderNote, $orderId, $responseFields =  null)
	{
		$mozuClient = OrderNoteClient::createOrderNoteClient($orderNote, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $noteId Unique identifier of the order note.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields 
	* @param OrderNote $orderNote The content of the order note. The maximum length is 256 characters.
	* @return OrderNote 
	* @deprecated deprecated since version 1.17
	*/
	public function updateOrderNote($orderNote, $orderId, $noteId, $responseFields =  null)
	{
		$mozuClient = OrderNoteClient::updateOrderNoteClient($orderNote, $orderId, $noteId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $noteId Unique identifier of the order note.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateOrderNoteAsync($orderNote, $orderId, $noteId, $responseFields =  null)
	{
		$mozuClient = OrderNoteClient::updateOrderNoteClient($orderNote, $orderId, $noteId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $noteId Unique identifier of the order note to delete.
	* @param string $orderId Unique identifier of the order associated with the note.
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteOrderNote($orderId, $noteId)
	{
		$mozuClient = OrderNoteClient::deleteOrderNoteClient($orderId, $noteId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $noteId Unique identifier of the order note to delete.
	* @param string $orderId Unique identifier of the order associated with the note.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteOrderNoteAsync($orderId, $noteId)
	{
		$mozuClient = OrderNoteClient::deleteOrderNoteClient($orderId, $noteId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
