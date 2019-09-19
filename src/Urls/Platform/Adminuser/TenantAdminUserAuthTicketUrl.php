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

class TenantAdminUserAuthTicketUrl  {

	/**
		* Get Resource Url for CreateUserAuthTicket
		* @param string $responseFields 
		* @param int $tenantId Unique identifier of the development or production tenant for which to generate the user authentication ticket.
		* @return string Resource Url
	*/
	public static function createUserAuthTicketUrl($responseFields, $tenantId)
	{
		$url = "/api/platform/adminuser/authtickets/tenants?tenantId={tenantId}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("tenantId", $tenantId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RefreshAuthTicket
		* @param string $responseFields 
		* @param int $tenantId 
		* @return string Resource Url
	*/
	public static function refreshAuthTicketUrl($responseFields, $tenantId)
	{
		$url = "/api/platform/adminuser/authtickets/tenants?tenantId={tenantId}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("tenantId", $tenantId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteUserAuthTicket
		* @param string $refreshToken Refresh token string associated with the user authentication ticket.
		* @return string Resource Url
	*/
	public static function deleteUserAuthTicketUrl($refreshToken)
	{
		$url = "/api/platform/adminuser/authtickets/?refreshToken={refreshToken}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("refreshToken", $refreshToken);
		return $mozuUrl;
	}
	
}

?>

