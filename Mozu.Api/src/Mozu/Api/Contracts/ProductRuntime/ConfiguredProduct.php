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
*	Properties of a created product selection.
*/
class ConfiguredProduct
{
		public $fulfillmentTypesSupported;

		public $mfgPartNumber;

	/**
	*"Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	*/
	public $productCode;

		public $upc;

	/**
	*Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
	*/
	public $variationProductCode;

	/**
	*List of shipping discounts that can be applied to the configured product.
	*/
	public $availableShippingDiscounts;

		public $inventoryInfo;

	/**
	*Dimensions of the packaged product.
	*/
	public $measurements;

	/**
	*The list of options set up in product admin.
	*/
	public $options;

	/**
	*Price that the merchant intends to sell the product which is not necessarily the list price. This is the price the merchant intends to sell the product if no sale price is present.
	*/
	public $price;

	/**
	*For products with options that vary the cost of the product, the range between lowest and highest possible price of the product based on the current selection of options.
	*/
	public $priceRange;

	/**
	*The current state of the configured product determines whether or not the product is eligible for purchase. Products with options are only purchasable if the shopper has selected all required options. If the product is not ready for purchase, a message lists missing options that are required.
	*/
	public $purchasableState;

}

?>
