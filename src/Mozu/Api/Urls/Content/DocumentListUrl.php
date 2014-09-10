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
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getDocumentListsUrl($pageSize, $responseFields, $startIndex)
	{
		$url = "/api/content/documentlists/?pageSize={pageSize}&startIndex={startIndex}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("pageSize", $pageSize)
				->formatUrl("responseFields", $responseFields)
				->formatUrl("startIndex", $startIndex);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetDocumentList
		* @param string $documentListName The name of the document list.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getDocumentListUrl($documentListName, $responseFields)
	{
		$url = "/api/content/documentlists/{documentListName}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("documentListName", $documentListName)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateDocumentList
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function createDocumentListUrl($responseFields)
	{
		$url = "/api/content/documentlists/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateDocumentList
		* @param string $documentListName 
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateDocumentListUrl($documentListName, $responseFields)
	{
		$url = "/api/content/documentlists/{documentListName}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false);
		$mozuUrl->formatUrl("documentListName", $documentListName)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteDocumentList
		* @param string $documentListName 
		* @return string Resource Url
	*/
	public static function deleteDocumentListUrl($documentListName)
	{
		$url = "/api/content/documentlists/{documentListName}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false);
		$mozuUrl->formatUrl("documentListName", $documentListName);

		return $mozuUrl;
	}
	
}

?>

