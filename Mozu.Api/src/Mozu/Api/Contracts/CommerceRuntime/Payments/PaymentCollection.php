<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Payments;



/**
*	Collection of payment transactions associated with an order.
*/
class PaymentCollection
{
	/**
	*The maximum number of items that can appear in this collection.
	*/
	public $Capacity;
	public function getCapacity() {
		return $this->Capacity;
	}
	
	public function setCapacity($capacity) {
		$this->Capacity = $capacity;
		return $this;
	}

	/**
	*The number of results listed in the query collection, represented by a signed 64-bit (8-byte) integer. This value is system-supplied and read-only.
	*/
	public $Count;
	public function getCount() {
		return $this->Count;
	}
	
	public function setCount($count) {
		$this->Count = $count;
		return $this;
	}

	/**
	*An array list of objects in the returned collection.
	*/
	public $Item;
	public function getItem() {
		return $this->Item;
	}
	
	public function setItem($item) {
		$this->Item = $item;
		return $this;
	}

}

?>
