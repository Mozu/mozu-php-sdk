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
*	The localized product content in the language specified by the LocaleCode.
*/
class ProductLocalizedContent
{
	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $LocaleCode;
	public function getLocaleCode() {
		return $this->LocaleCode;
	}
	
	public function setLocaleCode($localeCode) {
		$this->LocaleCode = $localeCode;
		return $this;
	}

	/**
	*More detailed or full product description typically used for a product details page.
	*/
	public $ProductFullDescription;
	public function getProductFullDescription() {
		return $this->ProductFullDescription;
	}
	
	public function setProductFullDescription($productFullDescription) {
		$this->ProductFullDescription = $productFullDescription;
		return $this;
	}

	/**
	*The descriptive brief product name.
	*/
	public $ProductName;
	public function getProductName() {
		return $this->ProductName;
	}
	
	public function setProductName($productName) {
		$this->ProductName = $productName;
		return $this;
	}

	/**
	*Brief description of the product typically used when the product is displayed in a list or in search results.
	*/
	public $ProductShortDescription;
	public function getProductShortDescription() {
		return $this->ProductShortDescription;
	}
	
	public function setProductShortDescription($productShortDescription) {
		$this->ProductShortDescription = $productShortDescription;
		return $this;
	}

	/**
	*List of product images associated with a product.
	*/
	public $ProductImages;
	public function getProductImages() {
		return $this->ProductImages;
	}
	
	public function setProductImages($productImages) {
		$this->ProductImages = $productImages;
		return $this;
	}

}

?>
