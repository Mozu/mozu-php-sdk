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
		public $availableActions;

	/**
	*The specific code that represents pickup.
	*/
	public $code;

		public $fulfillmentDate;

	/**
	*The location code that represents the location where the shopper will fulfill this pickup.
	*/
	public $fulfillmentLocationCode;

		public $id;

		public $status;

		public $auditInfo;

	/**
	*List of change messages associated with the pickup.
	*/
	public $changeMessages;

		public $items;

}

?>
