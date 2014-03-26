<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform\Applications;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class AuthTicketUrl  {

	/**
		* Get Resource Url for AuthenticateApp
		* @return string Resource Url
	*/
	public static function authenticateAppUrl()
	{
		$url = "/api/platform/applications/authtickets/";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"POST", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RefreshAppAuthTicket
		* @return string Resource Url
	*/
	public static function refreshAppAuthTicketUrl()
	{
		$url = "/api/platform/applications/authtickets/refresh-ticket";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"PUT", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteAppAuthTicket
		* @param string $refreshToken The refresh token string from the application's authentication ticket.
		* @return string Resource Url
	*/
	public static function deleteAppAuthTicketUrl($refreshToken)
	{
		$url = "/api/platform/applications/authtickets/{refreshToken}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("refreshToken", $refreshToken);
		return $mozuUrl;
	}
	
}

?>

