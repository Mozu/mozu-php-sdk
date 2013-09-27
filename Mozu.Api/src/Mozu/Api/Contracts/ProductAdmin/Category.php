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
*	A descriptive container in a storefront hierarchy to organize collections of products. Only available at the site-level when multiple sites and site groups exist.
*/
class Category
{
	/**
	*The number of children (subcategories, for example) that stem from a parent (top-level category).
	*/
	public $ChildCount;
	public function getChildCount() {
		return $this->ChildCount;
	}
	
	public function setChildCount($childCount) {
		$this->ChildCount = $childCount;
		return $this;
	}

	/**
	*Identifier of the entity.
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
	*If true, the admin product category is displayed in the store. If true, the category is not displayed.
	*/
	public $IsDisplayed;
	public function getIsDisplayed() {
		return $this->IsDisplayed;
	}
	
	public function setIsDisplayed($isDisplayed) {
		$this->IsDisplayed = $isDisplayed;
		return $this;
	}

	/**
	*Identifier of the parent or top-level category.
	*/
	public $ParentCategoryId;
	public function getParentCategoryId() {
		return $this->ParentCategoryId;
	}
	
	public function setParentCategoryId($parentCategoryId) {
		$this->ParentCategoryId = $parentCategoryId;
		return $this;
	}

	/**
	*The number of products in a list.
	*/
	public $ProductCount;
	public function getProductCount() {
		return $this->ProductCount;
	}
	
	public function setProductCount($productCount) {
		$this->ProductCount = $productCount;
		return $this;
	}

	/**
	*The numeric value that denotes the place this entity occupies in the order of the entity list.
	*/
	public $Sequence;
	public function getSequence() {
		return $this->Sequence;
	}
	
	public function setSequence($sequence) {
		$this->Sequence = $sequence;
		return $this;
	}

		public $SiteId;
	public function getSiteId() {
		return $this->SiteId;
	}
	
	public function setSiteId($siteId) {
		$this->SiteId = $siteId;
		return $this;
	}

	/**
	*Identifier and datetime stamp information recorded when creating or updating a resource entity. This value is system-supplied and read-only.
	*/
	public $AuditInfo;
	public function getAuditInfo() {
		return $this->AuditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->AuditInfo = $auditInfo;
		return $this;
	}

	/**
	*Complex type that contains content for a language specified by LocaleCode.
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
