<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Products;



/**
*	Properties of a product set up in admin and added as an item in a cart or order.
*/
class Product
{
	/**
	*Short description of the product in the language specified in the locale code for the storefront.
	*/
	public $Description;
	public function getDescription() {
		return $this->Description;
	}
	
	public function setDescription($description) {
		$this->Description = $description;
		return $this;
	}

	/**
	*The alternate image description defined for the product, in the language specified in the locale code for the storefront.
	*/
	public $ImageAlternateText;
	public function getImageAlternateText() {
		return $this->ImageAlternateText;
	}
	
	public function setImageAlternateText($imageAlternateText) {
		$this->ImageAlternateText = $imageAlternateText;
		return $this;
	}

	/**
	*The URL of the image file associated with a product on a storefront.
	*/
	public $ImagePath;
	public function getImagePath() {
		return $this->ImagePath;
	}
	
	public function setImagePath($imagePath) {
		$this->ImagePath = $imagePath;
		return $this;
	}

	/**
	*If true, the product can be purchased or fulfilled at regular intervals such as a monthly billing cycle or a digital or physical subscription.
	*/
	public $IsRecurring;
	public function getIsRecurring() {
		return $this->IsRecurring;
	}
	
	public function setIsRecurring($isRecurring) {
		$this->IsRecurring = $isRecurring;
		return $this;
	}

	/**
	*If true, the entity is subject to sales tax based on the relevant tax rate.
	*/
	public $IsTaxable;
	public function getIsTaxable() {
		return $this->IsTaxable;
	}
	
	public function setIsTaxable($isTaxable) {
		$this->IsTaxable = $isTaxable;
		return $this;
	}

	/**
	*The name of the product that appears on the storefront.
	*/
	public $Name;
	public function getName() {
		return $this->Name;
	}
	
	public function setName($name) {
		$this->Name = $name;
		return $this;
	}

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $ProductCode;
	public function getProductCode() {
		return $this->ProductCode;
	}
	
	public function setProductCode($productCode) {
		$this->ProductCode = $productCode;
		return $this;
	}

	/**
	*The product type template associated with the product on the storefront.
	*/
	public $ProductType;
	public function getProductType() {
		return $this->ProductType;
	}
	
	public function setProductType($productType) {
		$this->ProductType = $productType;
		return $this;
	}

	/**
	*If true, the product cannot be shipped in combination with other products.
	*/
	public $ShipsByItself;
	public function getShipsByItself() {
		return $this->ShipsByItself;
	}
	
	public function setShipsByItself($shipsByItself) {
		$this->ShipsByItself = $shipsByItself;
		return $this;
	}

	/**
	*Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
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
	*The list of all categories associated with the product.
	*/
	public $Categories;
	public function getCategories() {
		return $this->Categories;
	}
	
	public function setCategories($categories) {
		$this->Categories = $categories;
		return $this;
	}

	/**
	*Dimensions of the packaged product.
	*/
	public $Measurements;
	public function getMeasurements() {
		return $this->Measurements;
	}
	
	public function setMeasurements($measurements) {
		$this->Measurements = $measurements;
		return $this;
	}

	/**
	*The list of option attributes configured for the product.
	*/
	public $Options;
	public function getOptions() {
		return $this->Options;
	}
	
	public function setOptions($options) {
		$this->Options = $options;
		return $this;
	}

	/**
	*The price of the product that appears on the storefront including any applied discounts.
	*/
	public $Price;
	public function getPrice() {
		return $this->Price;
	}
	
	public function setPrice($price) {
		$this->Price = $price;
		return $this;
	}

		public $Properties;
	public function getProperties() {
		return $this->Properties;
	}
	
	public function setProperties($properties) {
		$this->Properties = $properties;
		return $this;
	}

	/**
	*The number of products accounted for in inventory that are available for purchase.
	*/
	public $Stock;
	public function getStock() {
		return $this->Stock;
	}
	
	public function setStock($stock) {
		$this->Stock = $stock;
		return $this;
	}

}

?>
