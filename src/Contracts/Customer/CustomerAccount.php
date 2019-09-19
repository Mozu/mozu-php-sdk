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
		public $acceptsMarketing;

		public $accountType;

		public $companyOrOrganization;

		public $customerSet;

		public $customerSinceDate;

	/**
	*The email address associated with the customer account.
	*/
	public $emailAddress;

	/**
	*Unique identifier an external system uses to identify this customer account.
	*/
	public $externalId;

	/**
	*The first name associated with the customer account.
	*/
	public $firstName;

		public $hasExternalPassword;

		public $id;

		public $isActive;

	/**
	*If true, this customer account represents an anonymous shopper.
	*/
	public $isAnonymous;

		public $isLocked;

	/**
	*The last name associated with the customer account.
	*/
	public $lastName;

	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $localeCode;

		public $taxExempt;

		public $taxId;

		public $userId;

	/**
	*The user name of the user associated with the customer account.
	*/
	public $userName;

		public $attributes;

		public $auditInfo;

		public $commerceSummary;

		public $contacts;

		public $notes;

	/**
	*List of customer segments associated with the customer account. Customer accounts can be members of any number of segments.
	*/
	public $segments;

}

?>
