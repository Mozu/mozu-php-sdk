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

use Mozu\Api\Clients\Commerce\Orders\OrderReturnableItemClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class OrderReturnableItemResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param string $orderId 
	* @param string $responseFields 
	* @return OrderReturnableItemCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getOrderReturnableItems($orderId, $responseFields =  null)
	{
		$mozuClient = OrderReturnableItemClient::getOrderReturnableItemsClient($orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $orderId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getOrderReturnableItemsAsync($orderId, $responseFields =  null)
	{
		$mozuClient = OrderReturnableItemClient::getOrderReturnableItemsClient($orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
