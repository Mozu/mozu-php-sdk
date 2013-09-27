<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Carts;



/**
*	Collection of messages logged or created each time the cart was modifed.
*/
class CartChangeMessageCollection
{
	/**
	*The number of commerce runtime cart change messages transactions that can exist in a collection.
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
	*The number of messages in the collection.
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
	*Container for an item in a collection.
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
