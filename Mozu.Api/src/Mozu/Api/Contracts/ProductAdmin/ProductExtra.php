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
*	Properties of the product extra to create such as the attribute detail, fully qualified name, and list of product extra values. Setting up product extras in Product Admin allows for shopper-entered information such as th initials on a monogram.
*/
class ProductExtra
{
	/**
	*"The fully qualified name of the attribute, which is a user defined attribute identifier."
	*/
	public $attributeFQN;

	/**
	*If true, the property has several selections.
	*/
	public $isMultiSelect;

	/**
	*If true, the product extra is required for the request to return a valid response.
	*/
	public $isRequired;

	/**
	*The list of values that populate a product extra as set in the Admin for the Storefront.
	*/
	public $values;

}

?>
