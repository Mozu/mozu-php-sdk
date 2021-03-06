<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Location;



/**
*	Properties of a fulfillment contact for the shipping origin address associated with a location.
*/
class ShippingOriginContact
{
	/**
	*The legal or doing business as (DBA) or tradestyle name of the business or organization. The maximum character length is 200.
	*/
	public $companyOrOrganization;

	/**
	*The email address of the specified user or the email address associated with the specified entity.
	*/
	public $email;

	/**
	*The full first name of a customer or contact name.
	*/
	public $firstName;

	/**
	*The full last name or surname of a customer or contact name.
	*/
	public $lastNameOrSurname;

	/**
	*Character string of the middle name or initial for the customer.
	*/
	public $middleNameOrInitial;

	/**
	*Collection of phone numbers associated with the shipping origin contact.
	*/
	public $phoneNumber;

}

?>
