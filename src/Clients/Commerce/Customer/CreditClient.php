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
use Mozu\Api\Urls\Commerce\Customer\CreditUrl;


/**
* Use the Customer Credits resource to manage the store credit associated with a customer account. Store credit can represent a static amount the customer can redeem at any of the tenant's sites, or a gift card registered for a customer account. At this time, gift card functionality is reserved for future use.
*/
class CreditClient {

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getCreditsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = CreditUrl::getCreditsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $code User-defined code that identifies the store credit to retrieve.
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getCreditClient($code, $responseFields =  null)
	{
		$url = CreditUrl::getCreditUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param string $userId 
	* @param Credit $credit Properties of the store credit to create.
	* @return MozuClient
	*/
	public static function addCreditClient($credit, $userId =  null, $responseFields =  null)
	{
		$url = CreditUrl::addCreditUrl($responseFields, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($credit);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $code The code that represents the credit to claim for the shopper.
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function associateCreditToShopperClient($code, $responseFields =  null)
	{
		$url = CreditUrl::associateCreditToShopperUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $code 
	* @param string $userId 
	* @return MozuClient
	*/
	public static function resendCreditCreatedEmailClient($code, $userId =  null)
	{
		$url = CreditUrl::resendCreditCreatedEmailUrl($code, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $code User-defined code of the store credit to update.
	* @param string $responseFields 
	* @param Credit $credit Properties of the store credit to update.
	* @return MozuClient
	*/
	public static function updateCreditClient($credit, $code, $responseFields =  null)
	{
		$url = CreditUrl::updateCreditUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($credit);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $code User-defined code of the store credit to delete.
	* @return MozuClient
	*/
	public static function deleteCreditClient($code)
	{
		$url = CreditUrl::deleteCreditUrl($code);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

