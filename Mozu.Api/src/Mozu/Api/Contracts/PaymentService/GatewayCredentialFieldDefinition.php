<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PaymentService;



class GatewayCredentialFieldDefinition
{
	/**
	****Always private and should not be published.*** Previous ApiRefId "Mozu.PaymentService.Contracts.GatewayCredentialFieldDefinition.AdminDisplayOrder"
	*/
	public $AdminDisplayOrder;
	public function getAdminDisplayOrder() {
		return $this->AdminDisplayOrder;
	}
	
	public function setAdminDisplayOrder($adminDisplayOrder) {
		$this->AdminDisplayOrder = $adminDisplayOrder;
		return $this;
	}

		public $DisplayName;
	public function getDisplayName() {
		return $this->DisplayName;
	}
	
	public function setDisplayName($displayName) {
		$this->DisplayName = $displayName;
		return $this;
	}

		public $Name;
	public function getName() {
		return $this->Name;
	}
	
	public function setName($name) {
		$this->Name = $name;
		return $this;
	}

		public $VolusionStoreName;
	public function getVolusionStoreName() {
		return $this->VolusionStoreName;
	}
	
	public function setVolusionStoreName($volusionStoreName) {
		$this->VolusionStoreName = $volusionStoreName;
		return $this;
	}

}

?>
