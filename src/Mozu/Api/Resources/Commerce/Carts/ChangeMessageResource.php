<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Carts;

use Mozu\Api\Clients\Commerce\Carts\ChangeMessageClient;
use Mozu\Api\ApiContext;


/**
* Use the Cart Messages resource to retrieve messages for live carts that the system logs when a product's price or inventory level changes.
*/
class ChangeMessageResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the messages associated with the current shopper's cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CartChangeMessageCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getMessages($responseFields =  null)
	{
		$mozuClient = ChangeMessageClient::getMessagesClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the messages associated with the current shopper's cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getMessagesAsync($responseFields =  null)
	{
		$mozuClient = ChangeMessageClient::getMessagesClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes all messages associated with the cart of the current shopper.
	*
	* @deprecated deprecated since version 1.17
	*/
	public function removeAllMessages()
	{
		$mozuClient = ChangeMessageClient::removeAllMessagesClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes all messages associated with the cart of the current shopper.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function removeAllMessagesAsync()
	{
		$mozuClient = ChangeMessageClient::removeAllMessagesClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes a single message associated with the cart of the current shopper.
	*
	* @param string $messageId Identifier of the message to remove from the cart.
	* @deprecated deprecated since version 1.17
	*/
	public function removeMessage($messageId)
	{
		$mozuClient = ChangeMessageClient::removeMessageClient($messageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Removes a single message associated with the cart of the current shopper.
	*
	* @param string $messageId Identifier of the message to remove from the cart.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function removeMessageAsync($messageId)
	{
		$mozuClient = ChangeMessageClient::removeMessageClient($messageId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

