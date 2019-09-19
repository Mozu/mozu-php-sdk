<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\SiteSettings\Application;



/**
*	Properties of a capability application installed in a tenant.
*/
class Capability
{
	/**
	*Array list of credit types active for the capability.
	*/
	public $activeCreditTypes;

	/**
	*Array list of the countries for which this capability can actively shop.
	*/
	public $activeShoppingCountries;

	/**
	*The enablement mode of the capability.
	*/
	public $capabilityMode;

	/**
	*The capability type installed in the tenant.
	*/
	public $capabilityType;

	/**
	*If true, the capability is enabled in the installed tenant.
	*/
	public $enabled;

	/**
	*Unique identifier of the capability.
	*/
	public $id;

	/**
	*If true, the application is initialized with the defined settings.
	*/
	public $initialized;

	/**
	*Unique identifier of the developer account or tenant associated for which the capability is entitled.
	*/
	public $scopeId;

	/**
	*The type of scope for which the tenant is entitled, which is developer or tenant.
	*/
	public $scopeType;

	/**
	*Array list of the countries to which this capability can actively ship.
	*/
	public $activeShippingCountries;

	/**
	*Array list of URL endpoints for the operations associated with this capability.
	*/
	public $operationUrls;

	/**
	*Array list of credit types this capability supports.
	*/
	public $supportedCreditTypes;

	/**
	*Array list of countries this capability supports for shipping.
	*/
	public $supportedShippingCountries;

	/**
	*Array list of countries this capability supports for shopping.
	*/
	public $supportedShoppingCountries;

}

?>
