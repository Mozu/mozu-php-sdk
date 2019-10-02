<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content\Documentlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\Documentlists\DocumentUrl;

use Mozu\Api\Headers;

/**
* Use this subresource to manage documents in a document list.
*/
class DocumentClient {

	/**
	* 
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	* @return MozuClient
	*/
	public static function getDocumentContentClient($dataViewMode, $documentListName, $documentId)
	{
		$url = DocumentUrl::getDocumentContentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $crop 
	* @param string $documentId 
	* @param string $documentListName 
	* @param int $height 
	* @param int $max 
	* @param int $maxHeight 
	* @param int $maxWidth 
	* @param int $quality 
	* @param int $width 
	* @return MozuClient
	*/
	public static function transformDocumentContentClient($documentListName, $documentId, $width =  null, $height =  null, $max =  null, $maxWidth =  null, $maxHeight =  null, $crop =  null, $quality =  null)
	{
		$url = DocumentUrl::transformDocumentContentUrl($crop, $documentId, $documentListName, $height, $max, $maxHeight, $maxWidth, $quality, $width);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentId Identifier of the document being retrieved.
	* @param string $documentListName The name of the document list associated with the document to retrieve.
	* @param bool $includeInactive 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getDocumentClient($dataViewMode, $documentListName, $documentId, $includeInactive =  null, $responseFields =  null)
	{
		$url = DocumentUrl::getDocumentUrl($documentId, $documentListName, $includeInactive, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentListName The name of the document list.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter a document's search results by any of its properties, including its name or folder path. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=Name+sw+Events"
	* @param bool $includeInactive 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getDocumentsClient($dataViewMode, $documentListName, $filter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $includeInactive =  null, $responseFields =  null)
	{
		$url = DocumentUrl::getDocumentsUrl($documentListName, $filter, $includeInactive, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentListName The descriptive alphanumeric document list name being created.
	* @param string $responseFields 
	* @param Document $document The descriptive name of the newly created document.
	* @return MozuClient
	*/
	public static function createDocumentClient($dataViewMode, $document, $documentListName, $responseFields =  null)
	{
		$url = DocumentUrl::createDocumentUrl($documentListName, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($document)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	* @param Stream $stream Input output stream that delivers information.
	* @return MozuClient
	*/
	public static function updateDocumentContentClient($stream, $documentListName, $documentId, $contentType= null)
	{
		$url = DocumentUrl::updateDocumentContentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withStreamBody($stream)->withHeader(Headers::CONTENT_TYPE ,$contentType);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentId Unique identifier of the document to update.
	* @param string $documentListName Name of the document list associated with the document.
	* @param string $responseFields 
	* @param Document $document Properties of the document to update.
	* @return MozuClient
	*/
	public static function updateDocumentClient($document, $documentListName, $documentId, $responseFields =  null)
	{
		$url = DocumentUrl::updateDocumentUrl($documentId, $documentListName, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($document);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentId Identifier of the document being deleted.
	* @param string $documentListName The name of the document list associated with the document list being deleted.
	* @return MozuClient
	*/
	public static function deleteDocumentClient($documentListName, $documentId)
	{
		$url = DocumentUrl::deleteDocumentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	* @return MozuClient
	*/
	public static function deleteDocumentContentClient($documentListName, $documentId)
	{
		$url = DocumentUrl::deleteDocumentContentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
