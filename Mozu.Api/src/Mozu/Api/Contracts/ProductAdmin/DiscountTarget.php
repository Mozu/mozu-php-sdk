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
*	Specifies what to discount such as the type of discount and which products, categories, or shipping methods are eligible for the discount. Discount types can include the percentage off, specific monetary amount, or free shipping. This parameter also specifies the minimum monetary amount that the order must meet for the discount to apply.
*/
class DiscountTarget
{
	/**
	*If true, the target discount applies to all products sold on the storefront. Applies only if the discount type is "Product".
	*/
	public $IncludeAllProducts;
	public function getIncludeAllProducts() {
		return $this->IncludeAllProducts;
	}
	
	public function setIncludeAllProducts($includeAllProducts) {
		$this->IncludeAllProducts = $includeAllProducts;
		return $this;
	}

		public $MinimumLifetimeValueAmount;
	public function getMinimumLifetimeValueAmount() {
		return $this->MinimumLifetimeValueAmount;
	}
	
	public function setMinimumLifetimeValueAmount($minimumLifetimeValueAmount) {
		$this->MinimumLifetimeValueAmount = $minimumLifetimeValueAmount;
		return $this;
	}

	/**
	*The minimum monetary value the order subtotal must meet in order to qualify for the discount.
	*/
	public $MinimumOrderAmount;
	public function getMinimumOrderAmount() {
		return $this->MinimumOrderAmount;
	}
	
	public function setMinimumOrderAmount($minimumOrderAmount) {
		$this->MinimumOrderAmount = $minimumOrderAmount;
		return $this;
	}

	/**
	*The type of target to which the discount applies, such as a product.
	*/
	public $Type;
	public function getType() {
		return $this->Type;
	}
	
	public function setType($type) {
		$this->Type = $type;
		return $this;
	}

	/**
	*The product categories to which the discount can apply.
	*/
	public $Categories;
	public function getCategories() {
		return $this->Categories;
	}
	
	public function setCategories($categories) {
		$this->Categories = $categories;
		return $this;
	}

		public $CustomerGroups;
	public function getCustomerGroups() {
		return $this->CustomerGroups;
	}
	
	public function setCustomerGroups($customerGroups) {
		$this->CustomerGroups = $customerGroups;
		return $this;
	}

		public $ExcludedCategories;
	public function getExcludedCategories() {
		return $this->ExcludedCategories;
	}
	
	public function setExcludedCategories($excludedCategories) {
		$this->ExcludedCategories = $excludedCategories;
		return $this;
	}

		public $ExcludedProducts;
	public function getExcludedProducts() {
		return $this->ExcludedProducts;
	}
	
	public function setExcludedProducts($excludedProducts) {
		$this->ExcludedProducts = $excludedProducts;
		return $this;
	}

	/**
	*The products to which the discount can apply.
	*/
	public $Products;
	public function getProducts() {
		return $this->Products;
	}
	
	public function setProducts($products) {
		$this->Products = $products;
		return $this;
	}

	/**
	*The list of shipping method parameters that describe a method including the code, localized content, and audit information.
	*/
	public $ShippingMethods;
	public function getShippingMethods() {
		return $this->ShippingMethods;
	}
	
	public function setShippingMethods($shippingMethods) {
		$this->ShippingMethods = $shippingMethods;
		return $this;
	}

}

?>
