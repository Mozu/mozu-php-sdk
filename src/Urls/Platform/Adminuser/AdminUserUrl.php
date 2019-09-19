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

class AdminUserUrl  {

	/**
		* Get Resource Url for GetUsers
		* @param string $emailAddress 
		* @param string $filter 
		* @param int $pageSize 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getUsersUrl($emailAddress, $filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/platform/adminuser/accounts/?emailAddress={emailAddress}&startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("emailAddress", $emailAddress);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetUserRoles
		* @param string $responseFields 
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function getUserRolesUrl($responseFields, $userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}/roles?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetTenantScopesForUser
		* @param string $responseFields 
		* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
		* @return string Resource Url
	*/
	public static function getTenantScopesForUserUrl($responseFields, $userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}/tenants?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetUserById
		* @param string $responseFields 
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function getUserByIdUrl($responseFields, $userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}/userbyid?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetUser
		* @param string $responseFields 
		* @param string $userId Unique identifier of the administrator account to retrieve.
		* @return string Resource Url
	*/
	public static function getUserUrl($responseFields, $userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateUser
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function createUserUrl($responseFields)
	{
		$url = "/api/platform/adminuser/accounts/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ChangePassword
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function changePasswordUrl($userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}/Change-Password";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ChangeUserPassword
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function changeUserPasswordUrl($userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}/Change-User-Password";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddUserRole
		* @param int $roleId 
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function addUserRoleUrl($roleId, $userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}/roles/{roleId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("roleId", $roleId);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ResetPassword
		* @return string Resource Url
	*/
	public static function resetPasswordUrl()
	{
		$url = "/api/platform/adminuser/accounts/Reset-Password";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"POST", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateUser
		* @param string $responseFields 
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function updateUserUrl($responseFields, $userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteUser
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function deleteUserUrl($userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveUserRole
		* @param int $roleId 
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function removeUserRoleUrl($roleId, $userId)
	{
		$url = "/api/platform/adminuser/accounts/{userId}/roles/{roleId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("roleId", $roleId);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
}

?>

