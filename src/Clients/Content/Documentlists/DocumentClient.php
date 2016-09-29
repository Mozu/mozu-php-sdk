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
	* Retrieve the content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
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
	* Performs transformations on a document. For example, resizing an image.
	*
	* @param string $crop Crops the image based on the specified coordinates. The reference point for positive coordinates is the top-left corner of the image, and the reference point for negative coordinates is the bottom-right corner of the image.Usage: Example:  removes 10 pixels from all edges of the image.  leaves the image uncropped.
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param int $height Specifies an exact height dimension for the image, in pixels.
	* @param int $max Specifies a pixel limitation for the largest side of an image.
	* @param int $maxHeight Specifies a pixel limitation for the height of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $maxWidth Specifies a pixel limitation for the width of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $quality Adjusts the image compression. Accepts values from 0-100, where 100 = highest quality, least compression.
	* @param int $width Specifies an exact width dimension for the image, in pixels.
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
	* Retrieves a document within the specified document list.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param bool $includeInactive Include inactive content.
	* @param string $responseFields Use this field to include those fields which are not included by default.
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
	* Retrieves a collection of documents according to any filter and sort criteria.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/applications/sorting-filtering.htm) for a list of supported filters.
	* @param bool $includeInactive Include inactive content.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
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
	* Creates a new document in an defined document list.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Document $document The document properties that define the content used by the content management system (CMS).
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
	* Updates the binary data or content associated with a document, such as a product image or PDF specifications file, by supplying the document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param Stream $stream Data stream that delivers information. Used to input and output data.
	*/
	public static function updateDocumentContentClient($stream, $documentListName, $documentId, $contentType= null)
	{
		$url = DocumentUrl::updateDocumentContentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withStreamBody($stream)->withHeader(Headers::CONTENT_TYPE ,$contentType);
		return $mozuClient;

	}
	
	/**
	* Updates a document in a document list.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Document $document The document properties that define the content used by the content management system (CMS).
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
	* Deletes a specific document based on the specified document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
	*/
	public static function deleteDocumentClient($documentListName, $documentId)
	{
		$url = DocumentUrl::deleteDocumentUrl($documentId, $documentListName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Deletes the content associated with a document, such as a product image or PDF specification, by supplying the document ID.
	*
	* @param string $documentId Unique identifier for a document, used by content and document calls. Document IDs are associated with document types, document type lists, sites, and tenants.
	* @param string $documentListName Name of content documentListName to delete
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

