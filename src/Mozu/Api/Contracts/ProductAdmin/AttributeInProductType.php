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
*	Properties of an attribute definition associated with a specific product type. When an attribute is applied to a product type, each product of that type maintains the same set of attributes.
*/
class AttributeInProductType
{
	/**
	*The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public $attributeFQN;

	/**
	*If true, this property is hidden on the storefront. If false, this property is not hidden from the storefront.
	*/
	public $isHiddenProperty;

	/**
	*If true, this entity is inherited from the base type. If false, this entity is not inherited from the base type.
	*/
	public $isInheritedFromBaseType;

	/**
	*If true, this attribute has more than one possible value.
	*/
	public $isMultiValueProperty;

	/**
	*If true, the entity is required by the admin. If false, the entity is not required by the admin.
	*/
	public $isRequiredByAdmin;

	/**
	*The sequence of this attribute within its product type.
	*/
	public $order;

	/**
	*The wrapper for the properties of the product attribute to set up or generate from the system in the product admin. Properties include namespace, attribute code, attribute sequence, site group ID, input type, value type, data type, boolean flags, and metadata key value pairs.
	*/
	public $attributeDetail;

		public $displayInfo;

	/**
	*The list of vocabulary values available for the attribute associated with the product type.
	*/
	public $vocabularyValues;

}

?>
