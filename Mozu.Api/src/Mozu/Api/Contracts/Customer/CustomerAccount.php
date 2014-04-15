<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer;



/**
*	Properties of the customer account.
*/
class CustomerAccount
{
	/**
	*If true, the customer prefers to receive marketing material such as newsletters or email offers.
	*/
	public $acceptsMarketing;

	/**
	*The legal or doing business as (DBA) or tradestyle name of the business or organization. The maximum character length is 200.
	*/
	public $companyOrOrganization;

		public $emailAddress;

		public $externalId;

		public $firstName;

	/**
	*Identifier of the entity.
	*/
	public $id;

		public $isAnonymous;

		public $lastName;

		public $localeCode;

	/**
	*If true, this customer account has tax exempt status.
	*/
	public $taxExempt;

	/**
	*The tax identification number associated with the customer account.
	*/
	public $taxId;

	/**
	*Unique identifier of the user associated with the customer account.
	*/
	public $userId;

		public $userName;

	/**
	*Collection of customer account attributes.
	*/
	public $attributes;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Properties of the commerce summary associated with a customer account, which includes details about the shopper's most recent order, wish lists, and total order value over time.
	*/
	public $commerceSummary;

	/**
	*Contact information, including the contact's name, address, phone numbers, email addresses, and company (if supplied). Also indicates whether this is a billing, shipping, or billing and shipping contact.
	*/
	public $contacts;

	/**
	*List of customer account notes.
	*/
	public $notes;

		public $segments;

}

?>
