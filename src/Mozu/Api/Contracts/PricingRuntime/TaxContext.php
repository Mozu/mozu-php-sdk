<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PricingRuntime;



/**
*	The tax properties associated with the order.
*/
class TaxContext
{
	/**
	*Unique identifier of the customer.
	*/
	public $customerId;

	/**
	*Unique identifier of the tax context.
	*/
	public $taxContextId;

	/**
	*If the order is exempt from sales tax, the unique identifier of the tax exempt entity.
	*/
	public $taxExemptId;

	/**
	*The address to which the order ships.
	*/
	public $destinationAddress;

	/**
	*The address from which the order ships.
	*/
	public $originAddress;

}

?>
