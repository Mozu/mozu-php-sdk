<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Content;



class DocumentType
{
		public $description;
	public function getDescription() {
		return $this->description;
	}
	
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

		public $displayName;
	public function getDisplayName() {
		return $this->displayName;
	}
	
	public function setDisplayName($displayName) {
		$this->displayName = $displayName;
		return $this;
	}

		public $documentTypeScope;
	public function getDocumentTypeScope() {
		return $this->documentTypeScope;
	}
	
	public function setDocumentTypeScope($documentTypeScope) {
		$this->documentTypeScope = $documentTypeScope;
		return $this;
	}

		public $name;
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

		public $parentTypeName;
	public function getParentTypeName() {
		return $this->parentTypeName;
	}
	
	public function setParentTypeName($parentTypeName) {
		$this->parentTypeName = $parentTypeName;
		return $this;
	}

		public $localizedDescriptions;
	public function getLocalizedDescriptions() {
		return $this->localizedDescriptions;
	}
	
	public function setLocalizedDescriptions($localizedDescriptions) {
		$this->localizedDescriptions = $localizedDescriptions;
		return $this;
	}

		public $localizedDisplayNames;
	public function getLocalizedDisplayNames() {
		return $this->localizedDisplayNames;
	}
	
	public function setLocalizedDisplayNames($localizedDisplayNames) {
		$this->localizedDisplayNames = $localizedDisplayNames;
		return $this;
	}

		public $propertyTypes;
	public function getPropertyTypes() {
		return $this->propertyTypes;
	}
	
	public function setPropertyTypes($propertyTypes) {
		$this->propertyTypes = $propertyTypes;
		return $this;
	}

}

?>
