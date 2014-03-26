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
use Mozu\Api\Clients\Commerce\ReturnClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the returns subresource to manage returned items for a completed order. Returns can include any number of items associated with the original order.
*/
class ReturnResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of all returns according to any filter and sort criteria.
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return ReturnCollection 
	*/
	public function getReturns($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::getReturnsClient($startIndex, $pageSize, $sortBy, $filter, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a list of properties for the specified return.
	*
	* @param string $returnId Returns the properties of the return specified in the request as well as system-supplied information.
	* @return Return 
	*/
	public function getReturn($returnId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::getReturnClient($returnId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a list of the actions available to perform for the specified return based on its current state.
	*
	* @param string $returnId Retrieves a list of the actions available to perform for the specified return based on its current state.
	* @return array|string 
	*/
	public function getAvailableReturnActions($returnId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::getAvailableReturnActionsClient($returnId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a list of all payments submitted as part of a refund associated with a customer return.
	*
	* @param string $returnId Returns the details of the refund payment associated with the return specified in the request.
	* @return PaymentCollection 
	*/
	public function getPayments($returnId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::getPaymentsClient($returnId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a payment submitted as part of a refund associated with a customer return.
	*
	* @param string $paymentId Unique identifier of the return payment to retrieve.
	* @param string $returnId Unique identifier of the return associated with the payment.
	* @return Payment 
	*/
	public function getPayment($returnId, $paymentId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::getPaymentClient($returnId, $paymentId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a list of the payment actions available to perform for the specified return when a return results in a refund to the customer.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $returnId Unique identifier of the return associated with the payment.
	* @return array|string 
	*/
	public function getAvailablePaymentActionsForReturn($returnId, $paymentId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::getAvailablePaymentActionsForReturnClient($returnId, $paymentId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a return for items previously shipped in a completed order.
	*
	* @param Return $ret Wrapper for the properties of the return to create.
	* @return Return 
	*/
	public function createReturn($ret, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::createReturnClient($ret, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates a refund payment associated with a customer return by performing the specified action.
	*
	* @param string $paymentId Unique identifier of the return payment to update.
	* @param string $returnId Unique identifier of the return associated with the refund payment.
	* @param PaymentAction $action The payment action to perform for the refund payment.
	* @return Return 
	*/
	public function performPaymentActionForReturn($action, $returnId, $paymentId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::performPaymentActionForReturnClient($action, $returnId, $paymentId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new payment for a return that results in a refund to the customer.
	*
	* @param string $returnId Unique identifier of the return associated with the payment action.
	* @param PaymentAction $action The payment action to perform for the customer return.
	* @return Return 
	*/
	public function createPaymentActionForReturn($action, $returnId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::createPaymentActionForReturnClient($action, $returnId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the return by performing the specified action.
	*
	* @param ReturnAction $action The name of the return action to perform, such as "Refund" or "Replace".
	* @return ReturnCollection 
	*/
	public function performReturnActions($action, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::performReturnActionsClient($action, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties of a return for items previously shipped in a completed order.
	*
	* @param string $returnId Unique identifier of the return.
	* @param Return $ret Wrapper for the array of properties to update for the return.
	* @return Return 
	*/
	public function updateReturn($ret, $returnId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::updateReturnClient($ret, $returnId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes a return previously configured for the specified order.
	*
	* @param string $returnId Unique identifier of the return to delete from the order.
	*/
	public function deleteReturn($returnId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ReturnClient::deleteReturnClient($returnId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

