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
*	Properties of a vocabulary value defined for an extensible attribute.
*/
class AttributeVocabularyValue
{
	/**
	*The numeric order of a vocabulary value defined for an extensible attribute.
	*/
	public $Sequence;
	public function getSequence() {
		return $this->Sequence;
	}
	
	public function setSequence($sequence) {
		$this->Sequence = $sequence;
		return $this;
	}

	/**
	*Possible value associated with a vocabulary value defined for an extensible attribute.
	*/
	public $Value;
	public function getValue() {
		return $this->Value;
	}
	
	public function setValue($value) {
		$this->Value = $value;
		return $this;
	}

	/**
	*List of content associated with a vocabulary value defined for an extensible attribute.
	*/
	public $Content;
	public function getContent() {
		return $this->Content;
	}
	
	public function setContent($content) {
		$this->Content = $content;
		return $this;
	}

}

?>
