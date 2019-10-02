<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Returns;



/**
*	Properties of a previously fulfilled item associated with a return.
*/
class ReturnItem
{
		public $excludeProductExtras;

	/**
	*Unique identifier of the return whose items you want to get.
	*/
	public $id;

		public $orderItemId;

		public $orderItemOptionAttributeFQN;

		public $orderLineId;

		public $productLossAmount;

		public $productLossTaxAmount;

		public $quantityReceived;

		public $quantityReplaced;

		public $quantityRestockable;

		public $quantityRestocked;

		public $quantityShipped;

		public $receiveStatus;

		public $refundAmount;

		public $refundStatus;

		public $replaceStatus;

		public $returnNotRequired;

		public $returnType;

		public $shipmentItemId;

		public $shipmentNumber;

		public $shippingLossAmount;

		public $shippingLossTaxAmount;

		public $totalWithoutWeightedShippingAndHandling;

		public $totalWithWeightedShippingAndHandling;

	/**
	*Properties of a collection of component products that make up a single returned product bundle with its own product code.
	*/
	public $bundledProducts;

		public $notes;

		public $product;

		public $reasons;

}

?>