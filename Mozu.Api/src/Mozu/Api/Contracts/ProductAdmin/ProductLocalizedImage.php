<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	The localized product image in the language specified by the LocaleCode.
*/
class ProductLocalizedImage
{
	/**
	*Descriptive text associated with the image or video that appears on the storefront.
	*/
	public $AltText;
	public function getAltText() {
		return $this->AltText;
	}
	
	public function setAltText($altText) {
		$this->AltText = $altText;
		return $this;
	}

	/**
	*Identifier of the localized product image.
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
	*Image title that appears on the storefront set to the language specified by the site's LocaleCode.
	*/
	public $ImageLabel;
	public function getImageLabel() {
		return $this->ImageLabel;
	}
	
	public function setImageLabel($imageLabel) {
		$this->ImageLabel = $imageLabel;
		return $this;
	}

	/**
	*Directory path where the physical product image is stored.
	*/
	public $ImagePath;
	public function getImagePath() {
		return $this->ImagePath;
	}
	
	public function setImagePath($imagePath) {
		$this->ImagePath = $imagePath;
		return $this;
	}

	/**
	*URL of the image.
	*/
	public $ImageUrl;
	public function getImageUrl() {
		return $this->ImageUrl;
	}
	
	public function setImageUrl($imageUrl) {
		$this->ImageUrl = $imageUrl;
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

		public $Sequence;
	public function getSequence() {
		return $this->Sequence;
	}
	
	public function setSequence($sequence) {
		$this->Sequence = $sequence;
		return $this;
	}

	/**
	*The physical link or URL of the product video. The physical path name is set in the language specified by the LocaleCode.
	*/
	public $VideoUrl;
	public function getVideoUrl() {
		return $this->VideoUrl;
	}
	
	public function setVideoUrl($videoUrl) {
		$this->VideoUrl = $videoUrl;
		return $this;
	}

}

?>
