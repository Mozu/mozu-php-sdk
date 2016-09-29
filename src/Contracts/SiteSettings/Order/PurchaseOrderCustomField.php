<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\SiteSettings\Order;



/**
*	Mozu.SiteSettings.Order.Contracts.PurchaseOrderCustomField ApiType DOCUMENT_HERE 
*/
class PurchaseOrderCustomField
{
	/**
	*Unique code/name for memo field
	*/
	public $code;

	/**
	*Indicates if the object or process is enabled. This indicator is used on external payment workflows and product option values. For product options, if true, the product option value is available for a shopper to choose. During configuration, this property will be false if the option value is invalid with other selected options. For external payment workflows, if true, the workflow is enabled and available for routing payments for the submitted order.
	*/
	public $isEnabled;

	/**
	*Indicates if the property, attribute, product option, or product extra is required. If true, the object must have a defined value.
	*/
	public $isRequired;

	/**
	*Descriptive text used as a label for objects, such as field names, facets, date ranges, contact information, and package information.
	*/
	public $label;

	/**
	*Sequence Number
	*/
	public $sequenceNumber;

}

?>
