<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform\Adminuser;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class TenantAdminUserAuthTicketUrl  {

	/**
		* Get Resource Url for CreateUserAuthTicket
		* @param int $tenantId 
		* @return string Resource Url
	*/
	public static function createUserAuthTicketUrl($tenantId)
	{
		$url = "/api/platform/adminuser/authtickets/tenants?tenantId={tenantId}";
		$url = MozuUrl::formatUrl($url, "tenantId", $tenantId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for RefreshAuthTicket
		* @param int $tenantId 
		* @return string Resource Url
	*/
	public static function refreshAuthTicketUrl($tenantId)
	{
		$url = "/api/platform/adminuser/authtickets/tenants?tenantId={tenantId}";
		$url = MozuUrl::formatUrl($url, "tenantId", $tenantId);
		return new MozuUrl($url, UrlLocation::HOME_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteUserAuthTicket
		* @param string $refreshToken 
		* @return string Resource Url
	*/
	public static function deleteUserAuthTicketUrl($refreshToken)
	{
		$url = "/api/platform/adminuser/authtickets/?refreshToken={refreshToken}";
		$url = MozuUrl::formatUrl($url, "refreshToken", $refreshToken);
		return new MozuUrl($url, UrlLocation::HOME_POD,"DELETE") ;
	}
	
}

?>

