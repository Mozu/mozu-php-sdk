<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\B2BAccountUrl;


/**
* 
*/
class B2BAccountClient {

	/**
	* 
	*
	* @param string $fields 
	* @param string $filter 
	* @param int $pageSize 
	* @param string $q 
	* @param int $qLimit 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getB2BAccountsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $fields =  null, $q =  null, $qLimit =  null, $responseFields =  null)
	{
		$url = B2BAccountUrl::getB2BAccountsUrl($fields, $filter, $pageSize, $q, $qLimit, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getB2BAccountAttributeClient($accountId, $attributeFQN, $responseFields =  null)
	{
		$url = B2BAccountUrl::getB2BAccountAttributeUrl($accountId, $attributeFQN, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getB2BAccountAttributesClient($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = B2BAccountUrl::getB2BAccountAttributesUrl($accountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $responseFields 
	* @param string $userId 
	* @return MozuClient
	*/
	public static function getUserRolesAsyncClient($accountId, $userId, $responseFields =  null)
	{
		$url = B2BAccountUrl::getUserRolesAsyncUrl($accountId, $responseFields, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $filter 
	* @param int $pageSize 
	* @param string $q 
	* @param int $qLimit 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getUsersClient($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $q =  null, $qLimit =  null, $responseFields =  null)
	{
		$url = B2BAccountUrl::getUsersUrl($accountId, $filter, $pageSize, $q, $qLimit, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getB2BAccountClient($accountId, $responseFields =  null)
	{
		$url = B2BAccountUrl::getB2BAccountUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param B2BAccount $account 
	* @return MozuClient
	*/
	public static function addAccountClient($account, $responseFields =  null)
	{
		$url = B2BAccountUrl::addAccountUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($account);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $responseFields 
	* @param CustomerAttribute $attribute 
	* @return MozuClient
	*/
	public static function addB2BAccountAttributeClient($attribute, $accountId, $responseFields =  null)
	{
		$url = B2BAccountUrl::addB2BAccountAttributeUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param int $roleId 
	* @param string $userId 
	* @return MozuClient
	*/
	public static function addUserRoleAsyncClient($accountId, $userId, $roleId)
	{
		$url = B2BAccountUrl::addUserRoleAsyncUrl($accountId, $roleId, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $responseFields 
	* @param B2BUserAndAuthInfo $user 
	* @return MozuClient
	*/
	public static function addUserClient($user, $accountId, $responseFields =  null)
	{
		$url = B2BAccountUrl::addUserUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($user);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @param CustomerAttribute $attribute 
	* @return MozuClient
	*/
	public static function updateB2BAccountAttributeClient($attribute, $accountId, $attributeFQN, $responseFields =  null)
	{
		$url = B2BAccountUrl::updateB2BAccountAttributeUrl($accountId, $attributeFQN, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $userId 
	* @return MozuClient
	*/
	public static function removeUserClient($accountId, $userId)
	{
		$url = B2BAccountUrl::removeUserUrl($accountId, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $responseFields 
	* @param string $userId 
	* @param B2BUser $user 
	* @return MozuClient
	*/
	public static function updateUserClient($user, $accountId, $userId, $responseFields =  null)
	{
		$url = B2BAccountUrl::updateUserUrl($accountId, $responseFields, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($user);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $responseFields 
	* @param B2BAccount $account 
	* @return MozuClient
	*/
	public static function updateAccountClient($account, $accountId, $responseFields =  null)
	{
		$url = B2BAccountUrl::updateAccountUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($account);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $attributeFQN 
	* @return MozuClient
	*/
	public static function deleteB2BAccountAttributeClient($accountId, $attributeFQN)
	{
		$url = B2BAccountUrl::deleteB2BAccountAttributeUrl($accountId, $attributeFQN);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param int $roleId 
	* @param string $userId 
	* @return MozuClient
	*/
	public static function removeUserRoleAsyncClient($accountId, $userId, $roleId)
	{
		$url = B2BAccountUrl::removeUserRoleAsyncUrl($accountId, $roleId, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
