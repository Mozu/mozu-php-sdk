<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Discounts;



/**
*	Properties of a discount defined for a product or order in a storefront.
*/
class Discount
{
	/**
	*The date and time at which the discount can no longer be applied to a product or order.
	*/
	public $expirationDate;

	/**
	*Unique identifier of the discount.
	*/
	public $id;

	/**
	*List of cart or order items to which the discount applies, if applicable.
	*/
	public $itemIds;

	/**
	*The name of the discount, in the language specified by the LocaleCode of the storefront.
	*/
	public $name;

}

?>
