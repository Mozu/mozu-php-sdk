<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Orders;



/**
*	Properties of a message returned by an order validation capability for the order specified in the request.
*/
class OrderValidationMessage
{
	/**
	*The text of the change message, such as "This product is no longer available." System-supplied and read-only.
	*/
	public $message;

	/**
	*The type of message returned by the order validation capability, such as "Fraud Score."
	*/
	public $messageType;

	/**
	*Unique identifier of the order item associated with a validation message, order, or return.
	*/
	public $orderItemId;

}

?>