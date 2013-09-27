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
*	The discount currently applied to the cart or order, represented as a negative currency amount to be subtracted from the final price. If multiple discounts are applied to the same order, the Applied Discount displays the most valuable discount for the shopper.
*/
class AppliedDiscount
{
	/**
	*Alphanumeric code associated with the coupon or promotion that results in a discounted price.
	*/
	public $CouponCode;
	public function getCouponCode() {
		return $this->CouponCode;
	}
	
	public function setCouponCode($couponCode) {
		$this->CouponCode = $couponCode;
		return $this;
	}

	/**
	*The value of the discount applied to the product, represented as a negative currency amount to apply to the original price.
	*/
	public $Impact;
	public function getImpact() {
		return $this->Impact;
	}
	
	public function setImpact($impact) {
		$this->Impact = $impact;
		return $this;
	}

	/**
	*Properties of the discount currently applied to the product.
	*/
	public $Discount;
	public function getDiscount() {
		return $this->Discount;
	}
	
	public function setDiscount($discount) {
		$this->Discount = $discount;
		return $this;
	}

}

?>
