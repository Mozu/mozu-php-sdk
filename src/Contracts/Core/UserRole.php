<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core;



/**
*	Properties of a role assigned to a user for a defined scope.
*/
class UserRole
{
	/**
	*Unique identifier of the user role.
	*/
	public $roleId;

	/**
	*The name of the user role, such as "developer" or "administrator".
	*/
	public $roleName;

	/**
	*Unique identifier of the customer account (shopper or system user). System-supplied and read-only. If the shopper user is anonymous, the user ID represents a system-generated user ID string.
	*/
	public $userId;

	/**
	*Properties of the developer account or  tenant associated with the user role.
	*/
	public $assignedInScope;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>
