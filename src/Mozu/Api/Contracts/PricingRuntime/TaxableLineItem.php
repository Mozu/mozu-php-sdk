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
*	Properties of a line item in an order that is subject to tax.
*/
class TaxableLineItem
{
	/**
	*The quantity of the line item in the order.
	*/
	public $quantity;

	/**
	*Unique identifier of the taxable line item.
	*/
	public $id;

	/**
	*If true, the line item in the order is subject to tax.
	*/
	public $isTaxable;

	/**
	*The sale price of the line item in the order.
	*/
	public $lineItemPrice;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

		public $productName;

		public $reason;

	/**
	*The amount of shipping calculated for a line item in an order.
	*/
	public $shippingAmount;

	/**
	*Properties of the product that represents the line item in the order.
	*/
	public $productProperties;

}

?>