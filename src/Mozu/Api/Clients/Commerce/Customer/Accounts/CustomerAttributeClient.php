<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\Accounts\CustomerAttributeUrl;


/**
* Use the Attributes subresource to manage the attributes used to uniquely identify shopper accounts, such as gender or age.
*/
class CustomerAttributeClient {

	/**
	* Retrieves the contents of an attribute associated with the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getAccountAttributeClient($accountId, $attributeFQN, $responseFields =  null)
	{
		$url = CustomerAttributeUrl::getAccountAttributeUrl($accountId, $attributeFQN, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the list of customer account attributes.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getAccountAttributesClient($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = CustomerAttributeUrl::getAccountAttributesUrl($accountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Applies a defined attribute to the customer account specified in the request and assigns a value to the customer attribute.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAttribute $attribute Properties of an attribute associated with a customer account.
	* @return MozuClient
	*/
	public static function addAccountAttributeClient($attribute, $accountId, $responseFields =  null)
	{
		$url = CustomerAttributeUrl::addAccountAttributeUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	/**
	* Updates one or more details of a customer account attribute.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAttribute $attribute Properties of an attribute associated with a customer account.
	* @return MozuClient
	*/
	public static function updateAccountAttributeClient($attribute, $accountId, $attributeFQN, $responseFields =  null)
	{
		$url = CustomerAttributeUrl::updateAccountAttributeUrl($accountId, $attributeFQN, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	/**
	* Removes the attribute specified in the request from the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public static function deleteAccountAttributeClient($accountId, $attributeFQN)
	{
		$url = CustomerAttributeUrl::deleteAccountAttributeUrl($accountId, $attributeFQN);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

