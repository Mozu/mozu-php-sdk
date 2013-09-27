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
*	The container for a non-paged list of related site-specific product category properties.
*/
class CategoryCollection
{
	/**
	*The number of results listed in the query collection, represented by a signed 64-bit (8-byte) integer. This value is system-supplied and read-only.
	*/
	public $TotalCount;
	public function getTotalCount() {
		return $this->TotalCount;
	}
	
	public function setTotalCount($totalCount) {
		$this->TotalCount = $totalCount;
		return $this;
	}

	/**
	*An array list of objects in the returned collection.
	*/
	public $Items;
	public function getItems() {
		return $this->Items;
	}
	
	public function setItems($items) {
		$this->Items = $items;
		return $this;
	}

}

?>
