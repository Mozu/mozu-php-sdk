<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\AppDev;



/**
*	Properties of an attribute used to describe customers or orders.
*/
class Attribute
{
	/**
	*The administrator name associated with the object/data.
	*/
	public $adminName;

	/**
	*Mozu.AppDev.Contracts.Attribute applicationAttributeId ApiTypeMember DOCUMENT_HERE 
	*/
	public $applicationAttributeId;

	/**
	*Mozu.AppDev.Contracts.Attribute attributeId ApiTypeMember DOCUMENT_HERE 
	*/
	public $attributeId;

	/**
	*Mozu.AppDev.Contracts.Attribute code ApiTypeMember DOCUMENT_HERE 
	*/
	public $code;

	/**
	*Mozu.AppDev.Contracts.Attribute fqn ApiTypeMember DOCUMENT_HERE 
	*/
	public $fqn;

	/**
	*The type of input selection used to define a value for the attribute, including Yes/No, Date, DateTime, List, TextBox, or TextArea.
	*/
	public $inputType;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*The numeric order of objects, used by a vocabulary value defined for an extensible attribute, images, and categories.
	*/
	public $sequence;

	/**
	*Mozu.AppDev.Contracts.Attribute type ApiTypeMember DOCUMENT_HERE 
	*/
	public $type;

	/**
	*Mozu.AppDev.Contracts.Attribute vocabularyJson ApiTypeMember DOCUMENT_HERE 
	*/
	public $vocabularyJson;

	/**
	*List of valid vocabulary values defined for an attribute.
	*/
	public $vocabularyValues;

}

?>
