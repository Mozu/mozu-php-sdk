<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Commerce;



/**
*	Properties of a system message displayed when a change, such as a change in product price, occurs for a cart or order.
*/
class ChangeMessage
{
		public $amount;

	/**
	*Date and time when the entity was created. UTC Date/Time.
	*/
	public $createDate;

	/**
	*Unique identifier of the change message. System-supplied and read-only.
	*/
	public $id;

	/**
	*Identifier for the object associated with the change message, which can represent a cart, cart item, or an order.
	*/
	public $identifier;

	/**
	*The text of the change message, such as "This product is no longer available". System-supplied and read-only.
	*/
	public $message;

	/**
	*The new value of the object affected by the change, such as the new price of the product. System-supplied and read-only.
	*/
	public $newValue;

	/**
	*The prior value of the object affected by the change, such as the price of the product when it was added to the cart. System-supplied and read-only.
	*/
	public $oldValue;

	/**
	*The text that appears on the subject line of the message, such as "The product price has changed."
	*/
	public $subject;

	/**
	*Represents the type of object affected by the change, such as Cart Item or Product. System-supplied and read-only.
	*/
	public $subjectType;

		public $success;

		public $userId;

	/**
	*The action associated with this message. For example, if the price of a product changes, the verb could be "Increased" or "Decreased". If the product is no longer available, the verb could be "Invalidated". System-supplied and read-only.
	*/
	public $verb;

}

?>
