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
		public $amountCollected;

		public $amountCredited;

	/**
	*The total amount originally requested for this payment.
	*/
	public $amountRequested;

		public $availableActions;

		public $externalTransactionId;

		public $id;

		public $isRecurring;

		public $orderId;

		public $paymentServiceTransactionId;

		public $paymentType;

		public $paymentWorkflow;

		public $status;

		public $auditInfo;

		public $billingInfo;

	/**
	*List of change messages associated with the payment.
	*/
	public $changeMessages;

		public $data;

		public $groupId;

		public $interactions;

		public $subPayments;

}

?>