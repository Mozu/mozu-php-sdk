<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\SiteSettings\Shipping;



/**
*	Properties of the handling fee to apply to order shipments for the site.
*/
class SiteShippingHandlingFee
{
	/**
	*The amount of the order handling fee.
	*/
	public $Amount;
	public function getAmount() {
		return $this->Amount;
	}
	
	public function setAmount($amount) {
		$this->Amount = $amount;
		return $this;
	}

}

?>
