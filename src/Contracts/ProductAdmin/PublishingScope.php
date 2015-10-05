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
*	Describes the scope of the product publishing update, which can include individual product codes or all pending changes.
*/
class PublishingScope
{
	/**
	*If true, publish or discard all pending product changes in the master catalog.
	*/
	public $allPending;

	/**
	*List of product codes of associated products, used for pending product changes to publish or delete and returned in a product inventory location query.
	*/
	public $productCodes;

	/**
	*The Publish Set to publish
	*/
	public $publishSetCode;

}

?>
