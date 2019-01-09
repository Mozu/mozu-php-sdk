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
use Mozu\Api\Urls\Commerce\Orders\PaymentUrl;
use Mozu\Api\Headers;

use Mozu\Api\Contracts\CommerceRuntime\Payments\PaymentAction;
use Mozu\Api\Contracts\CommerceRuntime\Payments\PaymentCollection;
use Mozu\Api\Contracts\CommerceRuntime\Orders\Order;
use Mozu\Api\Contracts\CommerceRuntime\Payments\Payment;

/**
* Use the Payments subresource to manage payment transactions for orders. Each transaction performed for an order represents an individual payment. For example, if an order totals $75.00 but the shopper has a $50.00 gift certificate, both the gift certificate transaction and the credit card transaction for the remaining $25.00 are recorded as payments for the order.
*/
class PaymentClient {

	/**
	* Retrieves information about all payment transactions submitted for the specified order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getPaymentsClient($orderId, $responseFields =  null)
	{
		$url = PaymentUrl::getPaymentsUrl($orderId, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Retrieves the list of all available payment actions dependent on the order payment status by specifying the order ID.
	*
	* @param string $orderId Unique identifier of the order associated with the payment.
	* @param string $paymentId Unique identifer of the payment for which to retrieve available actions.
	* @return MozuClient
	*/
	public static function getAvailablePaymentActionsClient($orderId, $paymentId)
	{
		$url = PaymentUrl::getAvailablePaymentActionsUrl($orderId, $paymentId);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Retrieves information about a specific payment transaction submitted for the specified order.
	*
	* @param string $orderId Unique identifier of the order associated with the payment transaction.
	* @param string $paymentId Unique identifier of the payment transaction submitted for the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getPaymentClient($orderId, $paymentId, $responseFields =  null)
	{
		$url = PaymentUrl::getPaymentUrl($orderId, $paymentId, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Performs the specified action for an individual order payment transaction.
	*
	* @param string $orderId Unique identifier of the order associated with the payment.
	* @param string $paymentId Unique identifer of the payment for which to perform the action.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param PaymentAction $action The action to perform for the payment. Possible values are AuthAndCapture, AuthorizePayment, CapturePayment, VoidPayment, CreditPayment, RequestCheck, ApplyCheck, DeclineCheck.
	* @return MozuClient
	*/
	public static function performPaymentActionClient($action, $orderId, $paymentId, $responseFields =  null)
	{
		$url = PaymentUrl::performPaymentActionUrl($orderId, $paymentId, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($action);

	}
	
	/**
	* Creates a new payment transaction for the specified order and performs the specified action.
	*
	* @param string $orderId Unique identifier of the order for which to apply the payment.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param PaymentAction $action To action to perform for the newly created payment. Possible values are AuthAndCapture, AuthorizePayment, CapturePayment, VoidPayment, CreditPayment, RequestCheck, ApplyCheck, DeclineCheck.
	* @return MozuClient
	*/
	public static function createPaymentActionClient($action, $orderId, $responseFields =  null)
	{
		$url = PaymentUrl::createPaymentActionUrl($orderId, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($action);

	}
	
	
}

?>
