<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Content;



/**
*	Collection of content property types.
*/
class PropertyTypeCollection
{
	/**
	*The number of pages returned based on the startIndex and pageSize values specified. This value is system-supplied and read-only.
	*/
	public $PageCount;
	public function getPageCount() {
		return $this->PageCount;
	}
	
	public function setPageCount($pageCount) {
		$this->PageCount = $pageCount;
		return $this;
	}

	/**
	*Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	*/
	public $PageSize;
	public function getPageSize() {
		return $this->PageSize;
	}
	
	public function setPageSize($pageSize) {
		$this->PageSize = $pageSize;
		return $this;
	}

	/**
	*Indicates the zero-based offset in the complete result set where the returned entities begin, when creating paged results from a query. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	*/
	public $StartIndex;
	public function getStartIndex() {
		return $this->StartIndex;
	}
	
	public function setStartIndex($startIndex) {
		$this->StartIndex = $startIndex;
		return $this;
	}

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
