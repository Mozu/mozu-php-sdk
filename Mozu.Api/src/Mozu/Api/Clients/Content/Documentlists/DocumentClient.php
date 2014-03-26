<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content\Documentlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\Documentlists\DocumentUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use this subresource to manage documents in a document list.
*/
class DocumentClient {

	/**
	* Get a specific document within the specified document list by providing the document ID.
	*
	* @param string $documentId Identifier of the document being retrieved.
	* @param string $documentListName The name of the document list associated with the document to retrieve.
	* @return MozuClient
	*/
	public static function getDocumentClient($dataViewMode, $documentListName, $documentId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = DocumentUrl::getDocumentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieve the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	* @return MozuClient
	*/
	public static function getDocumentContentClient($dataViewMode, $documentListName, $documentId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = DocumentUrl::getDocumentContentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves a collection of documents according to any filter and sort criteria.
	*
	* @param string $documentListName The name of the document list.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter a document's search results by any of its properties, including its name or folder path. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). <b>For example - "filter=Name+sw+Events"</b>
	* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
	* @param string $sortBy "The property by which to sort results and whether the results appear in ascending (a-z) order, represented by 'ASC' or in descending (z-a) order, represented by 'DESC'. The sortBy parameter follows an available property. <b>For example: sortBy=productCode+asc</b>"
	* @param int $startIndex "Used to create paged results from a query. Indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3."
	* @return MozuClient
	*/
	public static function getDocumentsClient($dataViewMode, $documentListName, $filter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = DocumentUrl::getDocumentsUrl($documentListName, $filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Creates a new document in an existing list.
	*
	* @param string $documentListName The descriptive alphanumeric document list name being created.
	* @param Document $document The descriptive name of the newly created document.
	* @return MozuClient
	*/
	public static function createDocumentClient($dataViewMode, $document, $documentListName, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = DocumentUrl::createDocumentUrl($documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($document)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Updates a document in a document list.
	*
	* @param string $documentId Unique identifier of the document to update.
	* @param string $documentListName Name of the document list associated with the document.
	* @param Document $document Properties of the document to update.
	* @return MozuClient
	*/
	public static function updateDocumentClient($dataViewMode, $document, $documentListName, $documentId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = DocumentUrl::updateDocumentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($document)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Updates the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	* @param Stream $stream 
	*/
	public static function updateDocumentContentClient($dataViewMode, $stream, $documentListName, $documentId, $contentType= null, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = DocumentUrl::updateDocumentContentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withStreamBody($stream)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)->withHeader(Headers::CONTENT_TYPE ,$contentType);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes a specific document based on the specified documentId.
	*
	* @param string $documentId Identifier of the document being deleted.
	* @param string $documentListName The name of the document list associated with the document list being deleted.
	*/
	public static function deleteDocumentClient($dataViewMode, $documentListName, $documentId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = DocumentUrl::deleteDocumentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes the content associated with a document, such as a product image or PDF specification, by supplying the document ID.
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	*/
	public static function deleteDocumentContentClient($dataViewMode, $documentListName, $documentId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = DocumentUrl::deleteDocumentContentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	
}

?>

