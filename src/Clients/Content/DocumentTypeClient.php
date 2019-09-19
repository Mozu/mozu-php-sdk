<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\DocumentTypeUrl;

use Mozu\Api\Headers;

/**
* Use the Document Types resource to view the document types supplied by the Content API.
*/
class DocumentTypeClient {

	/**
	* 
	*
	* @param int $pageSize 
	* @param string $responseFields 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getDocumentTypesClient($dataViewMode, $pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$url = DocumentTypeUrl::getDocumentTypesUrl($pageSize, $responseFields, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentTypeName The name of the document type to retrieve.
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getDocumentTypeClient($dataViewMode, $documentTypeName, $responseFields =  null)
	{
		$url = DocumentTypeUrl::getDocumentTypeUrl($documentTypeName, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param DocumentType $documentType 
	* @return MozuClient
	*/
	public static function createDocumentTypeClient($dataViewMode, $documentType, $responseFields =  null)
	{
		$url = DocumentTypeUrl::createDocumentTypeUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($documentType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentTypeName 
	* @param string $responseFields 
	* @param DocumentType $documentType 
	* @return MozuClient
	*/
	public static function updateDocumentTypeClient($documentType, $documentTypeName, $responseFields =  null)
	{
		$url = DocumentTypeUrl::updateDocumentTypeUrl($documentTypeName, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($documentType);
		return $mozuClient;

	}
	
	
}

?>

