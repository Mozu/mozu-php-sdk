<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core;



/**
*	Identifier and datetime stamp information recorded when creating or updating a resource entity. This value is system-supplied and read-only.
*/
class AuditInfo
{
	/**
	*Unique identifier of the user created the resource entity. This value is system-supplied and read-only.
	*/
	public $CreateBy;
	public function getCreateBy() {
		return $this->CreateBy;
	}
	
	public function setCreateBy($createBy) {
		$this->CreateBy = $createBy;
		return $this;
	}

	/**
	*Date and time when the entity was created, represented in UTC Date/Time.
	*/
	public $CreateDate;
	public function getCreateDate() {
		return $this->CreateDate;
	}
	
	public function setCreateDate($createDate) {
		$this->CreateDate = $createDate;
		return $this;
	}

	/**
	*Unique identifier of the user who last modified the item. This value is system-supplied and read-only.
	*/
	public $UpdateBy;
	public function getUpdateBy() {
		return $this->UpdateBy;
	}
	
	public function setUpdateBy($updateBy) {
		$this->UpdateBy = $updateBy;
		return $this;
	}

	/**
	*Date and time when the entity was last updated, represented in UTC Date/Time.
	*/
	public $UpdateDate;
	public function getUpdateDate() {
		return $this->UpdateDate;
	}
	
	public function setUpdateDate($updateDate) {
		$this->UpdateDate = $updateDate;
		return $this;
	}

}

?>
