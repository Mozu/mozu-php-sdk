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
*	Container for the facet source information, which includes the category, price, or attribute properties.
*/
class FacetSource
{
	/**
	*If true, the facet allows for values that consist of one or more ranges, such as 0-100, 100-200, and 200-300.
	*/
	public $allowsRangeQuery;

	/**
	*The data type associated with the attribute or category that generates the facet, such as bool or string.
	*/
	public $dataType;

	/**
	*Identifier of the facet source, which is attribute, category, or price. For attribute facets, the AttributeFQN.
	*/
	public $id;

	/**
	*System-supplied and read-only name of the associated facet source.
	*/
	public $name;

	/**
	*The source type for the facet, either "Attribute" or "Element". Category and price facets are elements.
	*/
	public $type;

}

?>
