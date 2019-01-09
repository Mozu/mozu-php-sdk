<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ShippingRuntime;



/**
*	Properties of a shipping rate calculated for a specified carrier.
*/
class ShippingRate
{
	/**
	*The total calculated shipping amount requested for the package or shipment.
	*/
	public $amount;

	/**
	*The carrier-defined alphanumeric code associated with this shipping rate.
	*/
	public $code;

	/**
	*The number of days the shipment will spend between the origin address and the destination address.
	*/
	public $daysInTransit;

	/**
	*Localized content for a shipping rate based on the defined locale code.
	*/
	public $content;

	/**
	*Collection of carrier-specific key-value attribute pairs required to retrieve a shipping rate request.
	*/
	public $customAttributes;

	/**
	*Array list of success/failure messages associated with the shipping rate validation.
	*/
	public $messages;

	/**
	*Properties of a calculated shipping rate for individual line items in a shipment.
	*/
	public $shippingItemRates;

}

?>