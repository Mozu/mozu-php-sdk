<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform\Appdev;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class PackageUrl  {

	/**
		* Get Resource Url for GetFile
		* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}. 
		* @param string $fileName 
		* @return string Resource Url
	*/
	public static function getFileUrl($applicationKey, $fileName)
	{
		$url = "/api/platform/appdev/filebasedpackage/packages/{applicationKey}?fileName={fileName}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("applicationKey", $applicationKey);
		$url = $mozuUrl->formatUrl("fileName", $fileName);
		return $mozuUrl;
	}
	
}

?>

