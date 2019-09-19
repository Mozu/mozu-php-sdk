<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform\Adminuser;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class RoleUrl  {

	/**
		* Get Resource Url for GetRoles
		* @param string $filter 
		* @param int $pageSize 
		* @param string $responseFields 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getRolesUrl($filter, $pageSize, $responseFields, $startIndex)
	{
		$url = "/api/platform/adminuser/roles/?startIndex={startIndex}&pageSize={pageSize}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
}

?>

