<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ShippingRuntime;



class RateRequestItem
{
		public $ItemId;
	public function getItemId() {
		return $this->ItemId;
	}
	
	public function setItemId($itemId) {
		$this->ItemId = $itemId;
		return $this;
	}

		public $Quantity;
	public function getQuantity() {
		return $this->Quantity;
	}
	
	public function setQuantity($quantity) {
		$this->Quantity = $quantity;
		return $this;
	}

		public $ShipsByItself;
	public function getShipsByItself() {
		return $this->ShipsByItself;
	}
	
	public function setShipsByItself($shipsByItself) {
		$this->ShipsByItself = $shipsByItself;
		return $this;
	}

		public $UnitMeasurements;
	public function getUnitMeasurements() {
		return $this->UnitMeasurements;
	}
	
	public function setUnitMeasurements($unitMeasurements) {
		$this->UnitMeasurements = $unitMeasurements;
		return $this;
	}

}

?>
