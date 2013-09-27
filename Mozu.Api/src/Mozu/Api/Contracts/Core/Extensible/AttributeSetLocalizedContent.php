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
*	The property type of the attribute set content. Includes description, locale code, and name.
*/
class AttributeSetLocalizedContent
{
	/**
	*Description of the attribute set, in the language specified by the locale code.
	*/
	public $Description;
	public function getDescription() {
		return $this->Description;
	}
	
	public function setDescription($description) {
		$this->Description = $description;
		return $this;
	}

	/**
	*Language used for the entity. Currently, only "en-US" is supported.
	*/
	public $LocaleCode;
	public function getLocaleCode() {
		return $this->LocaleCode;
	}
	
	public function setLocaleCode($localeCode) {
		$this->LocaleCode = $localeCode;
		return $this;
	}

	/**
	*Name of the attribute set, in the language specified by the locale code.
	*/
	public $Name;
	public function getName() {
		return $this->Name;
	}
	
	public function setName($name) {
		$this->Name = $name;
		return $this;
	}

}

?>
