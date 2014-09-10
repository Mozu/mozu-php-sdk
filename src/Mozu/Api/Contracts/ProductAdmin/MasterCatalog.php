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
*	Properties of a master catalog associated with a tenant.
*/
class MasterCatalog
{
	/**
	*The unique identifier of the master catalog associated with the entity.
	*/
	public $id;

		public $isDeleted;

	/**
	*The name of the master catalog.
	*/
	public $name;

	/**
	*The mode this master catalog uses for product updates. Possible values are "Pending" which saves product updates as a draft until they are published, and "Live" which publishes all product updates immediately.
	*/
	public $productPublishingMode;

}

?>
