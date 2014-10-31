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
use Mozu\Api\Headers;
use Mozu\Api\DataViewMode;

use Mozu\Api\Contracts\Content\Document;
use Mozu\Api\Contracts\Content\DocumentCollection;

/**
* Use this subresource to manage documents in a document list.
*/
class DocumentClient {

	/**
	* Retrieve the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param DataViewMode $dataViewMode
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	* @return MozuClient
	*/
	public static function getDocumentContentClient($dataViewMode, $documentListName, $documentId)
	{
		$url = DocumentUrl::getDocumentContentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Retrieves a document within the specified document list.
	*
	* @param DataViewMode $dataViewMode
	* @param string $documentId Identifier of the document being retrieved.
	* @param string $documentListName The name of the document list associated with the document to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getDocumentClient($dataViewMode, $documentListName, $documentId, $responseFields =  null)
	{
		$url = DocumentUrl::getDocumentUrl($documentId, $documentListName, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Retrieves a collection of documents according to any filter and sort criteria.
	*
	* @param DataViewMode $dataViewMode
	* @param string $documentListName The name of the document list.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter a document's search results by any of its properties, including its name or folder path. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=Name+sw+Events"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getDocumentsClient($dataViewMode, $documentListName, $filter =  null, $sortBy =  null, $pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$url = DocumentUrl::getDocumentsUrl($documentListName, $filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Creates a new document in an defined document list.
	*
	* @param DataViewMode $dataViewMode
	* @param string $documentListName The descriptive alphanumeric document list name being created.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Document $document The descriptive name of the newly created document.
	* @return MozuClient
	*/
	public static function createDocumentClient($dataViewMode, $document, $documentListName, $responseFields =  null)
	{
		$url = DocumentUrl::createDocumentUrl($documentListName, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($document)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Updates the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
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
		return $mozuClient->withResourceUrl($url)->withStreamBody($stream)->withHeader(Headers::CONTENT_TYPE ,$contentType);

	}
	
	/**
	* Updates a document in a document list.
	*
	* @param string $documentId Unique identifier of the document to update.
	* @param string $documentListName Name of the document list associated with the document.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Document $document Properties of the document to update.
	* @return MozuClient
	*/
	public static function updateDocumentClient($document, $documentListName, $documentId, $responseFields =  null)
	{
		$url = DocumentUrl::updateDocumentUrl($documentId, $documentListName, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($document);

	}
	
	/**
	* Deletes a specific document based on the specified document ID.
	*
	* @param string $documentId Identifier of the document being deleted.
	* @param string $documentListName The name of the document list associated with the document list being deleted.
	* @return MozuClient
	*/
	public static function deleteDocumentClient($documentListName, $documentId)
	{
		$url = DocumentUrl::deleteDocumentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Deletes the content associated with a document, such as a product image or PDF specification, by supplying the document ID.
	*
	* @param string $documentId Unique identifier of the document.
	* @param string $documentListName The name of the document list associated with the document.
	* @return MozuClient
	*/
	public static function deleteDocumentContentClient($documentListName, $documentId)
	{
		$url = DocumentUrl::deleteDocumentContentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	
}

?>

