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

use Mozu\Api\Urls\BaseUrl;

class AdminUserUrl extends BaseUrl {

	/**
		* Get Resource Url for GetUser
		* @param string $userId Unique identifier of the administrator account to retrieve.
		* @return string Resource Url
	*/
	public static function getUserUrl($userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}";
		$url = parent::formatUrl($url, "userId", $userId);
		return $url;
	}
	
	/**
		* Get Resource Url for GetTenantScopesForUser
		* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
		* @return string Resource Url
	*/
	public static function getTenantScopesForUserUrl($userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}/tenants";
		$url = parent::formatUrl($url, "userId", $userId);
		return $url;
	}
	
}

?>

