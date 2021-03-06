<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	Properties of the product option to create such as attribute detail, fully qualified name, and list of product option values.
*/
class ProductOption
{
	/**
	*The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public $attributeFQN;

	/**
	*Indicates if the object has or can have multiple properties or values. If true, the object can have more than one value, selectable by shoppers through the storefront or configurable through the catalogs. 
	*/
	public $isMultiValue;

	/**
	*Indicates if the property, attribute, product option, or product extra is required. If true, the object must have a defined value.
	*/
	public $isRequired;

	/**
	*The product attribute details common between all attribute types - properties, options, and extras.
	*/
	public $attributeDetail;

	/**
	*List of value data for objects.
	*/
	public $values;

}

?>
