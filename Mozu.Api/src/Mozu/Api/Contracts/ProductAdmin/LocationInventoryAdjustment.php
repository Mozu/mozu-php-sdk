<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Properties of an adjustment to the active product inventory of a specific location.
*/
class LocationInventoryAdjustment
{
	/**
	*User-defined code that identifies the location.
	*/
	public $locationCode;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*The type of inventory adjustment to perform, which is "Absolute" or "Delta". If adjusting by an absolute value, enter the integer in the Value parameter. If adjusting by a delta value, enter the delta in the Value parameter.
	*/
	public $type;

	/**
	*Value of the location inventory adjustment, which is an absolute integer or delta. For example, to decrease the current inventory level by 2, set the Type parameter to "Delta" and the Value parameter to "-2". To adjust the inventory to a current level of 12, set the Type parameter to "Absolute" and the Value parameter to "12".
	*/
	public $value;

}

?>
