<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core\Extensible;



/**
*	Properties of an attribute used to describe customers or orders.
*/
class Attribute
{
		public $adminName;

		public $attributeCode;

		public $attributeFQN;

		public $dataType;

	/**
	*Whether the customer or order attribute appears in Mozu Admin only, or in both Mozu Admin and the website storefront. Possible values are Admin and AdminAndStorefront.
	*/
	public $displayGroup;

		public $id;

		public $inputType;

		public $isActive;

	/**
	*If true, the attribute can have more than one value.
	*/
	public $isMultiValued;

		public $isReadOnly;

	/**
	*If true, the attribute must have a defined value.
	*/
	public $isRequired;

	/**
	*If true, the attribute is visible in its defined display group.
	*/
	public $isVisible;

		public $namespace;

	/**
	*Integer that represents the sequence of the attribute.
	*/
	public $order;

	/**
	*An attribute value type is either predefined vocabulary by the admin during attribute set up or it can be "AdminEntered" or "ShopperEntered". The difference between predefined values versus manually entered values is such that the first choice is a set of options to choose from. AdminEntered and ShopperEntered are values that are entered rather than system-supplied and are not stored in the database, but captured during a live commerce operations such as during an order.
	*/
	public $valueType;

		public $attributeMetadata;

		public $auditInfo;

		public $content;

		public $validation;

		public $vocabularyValues;

}

?>
