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

use Mozu\Api\Clients\Commerce\Orders\FulfillmentInfoClient;
use Mozu\Api\ApiContext;


/**
* Use the Fulfillment Information resource to manage shipping or pickup information for orders.
*/
class FulfillmentInfoResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param bool $draft If true, retrieve the draft version of the order's fulfillment information, which might include uncommitted changes.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields 
	* @return FulfillmentInfo 
	* @deprecated deprecated since version 1.17
	*/
	public function getFulfillmentInfo($orderId, $draft =  null, $responseFields =  null)
	{
		$mozuClient = FulfillmentInfoClient::getFulfillmentInfoClient($orderId, $draft, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param bool $draft If true, retrieve the draft version of the order's fulfillment information, which might include uncommitted changes.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getFulfillmentInfoAsync($orderId, $draft =  null, $responseFields =  null)
	{
		$mozuClient = FulfillmentInfoClient::getFulfillmentInfoClient($orderId, $draft, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields 
	* @param string $updateMode Specifies whether to set the fulfillment information by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version 
	* @param FulfillmentInfo $fulfillmentInfo Array list of fulfillment information associated with an order.
	* @return FulfillmentInfo 
	* @deprecated deprecated since version 1.17
	*/
	public function setFulFillmentInfo($fulfillmentInfo, $orderId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$mozuClient = FulfillmentInfoClient::setFulFillmentInfoClient($fulfillmentInfo, $orderId, $updateMode, $version, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields 
	* @param string $updateMode Specifies whether to set the fulfillment information by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function setFulFillmentInfoAsync($fulfillmentInfo, $orderId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$mozuClient = FulfillmentInfoClient::setFulFillmentInfoClient($fulfillmentInfo, $orderId, $updateMode, $version, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

