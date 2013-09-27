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



/**
*	The document properties that define the content used by the content management system (CMS).
*/
class Document
{
	/**
	*The character length associated with the document content.
	*/
	public $ContentLength;
	public function getContentLength() {
		return $this->ContentLength;
	}
	
	public function setContentLength($contentLength) {
		$this->ContentLength = $contentLength;
		return $this;
	}

	/**
	*The mime type associated with the document content, if applicable.
	*/
	public $ContentMimeType;
	public function getContentMimeType() {
		return $this->ContentMimeType;
	}
	
	public function setContentMimeType($contentMimeType) {
		$this->ContentMimeType = $contentMimeType;
		return $this;
	}

	/**
	*The date and time the most recent content update was made. UTC date/time. System-supplied and read-only.
	*/
	public $ContentUpdateDate;
	public function getContentUpdateDate() {
		return $this->ContentUpdateDate;
	}
	
	public function setContentUpdateDate($contentUpdateDate) {
		$this->ContentUpdateDate = $contentUpdateDate;
		return $this;
	}

	/**
	*The name of the document list associated with the document.
	*/
	public $DocumentListName;
	public function getDocumentListName() {
		return $this->DocumentListName;
	}
	
	public function setDocumentListName($documentListName) {
		$this->DocumentListName = $documentListName;
		return $this;
	}

	/**
	*The type of document used in the CMS such as "web_page" or "template" or "image_url".
	*/
	public $DocumentType;
	public function getDocumentType() {
		return $this->DocumentType;
	}
	
	public function setDocumentType($documentType) {
		$this->DocumentType = $documentType;
		return $this;
	}

	/**
	*If applicable, the file extension associated with the document content.
	*/
	public $Extension;
	public function getExtension() {
		return $this->Extension;
	}
	
	public function setExtension($extension) {
		$this->Extension = $extension;
		return $this;
	}

	/**
	*Unique identifier of the folder that contains the document.
	*/
	public $FolderId;
	public function getFolderId() {
		return $this->FolderId;
	}
	
	public function setFolderId($folderId) {
		$this->FolderId = $folderId;
		return $this;
	}

	/**
	*Unique identifier of the document.
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
	*When the document was added to the document list. System-supplied and read-only.
	*/
	public $InsertDate;
	public function getInsertDate() {
		return $this->InsertDate;
	}
	
	public function setInsertDate($insertDate) {
		$this->InsertDate = $insertDate;
		return $this;
	}

	/**
	*The name of the document, which is unique within its folder.
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
	*The location of the document in the document list and folder hierarchy.
	*/
	public $Path;
	public function getPath() {
		return $this->Path;
	}
	
	public function setPath($path) {
		$this->Path = $path;
		return $this;
	}

	/**
	*The current state of the document, which is Active, Draft, or Latest. Active documents are published and cannot be deleted. Querying Latest returns the most recent version of the document, regardless of whether it is published or a draft.
	*/
	public $PublishState;
	public function getPublishState() {
		return $this->PublishState;
	}
	
	public function setPublishState($publishState) {
		$this->PublishState = $publishState;
		return $this;
	}

	/**
	*Date and time when the entity was last updated, represented in UTC Date/Time.
	*/
	public $UpdateDate;
	public function getUpdateDate() {
		return $this->UpdateDate;
	}
	
	public function setUpdateDate($updateDate) {
		$this->UpdateDate = $updateDate;
		return $this;
	}

	/**
	*List of properties for the given property value.
	*/
	public $Properties;
	public function getProperties() {
		return $this->Properties;
	}
	
	public function setProperties($properties) {
		$this->Properties = $properties;
		return $this;
	}

}

?>
