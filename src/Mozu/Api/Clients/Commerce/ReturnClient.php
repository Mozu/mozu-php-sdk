<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\ReturnUrl;


/**
* Use the Returns resource to manage returned items that were previously fufilled. Returns can include any number of items associated with an original Mozu order. Each return must either be associated with an original order or a product definition to represent each returned item.
*/
class ReturnClient {

	/**
	* Retrieves a list of all returns according to any filter and sort criteria.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getReturnsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = ReturnUrl::getReturnsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of the actions available to perform for the specified return based on its current state.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return MozuClient
	*/
	public static function getAvailableReturnActionsClient($returnId)
	{
		$url = ReturnUrl::getAvailableReturnActionsUrl($returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a single return item.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param string $returnItemId Unique identifier of the return item whose details you want to get.
	* @return MozuClient
	*/
	public static function getReturnItemClient($returnId, $returnItemId, $responseFields =  null)
	{
		$url = ReturnUrl::getReturnItemUrl($responseFields, $returnId, $returnItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of all return items in an order.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return MozuClient
	*/
	public static function getReturnItemsClient($returnId, $responseFields =  null)
	{
		$url = ReturnUrl::getReturnItemsUrl($responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of the payment actions available to perform for the specified return when a return results in a refund to the customer.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return MozuClient
	*/
	public static function getAvailablePaymentActionsForReturnClient($returnId, $paymentId)
	{
		$url = ReturnUrl::getAvailablePaymentActionsForReturnUrl($paymentId, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a payment submitted as part of a refund associated with a customer return.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return MozuClient
	*/
	public static function getPaymentClient($returnId, $paymentId, $responseFields =  null)
	{
		$url = ReturnUrl::getPaymentUrl($paymentId, $responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of all payments submitted as part of a refund associated with a customer return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return MozuClient
	*/
	public static function getPaymentsClient($returnId, $responseFields =  null)
	{
		$url = ReturnUrl::getPaymentsUrl($responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of properties for the specified return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return MozuClient
	*/
	public static function getReturnClient($returnId, $responseFields =  null)
	{
		$url = ReturnUrl::getReturnUrl($responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a return for previously fulfilled items. Each return must either be associated with an original order or a product definition to represent each returned item.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Return $ret Properties of a return of one or more previously fulfilled items.
	* @return MozuClient
	*/
	public static function createReturnClient($ret, $responseFields =  null)
	{
		$url = ReturnUrl::createReturnUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($ret);
		return $mozuClient;

	}
	
	/**
	* Adds a return item to the return.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param ReturnItem $returnItem Properties of a previously fulfilled item associated with a return.
	* @return MozuClient
	*/
	public static function createReturnItemClient($returnItem, $returnId, $responseFields =  null)
	{
		$url = ReturnUrl::createReturnItemUrl($responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($returnItem);
		return $mozuClient;

	}
	
	/**
	* Updates a refund payment associated with a customer return by performing the specified action.
	*
	* @param string $paymentId Unique identifier of the payment for which to perform the action.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param PaymentAction $action Properties of the payment action performed for an order.
	* @return MozuClient
	*/
	public static function performPaymentActionForReturnClient($action, $returnId, $paymentId, $responseFields =  null)
	{
		$url = ReturnUrl::performPaymentActionForReturnUrl($paymentId, $responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($action);
		return $mozuClient;

	}
	
	/**
	* Creates a new payment for a return that results in a refund to the customer.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param PaymentAction $action Properties of the payment action performed for an order.
	* @return MozuClient
	*/
	public static function createPaymentActionForReturnClient($action, $returnId, $responseFields =  null)
	{
		$url = ReturnUrl::createPaymentActionForReturnUrl($responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($action);
		return $mozuClient;

	}
	
	/**
	* Updates the return by performing the action specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ReturnAction $action Properties of an action a user can perform for a return.
	* @return MozuClient
	*/
	public static function performReturnActionsClient($action, $responseFields =  null)
	{
		$url = ReturnUrl::performReturnActionsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($action);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a return for items previously shipped in a completed order.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param Return $ret Properties of a return of one or more previously fulfilled items.
	* @return MozuClient
	*/
	public static function updateReturnClient($ret, $returnId, $responseFields =  null)
	{
		$url = ReturnUrl::updateReturnUrl($responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($ret);
		return $mozuClient;

	}
	
	/**
	* commerce-returns Put ResendReturnEmail description DOCUMENT_HERE 
	*
	* @param ReturnAction $action Properties of an action a user can perform for a return.
	*/
	public static function resendReturnEmailClient($action)
	{
		$url = ReturnUrl::resendReturnEmailUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($action);
		return $mozuClient;

	}
	
	/**
	* Removes a particular order item from the order of the current shopper.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param string $returnItemId Unique identifier of the return item whose details you want to get.
	* @return MozuClient
	*/
	public static function deleteOrderItemClient($returnId, $returnItemId)
	{
		$url = ReturnUrl::deleteOrderItemUrl($returnId, $returnItemId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Deletes the return specified in the request.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	*/
	public static function deleteReturnClient($returnId)
	{
		$url = ReturnUrl::deleteReturnUrl($returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

