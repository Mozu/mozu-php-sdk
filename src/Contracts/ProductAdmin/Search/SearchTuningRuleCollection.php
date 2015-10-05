<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin\Search;



/**
*	Mozu.ProductAdmin.Contracts.Search.SearchTuningRuleCollection ApiType DOCUMENT_HERE 
*/
class SearchTuningRuleCollection
{
	/**
	*The total number of pages of the results divided per the `pageSize`.
	*/
	public $pageCount;

	/**
	*The number of results to display on each page when creating paged results from a query. The amount is divided and displayed on the `pageCount `amount of pages. The default is 20 and maximum value is 200 per page.
	*/
	public $pageSize;

	/**
	*When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a `pageSize `of 25, to get the 51st through the 75th items, use `startIndex=3`.
	*/
	public $startIndex;

	/**
	*Total number of objects in am item collection. Total counts are calculated for numerous objects in Mozu, including location inventory, products, options, product types, product reservations, categories, addresses, carriers, tax rates, time zones, and much more.
	*/
	public $totalCount;

	/**
	*Collection list of items. All returned data is provided in an items array. For a failed request, the returned response may be success with an empty item collection. Items are used throughout APIs for carts, wish lists, documents, payments, returns, properties, and more.
	*/
	public $items;

}

?>
