<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class TenantUrl  {

	/**
		* Get Resource Url for GetTenant
		* @param int $tenantId 
		* @return string Resource Url
	*/
	public static function getTenantUrl($tenantId)
	{
		$url = "/api/platform/tenants/{tenantId}";
		$url = MozuUrl::formatUrl($url, "tenantId", $tenantId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"GET") ;
	}
	
}

?>

