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
*	Properties of a resulting payment interaction that occurs when a payment action is performed.
*/
class PaymentInteraction
{
	/**
	*If applicable, the total monetary amount associated with this payment interaction.
	*/
	public $amount;

	/**
	*If applicable, the check number associated with the payment action or interaction.
	*/
	public $checkNumber;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*If required by the payment gateway, the authorization code of the transaction.
	*/
	public $gatewayAuthCode;

	/**
	*AVS (Address Verification Service) codes supplied by the payment gateway. The codes indicate partial to complete or failed matches against the billing address for the shopper against the financial institute data through the gateway.
	*/
	public $gatewayAVSCodes;

	/**
	*CVV2 (Card Verification Value) codes supplied by the payment gateway. The codes indicate a verified or failed match of the encrypted code entered against the financial institution data through the gateway.
	*/
	public $gatewayCVV2Codes;

	/**
	*Unique identifier of the payment interaction from the payment gateway.
	*/
	public $gatewayInteractionId;

	/**
	*Response code from the gateway associated with the payment interaction. For example, if the gateway returns "Not Authorized," an interaction for voiding the payment transaction would result.
	*/
	public $gatewayResponseCode;

	/**
	*Textual message returned by the payment gateway for the associated success or failure code.
	*/
	public $gatewayResponseText;

	/**
	*Unique identifier of the gateway transaction associated with the payment interaction.
	*/
	public $gatewayTransactionId;

	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*Date and time of a payment interaction, including handling and processing a payment and validating and completing a payment with a payment gateway.
	*/
	public $interactionDate;

	/**
	*The type of payment interaction. The payment can be Capture or CheckReceived. The value also includes customer payment interactions such as Website, Call, Store, or Unknown.
	*/
	public $interactionType;

	/**
	*If true, the payment interaction was manually defined s part of offline order processing.
	*/
	public $isManual;

	/**
	*Indicates if the product in a cart, order, or wish list is purchased on a recurring schedule. If true, the item can be purchased or fulfilled at regular intervals, such as a monthly billing cycle. For example, digital or physical product subscriptions are recurring cart items. This property is not used at this time and is reserved for future functionality.
	*/
	public $isRecurring;

	/**
	*User-entered notation content for an object, used to save information such as payment, return, account, and order notes.
	*/
	public $note;

	/**
	*Unique identifier of the order associated with the payment.
	*/
	public $orderId;

	/**
	*The status of the payment prior to the interaction being performed, which enables manual rollback of previous transactions.
	*/
	public $paymentEntryStatus;

	/**
	*Unique identifier of the payment associated with this transaction.
	*/
	public $paymentId;

	/**
	*Unique identifier of previous interaction that this payment interaction is modifying. For example, when refunding a payment, the crediting interaction would reference the capture interaction.
	*/
	public $paymentTransactionInteractionIdReference;

	/**
	*The current status of an object. This status is specific to the object including payment (New, Authorized, Captured, Declined, Failed, Voided, Credited, CheckRequested, or RolledBack), discount (Active, Scheduled, or Expired), returns (ReturnAuthorized), tenant, package (Fulfilled or NotFulfilled), application, master and product catalogs, orders (Pending, Submitted, Processing, Pending Review, Closed, or Canceled), and order validation results (Pass, Fail, Error, or Review).
	*/
	public $status;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

		public $gatewayResponseData;

}

?>
