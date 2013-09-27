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
*	The actual vocabulary value of the attribute that exists as a part of the product type.
*/
class AttributeVocabularyValueInProductType
{
	/**
	*Sequence of the attribute value within the product type.
	*/
	public $Order;
	public function getOrder() {
		return $this->Order;
	}
	
	public function setOrder($order) {
		$this->Order = $order;
		return $this;
	}

	/**
	*The vocabulary value of an attribute defined for a product type.
	*/
	public $Value;
	public function getValue() {
		return $this->Value;
	}
	
	public function setValue($value) {
		$this->Value = $value;
		return $this;
	}

	/**
	*Navigates vocabulary value details for an attribute defined for a product type.
	*/
	public $VocabularyValueDetail;
	public function getVocabularyValueDetail() {
		return $this->VocabularyValueDetail;
	}
	
	public function setVocabularyValueDetail($vocabularyValueDetail) {
		$this->VocabularyValueDetail = $vocabularyValueDetail;
		return $this;
	}

}

?>
