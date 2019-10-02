<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Content;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class DocumentDraftSummaryUrl  {

	/**
		* Get Resource Url for ListDocumentDraftSummaries
		* @param string $documentLists Lists that contain the document drafts.
		* @param int $pageSize 
		* @param string $responseFields 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function listDocumentDraftSummariesUrl($documentLists, $pageSize, $responseFields, $startIndex)
	{
		$url = "/api/content/documentpublishing/draft?pageSize={pageSize}&startIndex={startIndex}&documentLists={documentLists}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("documentLists", $documentLists);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteDocumentDrafts
		* @param string $documentLists List of document lists that contain documents to delete.
		* @return string Resource Url
	*/
	public static function deleteDocumentDraftsUrl($documentLists)
	{
		$url = "/api/content/documentpublishing/draft?documentLists={documentLists}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("documentLists", $documentLists);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for PublishDocuments
		* @param string $documentLists List of document lists that contain documents to publish.
		* @return string Resource Url
	*/
	public static function publishDocumentsUrl($documentLists)
	{
		$url = "/api/content/documentpublishing/active?documentLists={documentLists}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("documentLists", $documentLists);
		return $mozuUrl;
	}
	
}

?>
