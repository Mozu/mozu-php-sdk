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
*	Properties of a site associated with a tenant.
*/
class Site
{
	/**
	*The unique identifier of the catalog of products used by a site.
	*/
	public $catalogId;

		public $countryCode;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*The domain associated with the site.
	*/
	public $domain;

		public $id;

	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

	/**
	*The name of the site.
	*/
	public $name;

	/**
	*The primary custom domain of the site.
	*/
	public $primaryCustomDomain;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

}

?>
