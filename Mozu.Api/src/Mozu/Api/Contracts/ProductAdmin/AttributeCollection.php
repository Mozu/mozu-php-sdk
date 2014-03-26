<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	Paged list of properties that are assigned to a product.
*/
class AttributeCollection
{
	/**
	*The number of pages returned based on the startIndex and pageSize supplied. Signed 64-bit (8-byte) integer. System-supplied and read-only.
	*/
	public $pageCount;

	/**
	*Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
	*/
	public $pageSize;

		public $startIndex;

	/**
	*The number of the resource entity items listed in the query collection. Signed 64-bit (8-byte) integer. System-supplied and read-only.
	*/
	public $totalCount;

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;

}

?>
