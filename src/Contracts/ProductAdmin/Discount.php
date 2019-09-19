<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Discount used to calculate SalePrice. Includes coupon code if applicable, amount of the discount, and discount savings. Discounts can be either an absolute price or a percentage off. The sale price beats any discounts.
*/
class Discount
{
		public $amount;

		public $amountType;

		public $canBeDeleted;

		public $canBeStackedUpon;

		public $currentRedemptionCount;

		public $doesNotApplyToMultiShipToOrders;

		public $doesNotApplyToProductsWithSalePrice;

	/**
	*If true, this discount does not apply to a line item product with a defined sale price. The default is false, which applies the discount to products with and without defined sale prices.
	*/
	public $doesNotApplyToSalePrice;

		public $hasPurchaseConditions;

		public $id;

		public $includedPriceLists;

		public $isBxGx;

		public $maximumDiscountImpactPerOrder;

		public $maximumDiscountImpactPerRedemption;

		public $maximumRedemptionsPerOrder;

	/**
	*The maximum number of times an individual shopper can redeem the discount.
	*/
	public $maximumUsesPerUser;

		public $preventLineItemShippingDiscounts;

		public $preventOrderProductDiscounts;

		public $preventOrderShippingDiscounts;

		public $purchaseRequirementType;

		public $scope;

		public $stackingLayer;

		public $status;

		public $auditInfo;

	/**
	*List of conditions that must be met for the discount to apply.
	*/
	public $conditions;

		public $content;

		public $target;

		public $thresholdMessage;

}

?>
