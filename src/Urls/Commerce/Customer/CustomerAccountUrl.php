<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CustomerAccountUrl  {

	/**
		* Get Resource Url for GetAccounts
		* @param string $fields The fields to include in the response.
		* @param string $filter 
		* @param bool $isAnonymous If true, retrieve anonymous shopper accounts in the response.
		* @param int $pageSize 
		* @param string $q A list of customer account search terms to use in the query when searching across customer name and email. Separate multiple search terms with a space character.
		* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getAccountsUrl($fields, $filter, $isAnonymous, $pageSize, $q, $qLimit, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&fields={fields}&q={q}&qLimit={qLimit}&isAnonymous={isAnonymous}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("fields", $fields);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("isAnonymous", $isAnonymous);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("q", $q);
		$url = $mozuUrl->formatUrl("qLimit", $qLimit);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetLoginState
		* @param int $accountId Unique identifier of the customer account.
		* @param string $responseFields 
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function getLoginStateUrl($accountId, $responseFields, $userId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/loginstate?userId={userId}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAccount
		* @param int $accountId Unique identifier of the customer account to retrieve.
		* @param string $responseFields 
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function getAccountUrl($accountId, $responseFields, $userId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}?userId={userId}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAccount
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function addAccountUrl($responseFields)
	{
		$url = "/api/commerce/customer/accounts/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ChangePassword
		* @param int $accountId The customer account information required to change the userpassword.
		* @param bool $unlockAccount 
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function changePasswordUrl($accountId, $unlockAccount, $userId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/Change-Password?unlockAccount={unlockAccount}&userId={userId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("unlockAccount", $unlockAccount);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddLoginToExistingCustomer
		* @param int $accountId Unique identifier of the customer account.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function addLoginToExistingCustomerUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/Create-Login?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RecomputeCustomerLifetimeValue
		* @param int $accountId The unique identifier of the customer account for which to calculate customer lifetime value.
		* @return string Resource Url
	*/
	public static function recomputeCustomerLifetimeValueUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/recomputelifetimevalue";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for SetLoginLocked
		* @param int $accountId The unique identifier of the customer account.
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function setLoginLockedUrl($accountId, $userId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/Set-Login-Locked?userId={userId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for SetPasswordChangeRequired
		* @param int $accountId Unique identifier of the customer account.
		* @param string $userId 
		* @return string Resource Url
	*/
	public static function setPasswordChangeRequiredUrl($accountId, $userId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/Set-Password-Change-Required?userId={userId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("userId", $userId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAccountAndLogin
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function addAccountAndLoginUrl($responseFields)
	{
		$url = "/api/commerce/customer/accounts/Add-Account-And-Login?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAccounts
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function addAccountsUrl($responseFields)
	{
		$url = "/api/commerce/customer/accounts/Bulk?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ChangePasswords
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function changePasswordsUrl($responseFields)
	{
		$url = "/api/commerce/customer/accounts/Change-Passwords?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetLoginStateByEmailAddress
		* @param string $customerSetCode 
		* @param string $emailAddress The email address associated with the customer account.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getLoginStateByEmailAddressUrl($customerSetCode, $emailAddress, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/loginstatebyemailaddress?emailAddress={emailAddress}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("customerSetCode", $customerSetCode);
		$url = $mozuUrl->formatUrl("emailAddress", $emailAddress);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetLoginStateByUserName
		* @param string $customerSetCode 
		* @param string $responseFields 
		* @param string $userName The user name associated with the customer account.
		* @return string Resource Url
	*/
	public static function getLoginStateByUserNameUrl($customerSetCode, $responseFields, $userName)
	{
		$url = "/api/commerce/customer/accounts/loginstatebyusername?userName={userName}&customerSetCode={customerSetCode}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("customerSetCode", $customerSetCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("userName", $userName);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCustomersPurchaseOrderAccounts
		* @param string $accountType 
		* @param int $pageSize 
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getCustomersPurchaseOrderAccountsUrl($accountType, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/purchaseOrderAccounts?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&accountType={accountType}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountType", $accountType);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ResetPassword
		* @return string Resource Url
	*/
	public static function resetPasswordUrl()
	{
		$url = "/api/commerce/customer/accounts/Reset-Password";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateAccount
		* @param int $accountId Unique identifier of the customer account.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function updateAccountUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteAccount
		* @param int $accountId Unique identifier of the customer account to delete.
		* @return string Resource Url
	*/
	public static function deleteAccountUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		return $mozuUrl;
	}
	
}

?>
