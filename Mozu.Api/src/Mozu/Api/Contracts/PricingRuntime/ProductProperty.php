<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PricingRuntime;



/**
*	Details of a property defined for a product.
*/
class ProductProperty
{
		public $AttributeFQN;
	public function getAttributeFQN() {
		return $this->AttributeFQN;
	}
	
	public function setAttributeFQN($attributeFQN) {
		$this->AttributeFQN = $attributeFQN;
		return $this;
	}

	/**
	*If true, this product property does not appear on the storefront.
	*/
	public $IsHidden;
	public function getIsHidden() {
		return $this->IsHidden;
	}
	
	public function setIsHidden($isHidden) {
		$this->IsHidden = $isHidden;
		return $this;
	}

	/**
	*If true, the product property has multiple values.
	*/
	public $IsMultiValue;
	public function getIsMultiValue() {
		return $this->IsMultiValue;
	}
	
	public function setIsMultiValue($isMultiValue) {
		$this->IsMultiValue = $isMultiValue;
		return $this;
	}

	/**
	*Details of a product attribute.
	*/
	public $AttributeDetail;
	public function getAttributeDetail() {
		return $this->AttributeDetail;
	}
	
	public function setAttributeDetail($attributeDetail) {
		$this->AttributeDetail = $attributeDetail;
		return $this;
	}

		public $Values;
	public function getValues() {
		return $this->Values;
	}
	
	public function setValues($values) {
		$this->Values = $values;
		return $this;
	}

}

?>
