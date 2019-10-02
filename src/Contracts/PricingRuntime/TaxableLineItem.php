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
		public $discountedTotal;

		public $discountTotal;

		public $feeTotal;

		public $handlingAmount;

		public $id;

		public $isTaxable;

		public $lineItemPrice;

		public $productCode;

	/**
	*The name of the product that represents a line item in a taxable order.
	*/
	public $productName;

		public $quantity;

	/**
	*The reason the item is either taxed or returned.
	*/
	public $reason;

		public $shippingAmount;

		public $variantProductCode;

		public $data;

		public $destinationAddress;

		public $originAddress;

		public $productDiscount;

		public $productDiscounts;

		public $productProperties;

		public $shippingDiscount;

		public $shippingDiscounts;

}

?>