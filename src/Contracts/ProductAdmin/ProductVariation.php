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
*	Properties of a specific product variation.
*/
class ProductVariation
{
		public $deltaWeight;

		public $fixedWeight;

	/**
	*Describes the types of fulfillment that are supported for this product variation. A variation can support direct ship, in-store pickup, or both. Supported fulfillment types are defined at the master catalog level. Client administrators cannot override the supported fulfillment types at the catalog level.
	*/
	public $fulfillmentTypesSupported;

		public $isActive;

		public $isOrphan;

	/**
	*The universal product code associated with the product variation. The UPC of a product is unique across all sales channels.
	*/
	public $upc;

		public $variationExists;

		public $variationkey;

		public $variationProductCode;

		public $deltaPrice;

		public $fixedPrice;

		public $localizedDeltaPrice;

		public $localizedFixedPrice;

		public $options;

	/**
	*Supplier-defined properties assigned for the product variation.
	*/
	public $supplierInfo;

}

?>
