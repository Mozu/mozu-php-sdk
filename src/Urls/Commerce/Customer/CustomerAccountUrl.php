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
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param bool $isAnonymous If true, retrieve anonymous shopper accounts in the response.
		* @param int $pageSize 
		* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
		* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
		* @param string $responseFields Use this field to include those fields which are not included by default.
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
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getLoginStateUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/loginstate?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAccount
		* @param int $accountId Unique identifier of the customer account.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getAccountUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAccount
		* @param string $responseFields Use this field to include those fields which are not included by default.
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
		* @param int $accountId Unique identifier of the customer account.
		* @param bool $unlockAccount Specifies whether to unlock the specified customer account.
		* @return string Resource Url
	*/
	public static function changePasswordUrl($accountId, $unlockAccount)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/Change-Password?unlockAccount={unlockAccount}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("unlockAccount", $unlockAccount);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddLoginToExistingCustomer
		* @param int $accountId Unique identifier of the customer account.
		* @param string $responseFields Use this field to include those fields which are not included by default.
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
		* @param int $accountId Unique identifier of the customer account.
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
		* @param int $accountId Unique identifier of the customer account.
		* @return string Resource Url
	*/
	public static function setLoginLockedUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/Set-Login-Locked";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for SetPasswordChangeRequired
		* @param int $accountId Unique identifier of the customer account.
		* @return string Resource Url
	*/
	public static function setPasswordChangeRequiredUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/Set-Password-Change-Required";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAccountAndLogin
		* @param string $responseFields Use this field to include those fields which are not included by default.
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
		* @param string $responseFields Use this field to include those fields which are not included by default.
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
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
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
		* @param string $customerSetCode The unique idenfitier of the customer set.
		* @param string $emailAddress The email address associated with the customer account.
		* @param string $responseFields Use this field to include those fields which are not included by default.
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
		* @param string $customerSetCode The unique idenfitier of the customer set.
		* @param string $responseFields Use this field to include those fields which are not included by default.
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
		* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
		* @return string Resource Url
	*/
	public static function getCustomersPurchaseOrderAccountsUrl($pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/purchaseOrderAccounts?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
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
		* @param string $responseFields Use this field to include those fields which are not included by default.
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
		* @param int $accountId Unique identifier of the customer account.
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

