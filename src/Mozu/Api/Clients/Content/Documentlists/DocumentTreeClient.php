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
use Mozu\Api\Urls\Content\Documentlists\DocumentTreeUrl;
use Mozu\Api\Headers;
use Mozu\Api\DataViewMode;

use Mozu\Api\Contracts\Content\Document;

/**
* Use the document tree subresource to retrieve documents and manage content within the document hierarchy.
*/
class DocumentTreeClient {

	/**
	* Retrieve the content associated with the document, such as a product image or PDF specifications file.
	*
	* @param DataViewMode $dataViewMode
	* @param string $documentListName The name of the document list associated with the document.
	* @param string $documentName The name of the document, which is unique within its folder.
	* @return MozuClient
	*/
	public static function getTreeDocumentContentClient($dataViewMode, $documentListName, $documentName)
	{
		$url = DocumentTreeUrl::getTreeDocumentContentUrl($documentListName, $documentName);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Retrieves a document based on its document list and folder path in the document hierarchy.
	*
	* @param DataViewMode $dataViewMode
	* @param string $documentListName The name of the document list associated with the document.
	* @param string $documentName The name of the document, which is unique within its folder.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getTreeDocumentClient($dataViewMode, $documentListName, $documentName, $responseFields =  null)
	{
		$url = DocumentTreeUrl::getTreeDocumentUrl($documentListName, $documentName, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Updates the content associated with a document, such as a product image or PDF specifications file, based on the document's position in the document hierarchy.
	*
	* @param string $documentListName The name of the document list associated with the document.
	* @param string $documentName The name of the document, which is unique within its folder.
	* @param Stream $stream Input output stream that delivers information.
	* @return MozuClient
	*/
	public static function updateTreeDocumentContentClient($stream, $documentListName, $documentName, $contentType= null)
	{
		$url = DocumentTreeUrl::updateTreeDocumentContentUrl($documentListName, $documentName);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withStreamBody($stream)->withHeader(Headers::CONTENT_TYPE ,$contentType);

	}
	
	/**
	* Deletes the content associated with a document, such as a product image or PDF specifications file.
	*
	* @param string $documentListName The name of the document list associated with the document.
	* @param string $documentName The name of the document, which is unique within its folder.
	* @param Stream $stream Input output stream that delivers information.
	* @return MozuClient
	*/
	public static function deleteTreeDocumentContentClient($stream, $documentListName, $documentName, $contentType= null)
	{
		$url = DocumentTreeUrl::deleteTreeDocumentContentUrl($documentListName, $documentName);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withStreamBody($stream)->withHeader(Headers::CONTENT_TYPE ,$contentType);

	}
	
	
}

?>
