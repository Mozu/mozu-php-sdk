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
*	Properties of the payment settings used at order checkout time for the site.
*/
class PaymentSettings
{
	/**
	*Settings that provide for the ability to pay for an order by mail.
	*/
	public $PayByMail;
	public function getPayByMail() {
		return $this->PayByMail;
	}
	
	public function setPayByMail($payByMail) {
		$this->PayByMail = $payByMail;
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

	/**
	*List of name and account information for a payment gateway. Additional payment gateway providers will be supported in future releases.
	*/
	public $Gateways;
	public function getGateways() {
		return $this->Gateways;
	}
	
	public function setGateways($gateways) {
		$this->Gateways = $gateways;
		return $this;
	}

}

?>
