<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Tenant;



/**
*	Properties of a master product catalog defined for a tenant. All catalogs and sites associated with a master catalog share product definitions.
*/
class MasterCatalog
{
		public $createDate;

	/**
	*The default three-letter ISO currency code associated with this master catalog. At this time, only "USD" is supported.
	*/
	public $defaultCurrencyCode;

	/**
	*The default locale code associated with this master catalog. At this time, only "en-US" is supported.
	*/
	public $defaultLocaleCode;

	/**
	*The date and time the master catalog was deleted.
	*/
	public $deleteDate;

		public $id;

	/**
	*If true, this master catalog and its associated catalogs have been deleted from the tenant.
	*/
	public $isDeleted;

	/**
	*User-defined name of the master catalog.
	*/
	public $name;

		public $status;

		public $tenantId;

		public $updateDate;

	/**
	*Collection of product catalogs that use product definitions from the master catalog.
	*/
	public $catalogs;

}

?>
