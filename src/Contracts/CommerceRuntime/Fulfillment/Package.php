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
*	Properties of a physical package shipped for an order.
*/
class Package
{
		public $availableActions;

	/**
	*The code of the product to be fulfilled.
	*/
	public $code;

		public $fulfillmentDate;

	/**
	*The location code that represents the location from which this package will ship.
	*/
	public $fulfillmentLocationCode;

		public $hasLabel;

		public $id;

		public $packagingType;

		public $shipmentId;

		public $shippingMethodCode;

		public $shippingMethodName;

		public $status;

		public $trackingNumber;

		public $auditInfo;

	/**
	*List of change messages associated with the package.
	*/
	public $changeMessages;

		public $items;

		public $measurements;

}

?>
