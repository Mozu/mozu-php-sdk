<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Properties of the attribute type rule.
*/
class AttributeTypeRule
{
	/**
	*The data type of the attribute. There are four valid data types: "Bool", "DateTime", "Number", "String"
	*/
	public $AttributeDataType;
	public function getAttributeDataType() {
		return $this->AttributeDataType;
	}
	
	public function setAttributeDataType($attributeDataType) {
		$this->AttributeDataType = $attributeDataType;
		return $this;
	}

	/**
	*An attribute's data type would be either "NotSpecified", "Textbox", "Textarea", "Date", "DateTime", "Dropdown", "Listbox", "Radio", "Currency", or "Checkbox" and will be a valid value defined in the type rules resource.
	*/
	public $AttributeInputType;
	public function getAttributeInputType() {
		return $this->AttributeInputType;
	}
	
	public function setAttributeInputType($attributeInputType) {
		$this->AttributeInputType = $attributeInputType;
		return $this;
	}

	/**
	*Describes how an attribute will be used. Valid types are "Extra", "Option", and "Property".
	*/
	public $AttributeUsageType;
	public function getAttributeUsageType() {
		return $this->AttributeUsageType;
	}
	
	public function setAttributeUsageType($attributeUsageType) {
		$this->AttributeUsageType = $attributeUsageType;
		return $this;
	}

	/**
	*An attribute value type is either predefined vocabulary by the admin during product attribute set up or it can be "AdminEntered" or "ShopperEntered". The difference between predefined values versus manually entered values is such that the first choice is a set of options to choose from. AdminEntered and ShopperEntered are values that are entered rather than system-supplied and are not stored in the database, but captured during a live commerce operations such as during an order.
	*/
	public $AttributeValueType;
	public function getAttributeValueType() {
		return $this->AttributeValueType;
	}
	
	public function setAttributeValueType($attributeValueType) {
		$this->AttributeValueType = $attributeValueType;
		return $this;
	}

}

?>
