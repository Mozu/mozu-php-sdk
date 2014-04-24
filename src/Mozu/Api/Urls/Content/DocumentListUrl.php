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

class DocumentListUrl  {

	/**
		* Get Resource Url for GetDocumentLists
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getDocumentListsUrl($pageSize, $startIndex)
	{
		$url = "/api/content/documentlists/?pageSize={pageSize}&startIndex={startIndex}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetDocumentList
		* @param string $documentListName The name of the document list.
		* @return string Resource Url
	*/
	public static function getDocumentListUrl($documentListName)
	{
		$url = "/api/content/documentlists/{documentListName}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("documentListName", $documentListName);
		return $mozuUrl;
	}
	
}

?>

