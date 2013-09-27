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
*	The attribute content localized based on the site's assigned locale code.
*/
class AttributeLocalizedContent
{
	/**
	*Localized content for the description of the attribute.
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
	*Localized content for the name of the attribute.
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
