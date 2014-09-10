<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Fulfillment;



/**
*	Lets you manage an order's digital packages, by applying a digital package to the order.
*/
class DigitalPackage
{
	/**
	*Available actions are actions that you can take on this fulfillment unit.
	*/
	public $availableActions;

	/**
	*The digital package code is a human-readable identifier for this digital fulfillment unit. If not set on create, it is autogenerated as a string in the form {fulfillmentUnitType} #{next available int}.
	*/
	public $code;

	/**
	*The digital fulfillment date is the date of the pickup.
	*/
	public $fulfillmentDate;

	/**
	*The digital package location code is for the location from which to obtain this item.
	*/
	public $fulfillmentLocationCode;

	/**
	*The digital package ID is the ID of the fulfillment unit.
	*/
	public $id;

	/**
	*This is the status of the fulfillment unit.
	*/
	public $status;

	/**
	*Audit info contains the basic audit information about the digital item.
	*/
	public $auditInfo;

	/**
	*Change messages handle message related to changes with the fulfillment unit.
	*/
	public $changeMessages;

	/**
	*The digital package list is a list of items in the fulfillment unit.
	*/
	public $items;

}

?>