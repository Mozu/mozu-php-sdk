<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Core\Extensible;



/**
*	A location is a system-defined identifier such as page or screen location that describes where in the application, such as a page, where the attribute definition renders.
*/
class Location
{
	/**
	*Unique identifier of the location.
	*/
	public $Id;
	public function getId() {
		return $this->Id;
	}
	
	public function setId($id) {
		$this->Id = $id;
		return $this;
	}

	/**
	*The name associated with the location.
	*/
	public $Name;
	public function getName() {
		return $this->Name;
	}
	
	public function setName($name) {
		$this->Name = $name;
		return $this;
	}

	/**
	*List of location assignments.
	*/
	public $Assignments;
	public function getAssignments() {
		return $this->Assignments;
	}
	
	public function setAssignments($assignments) {
		$this->Assignments = $assignments;
		return $this;
	}

	/**
	*The resource for which the attribute definition renders. Possible values are "Customer" and "Orders".
	*/
	public $Subsystem;
	public function getSubsystem() {
		return $this->Subsystem;
	}
	
	public function setSubsystem($subsystem) {
		$this->Subsystem = $subsystem;
		return $this;
	}

}

?>
