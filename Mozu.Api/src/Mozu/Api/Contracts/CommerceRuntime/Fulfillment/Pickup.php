<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Fulfillment;



/**
*	Properties of an in-store pickup defined to fulfill items in an order.
*/
class Pickup
{
	/**
	*Array list of actions that can be performed for the in-store pickup.
	*/
	public $availableActions;

	/**
	*The date and time the customer picked up the order items.
	*/
	public $fulfillmentDate;

		public $fulfillmentLocationCode;

	/**
	*Unique identifier of the in-store pickup.
	*/
	public $id;

	/**
	*The fulfillment status of the in-store pickup, which is "Fulfilled," "NotFulfilled," or "PartiallyFulfilled."
	*/
	public $status;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

		public $changeMessages;

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;

}

?>
