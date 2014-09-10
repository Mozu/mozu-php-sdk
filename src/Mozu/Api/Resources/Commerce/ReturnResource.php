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

use Mozu\Api\Clients\Commerce\ReturnClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\CommerceRuntime\Returns\ReturnItem;
use Mozu\Api\Contracts\CommerceRuntime\Returns\MozuReturn;
use Mozu\Api\Contracts\CommerceRuntime\Payments\PaymentAction;
use Mozu\Api\Contracts\CommerceRuntime\Returns\ReturnAction;
use Mozu\Api\Contracts\CommerceRuntime\Returns\ReturnItemCollection;
use Mozu\Api\Contracts\CommerceRuntime\Returns\ReturnCollection;
use Mozu\Api\Contracts\CommerceRuntime\Payments\PaymentCollection;
use Mozu\Api\Contracts\CommerceRuntime\Payments\Payment;

/**
* Use the Returns resource to manage returned items that were previously fufilled. Returns can include any number of items associated with an original Mozu order. Each return must either be associated with an original order or a product definition to represent each returned item.
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
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return ReturnCollection 
	*/
	public function getReturns($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves a list of the actions available to perform for the specified return based on its current state.
	*
	* @param string $returnId Unique identifier of the return for which to retrieve available actions.
	* @return array|string 
	*/
	public function getAvailableReturnActions($returnId)
	{
		$mozuClient = ReturnClient::getAvailableReturnActionsClient($returnId);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId 
	* @param string $returnItemId 
	* @return ReturnItem 
	*/
	public function getReturnItem($returnId, $returnItemId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnItemClient($returnId, $returnItemId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId 
	* @return ReturnItemCollection 
	*/
	public function getReturnItems($returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnItemsClient($returnId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves a list of the payment actions available to perform for the specified return when a return results in a refund to the customer.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $returnId Unique identifier of the return associated with the payment.
	* @return array|string 
	*/
	public function getAvailablePaymentActionsForReturn($returnId, $paymentId)
	{
		$mozuClient = ReturnClient::getAvailablePaymentActionsForReturnClient($returnId, $paymentId);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves the details of a payment submitted as part of a refund associated with a customer return.
	*
	* @param string $paymentId Unique identifier of the return payment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return associated with the payment.
	* @return Payment 
	*/
	public function getPayment($returnId, $paymentId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getPaymentClient($returnId, $paymentId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves a list of all payments submitted as part of a refund associated with a customer return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Returns the details of the refund payment associated with the return specified in the request.
	* @return PaymentCollection 
	*/
	public function getPayments($returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getPaymentsClient($returnId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves a list of properties for the specified return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Returns the properties of the return specified in the request as well as system-supplied information.
	* @return MozuReturn 
	*/
	public function getReturn($returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::getReturnClient($returnId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Creates a return for previously fulfilled items. Each return must either be associated with an original order or a product definition to represent each returned item.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param MozuReturn $ret Wrapper for the properties of the return to create.
	* @return MozuReturn 
	*/
	public function createReturn($ret, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createReturnClient($ret, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId 
	* @param ReturnItem $returnItem 
	* @return MozuReturn 
	*/
	public function createReturnItem($returnItem, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createReturnItemClient($returnItem, $returnId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates a refund payment associated with a customer return by performing the specified action.
	*
	* @param string $paymentId Unique identifier of the return payment to update.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return associated with the refund payment.
	* @param PaymentAction $action The payment action to perform for the refund payment.
	* @return MozuReturn 
	*/
	public function performPaymentActionForReturn($action, $returnId, $paymentId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::performPaymentActionForReturnClient($action, $returnId, $paymentId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Creates a new payment for a return that results in a refund to the customer.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return associated with the payment action.
	* @param PaymentAction $action The payment action to perform for the customer return.
	* @return MozuReturn 
	*/
	public function createPaymentActionForReturn($action, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::createPaymentActionForReturnClient($action, $returnId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates the return by performing the action specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ReturnAction $action The name of the return action to perform, such as "Reject" or "Authorize".
	* @return ReturnCollection 
	*/
	public function performReturnActions($action, $responseFields =  null)
	{
		$mozuClient = ReturnClient::performReturnActionsClient($action, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates one or more properties of a return for items previously shipped in a completed order.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return.
	* @param MozuReturn $ret Wrapper for the array of properties to update for the return.
	* @return MozuReturn 
	*/
	public function updateReturn($ret, $returnId, $responseFields =  null)
	{
		$mozuClient = ReturnClient::updateReturnClient($ret, $returnId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $returnId 
	* @param string $returnItemId 
	* @return MozuReturn 
	*/
	public function deleteOrderItem($returnId, $returnItemId)
	{
		$mozuClient = ReturnClient::deleteOrderItemClient($returnId, $returnItemId);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Deletes the return specified in the request.
	*
	* @param string $returnId Unique identifier of the return to delete.
	* @return void
	*/
	public function deleteReturn($returnId)
	{
		$mozuClient = ReturnClient::deleteReturnClient($returnId);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	
}

?>

