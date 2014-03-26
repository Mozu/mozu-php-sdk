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

class DocumentTypeUrl  {

	/**
		* Get Resource Url for GetDocumentTypes
		* @param int $pageSize 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getDocumentTypesUrl($pageSize, $startIndex)
	{
		$url = "/api/content/documenttypes/?pageSize={pageSize}&startIndex={startIndex}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetDocumentType
		* @param string $documentTypeName 
		* @return string Resource Url
	*/
	public static function getDocumentTypeUrl($documentTypeName)
	{
		$url = "/api/content/documenttypes/{documentTypeName}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("documentTypeName", $documentTypeName);
		return $mozuUrl;
	}
	
}

?>

