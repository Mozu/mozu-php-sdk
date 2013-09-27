<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Shipping method service type, such as UPS Ground or USPS Priority Mail, targeted for a defined discount.
*/
class TargetedShippingMethod
{
	/**
	*The code associated with the carrier's shipping method service type. Service type codes include a prefix that indicates the carrier. For example: FEDEX_INTERNATIONAL_STANDARD
	*/
	public $Code;
	public function getCode() {
		return $this->Code;
	}
	
	public function setCode($code) {
		$this->Code = $code;
		return $this;
	}

	/**
	*Name of the shipping method service type associated with the targeted discount.
	*/
	public $Name;
	public function getName() {
		return $this->Name;
	}
	
	public function setName($name) {
		$this->Name = $name;
		return $this;
	}

}

?>
