<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



class Category
{
		public $categoryId;
	public function getCategoryId() {
		return $this->categoryId;
	}
	
	public function setCategoryId($categoryId) {
		$this->categoryId = $categoryId;
		return $this;
	}

		public $sequence;
	public function getSequence() {
		return $this->sequence;
	}
	
	public function setSequence($sequence) {
		$this->sequence = $sequence;
		return $this;
	}

		public $content;
	public function getContent() {
		return $this->content;
	}
	
	public function setContent($content) {
		$this->content = $content;
		return $this;
	}

		public $childrenCategories;
	public function getChildrenCategories() {
		return $this->childrenCategories;
	}
	
	public function setChildrenCategories($childrenCategories) {
		$this->childrenCategories = $childrenCategories;
		return $this;
	}

		public $parentCategory;
	public function getParentCategory() {
		return $this->parentCategory;
	}
	
	public function setParentCategory($parentCategory) {
		$this->parentCategory = $parentCategory;
		return $this;
	}

}

?>
