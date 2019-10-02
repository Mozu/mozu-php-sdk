<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Content\Documentlists;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class DocumentTreeUrl  {

	/**
		* Get Resource Url for GetTreeDocumentContent
		* @param string $documentListName The name of the document list associated with the document.
		* @param string $documentName The name of the document, which is unique within its folder.
		* @return string Resource Url
	*/
	public static function getTreeDocumentContentUrl($documentListName, $documentName)
	{
		$url = "/api/content/documentlists/{documentListName}/documentTree/{documentName}/content";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("documentListName", $documentListName);
		$url = $mozuUrl->formatUrl("documentName", $documentName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for TransformTreeDocumentContent
		* @param string $crop 
		* @param string $documentListName 
		* @param string $documentName 
		* @param int $height 
		* @param int $max 
		* @param int $maxHeight 
		* @param int $maxWidth 
		* @param int $quality 
		* @param int $width 
		* @return string Resource Url
	*/
	public static function transformTreeDocumentContentUrl($crop, $documentListName, $documentName, $height, $max, $maxHeight, $maxWidth, $quality, $width)
	{
		$url = "/api/content/documentlists/{documentListName}/documentTree/{documentName}/transform?width={width}&height={height}&maxWidth={maxWidth}&maxHeight={maxHeight}&crop={crop}&quality={quality}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("crop", $crop);
		$url = $mozuUrl->formatUrl("documentListName", $documentListName);
		$url = $mozuUrl->formatUrl("documentName", $documentName);
		$url = $mozuUrl->formatUrl("height", $height);
		$url = $mozuUrl->formatUrl("max", $max);
		$url = $mozuUrl->formatUrl("maxHeight", $maxHeight);
		$url = $mozuUrl->formatUrl("maxWidth", $maxWidth);
		$url = $mozuUrl->formatUrl("quality", $quality);
		$url = $mozuUrl->formatUrl("width", $width);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetTreeDocument
		* @param string $documentListName The name of the document list associated with the document.
		* @param string $documentName The name of the document, which is unique within its folder.
		* @param bool $includeInactive 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getTreeDocumentUrl($documentListName, $documentName, $includeInactive, $responseFields)
	{
		$url = "/api/content/documentlists/{documentListName}/documentTree/{documentName}?includeInactive={includeInactive}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("documentListName", $documentListName);
		$url = $mozuUrl->formatUrl("documentName", $documentName);
		$url = $mozuUrl->formatUrl("includeInactive", $includeInactive);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateTreeDocumentContent
		* @param string $documentListName The name of the document list associated with the document.
		* @param string $documentName The name of the document, which is unique within its folder.
		* @return string Resource Url
	*/
	public static function updateTreeDocumentContentUrl($documentListName, $documentName)
	{
		$url = "/api/content/documentlists/{documentListName}/documentTree/{documentName}/content?folderPath={folderPath}&folderId={folderId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("documentListName", $documentListName);
		$url = $mozuUrl->formatUrl("documentName", $documentName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteTreeDocumentContent
		* @param string $documentListName The name of the document list associated with the document.
		* @param string $documentName The name of the document, which is unique within its folder.
		* @return string Resource Url
	*/
	public static function deleteTreeDocumentContentUrl($documentListName, $documentName)
	{
		$url = "/api/content/documentlists/{documentListName}/documentTree/{documentName}/content?folderPath={folderPath}&folderId={folderId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("documentListName", $documentListName);
		$url = $mozuUrl->formatUrl("documentName", $documentName);
		return $mozuUrl;
	}
	
}

?>
