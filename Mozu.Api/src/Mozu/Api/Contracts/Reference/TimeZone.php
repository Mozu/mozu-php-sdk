<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Reference;



class TimeZone
{
		public $id;
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

		public $isDaylightSavingsTime;
	public function getIsDaylightSavingsTime() {
		return $this->isDaylightSavingsTime;
	}
	
	public function setIsDaylightSavingsTime($isDaylightSavingsTime) {
		$this->isDaylightSavingsTime = $isDaylightSavingsTime;
		return $this;
	}

		public $offset;
	public function getOffset() {
		return $this->offset;
	}
	
	public function setOffset($offset) {
		$this->offset = $offset;
		return $this;
	}

}

?>
