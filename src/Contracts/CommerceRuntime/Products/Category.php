<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Products;



/**
*	The category associated with assigned products. Products, product bundles, and options can be classified to multiple categories. 
*/
class Category
{
	/**
	*Unique identifier of the source product property. For a product field it will be the name of the field. For a product attribute it will be the Attribute FQN. 
	*/
	public $id;

	/**
	*If applicable, the parent category in the category tree. This can be associated to a product as the parent category.
	*/
	public $parent;

}

?>