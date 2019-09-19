<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\SiteSettings\Order;



/**
*	Settings that determine how orders are processed and order payments are authorized for the site.
*/
class OrderProcessingSettings
{
	/**
	*Abandoned order threshold in minutes indicates the number of minutes until a pending order is considered abandoned.
	*/
	public $abandonedOrderThresholdInMinutes;

		public $giftCardProcessingType;

		public $paymentProcessingFlowType;

		public $useOverridePriceToCalculateDiscounts;

		public $auditInfo;

		public $thirdPartyPaymentSettings;

}

?>
