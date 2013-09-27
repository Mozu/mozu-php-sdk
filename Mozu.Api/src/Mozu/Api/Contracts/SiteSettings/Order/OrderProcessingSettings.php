<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
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
	*Determines whether payment authorization occurs when the order is placed or when the order is shipped.
	*/
	public $PaymentProcessingFlowType;
	public function getPaymentProcessingFlowType() {
		return $this->PaymentProcessingFlowType;
	}
	
	public function setPaymentProcessingFlowType($paymentProcessingFlowType) {
		$this->PaymentProcessingFlowType = $paymentProcessingFlowType;
		return $this;
	}

	/**
	*If true, use the override price defined for products in the order to calculate discounts for the order.
	*/
	public $UseOverridePriceToCalculateDiscounts;
	public function getUseOverridePriceToCalculateDiscounts() {
		return $this->UseOverridePriceToCalculateDiscounts;
	}
	
	public function setUseOverridePriceToCalculateDiscounts($useOverridePriceToCalculateDiscounts) {
		$this->UseOverridePriceToCalculateDiscounts = $useOverridePriceToCalculateDiscounts;
		return $this;
	}

	/**
	*Identifier and datetime stamp information recorded when creating or updating a resource entity. This value is system-supplied and read-only.
	*/
	public $AuditInfo;
	public function getAuditInfo() {
		return $this->AuditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->AuditInfo = $auditInfo;
		return $this;
	}

}

?>
