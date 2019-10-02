<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	The price of the product in the specified currency code (USD). This price can either be the sale price or the price for which the merchant intends to sell the product.
*/
class ProductPrice
{
	/**
	*The list price of the product in the catalog.
	*/
	public $catalogListPrice;

	/**
	*The sale price defined for the product in the catalog.
	*/
	public $catalogSalePrice;

		public $creditValue;

		public $effectivePricelistCode;

	/**
	*The manufacturer's suggested retail price for the product.
	*/
	public $msrp;

		public $price;

		public $priceListEntryCode;

		public $priceListEntryMode;

	/**
	*The price type that displays on the storefront website for the Price field, which is List, MAP, or CatalogSalePrice
	*/
	public $priceType;

		public $salePrice;

	/**
	*The price type that displays on the storefront website for the Sale Price field, which is CatalogSalePrice, DiscountedList, or DiscountedCatalogSalePrice
	*/
	public $salePriceType;

		public $discount;

}

?>