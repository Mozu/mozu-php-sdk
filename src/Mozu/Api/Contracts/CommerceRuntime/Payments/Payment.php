<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Payments;



/**
*	Properties of a payment transaction submitted for an order.
*/
class Payment
{
	/**
	*The total monetary amount collected in this payment transaction for the order.
	*/
	public $amountCollected;

	/**
	*If the payment transaction is a shopper store credit, the total monetary amount credited in this payment transaction for the order.
	*/
	public $amountCredited;

	/**
	*The total amount originally requested for this payment.
	*/
	public $amountRequested;

	/**
	*The actions a user can perform for a payment at this time.
	*/
	public $availableActions;

	/**
	*Unique identifier of the payment transaction.
	*/
	public $id;

	/**
	*If true, the payment transaction occurs at regular intervals such as a monthly billing cycle or a digital or physical subscription.
	*/
	public $isRecurring;

	/**
	*Unique identifier of the order associated with the payment.
	*/
	public $orderId;

	/**
	*The transaction ID supplied by the payment service to associate with this order payment.
	*/
	public $paymentServiceTransactionId;

	/**
	*The type of payment transaction performed, such as check, credit card, or PayPal Express. Additional payment types will be supported in future releases.
	*/
	public $paymentType;

	/**
	*Current status of the payment transaction for the order.
	*/
	public $status;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Properties of the customer billing information associated with this payment.
	*/
	public $billingInfo;

	/**
	*List of change messages associated with the payment.
	*/
	public $changeMessages;

	/**
	*Container for the interactions associated with the payment, which includes details for each action performed for the payment.
	*/
	public $interactions;

}

?>
