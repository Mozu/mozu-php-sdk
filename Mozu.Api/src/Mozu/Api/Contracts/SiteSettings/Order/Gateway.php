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



class Gateway
{
		public $areGatewayCredentialFieldsSet;
	public function getAreGatewayCredentialFieldsSet() {
		return $this->areGatewayCredentialFieldsSet;
	}
	
	public function setAreGatewayCredentialFieldsSet($areGatewayCredentialFieldsSet) {
		$this->areGatewayCredentialFieldsSet = $areGatewayCredentialFieldsSet;
		return $this;
	}

		public $supportedCards;
	public function getSupportedCards() {
		return $this->supportedCards;
	}
	
	public function setSupportedCards($supportedCards) {
		$this->supportedCards = $supportedCards;
		return $this;
	}

		public $gatewayAccount;
	public function getGatewayAccount() {
		return $this->gatewayAccount;
	}
	
	public function setGatewayAccount($gatewayAccount) {
		$this->gatewayAccount = $gatewayAccount;
		return $this;
	}

		public $gatewayDefinition;
	public function getGatewayDefinition() {
		return $this->gatewayDefinition;
	}
	
	public function setGatewayDefinition($gatewayDefinition) {
		$this->gatewayDefinition = $gatewayDefinition;
		return $this;
	}

}

?>
