<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	For a product with shopper-configurable options, the properties of the product options selected by the shopper.
*/
class ProductOptionSelections
{
	/**
	*Product code that represents the product variation selected based on the option values the shopper entered.
	*/
	public $VariationProductCode;
	public function getVariationProductCode() {
		return $this->VariationProductCode;
	}
	
	public function setVariationProductCode($variationProductCode) {
		$this->VariationProductCode = $variationProductCode;
		return $this;
	}

	/**
	*List of product options and values currently selected.
	*/
	public $Options;
	public function getOptions() {
		return $this->Options;
	}
	
	public function setOptions($options) {
		$this->Options = $options;
		return $this;
	}

}

?>
