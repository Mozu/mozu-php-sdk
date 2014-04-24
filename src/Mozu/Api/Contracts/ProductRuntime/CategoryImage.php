<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	Properties of an image or other media file associated with a product category.
*/
class CategoryImage
{
	/**
	*Descriptive text associated with the image or video that appears on the web storefront.
	*/
	public $altText;

		public $cmsId;

	/**
	*Image title that appears on the web storefront, set to the language specified by the site's LocaleCode.
	*/
	public $imageLabel;

	/**
	*URL of the product category image.
	*/
	public $imageUrl;

	/**
	*Type of media specification required to successfully render the image, video, or other category content.
	*/
	public $mediaType;

	/**
	*Integer that represents the sequential order of the category image in the collection.
	*/
	public $sequence;

	/**
	*The link or URL of the product category video. The file path name is set in the language specified by the LocaleCode.
	*/
	public $videoUrl;

}

?>
