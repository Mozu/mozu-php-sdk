<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer\Accounts;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CustomerNoteUrl  {

	/**
		* Get Resource Url for GetAccountNote
		* @param int $accountId Unique identifier of the customer account that contains the note being retrieved.
		* @param int $noteId Unique identifier of a particular note to retrieve.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getAccountNoteUrl($accountId, $noteId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/notes/{noteId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("noteId", $noteId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAccountNotes
		* @param int $accountId Unique identifier of the customer account.
		* @param string $filter 
		* @param int $pageSize 
		* @param string $responseFields 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getAccountNotesUrl($accountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/notes?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAccountNote
		* @param int $accountId Unique identifier of the customer account for which to create the note.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function addAccountNoteUrl($accountId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/notes?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateAccountNote
		* @param int $accountId Unique identifier of the customer account note to modify.
		* @param int $noteId Unique identifier of the note to update.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function updateAccountNoteUrl($accountId, $noteId, $responseFields)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/notes/{noteId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("noteId", $noteId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteAccountNote
		* @param int $accountId Unique identifier of the customer account that contains the note being deleted.
		* @param int $noteId Unique identifier of the customer account note being deleted.
		* @return string Resource Url
	*/
	public static function deleteAccountNoteUrl($accountId, $noteId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/notes/{noteId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("noteId", $noteId);
		return $mozuUrl;
	}
	
}

?>

