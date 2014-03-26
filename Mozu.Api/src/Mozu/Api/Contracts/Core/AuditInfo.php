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
*	Identifier and datetime stamp information recorded when creating or updating a resource entity. System-supplied and read-only.
*/
class AuditInfo
{
	/**
	*Unique identifier of the user created the resource entity. System-supplied and read-only.
	*/
	public $createBy;

	/**
	*Date and time when the entity was created. UTC Date/Time.
	*/
	public $createDate;

	/**
	*Unique identifier of the entity who updated the resource property most recently. System-supplied and read-only.
	*/
	public $updateBy;

	/**
	*Date and time when the entity was last updated. UTC Date/Time.
	*/
	public $updateDate;

}

?>
