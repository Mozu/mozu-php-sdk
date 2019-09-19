<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Storefront;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Storefront\PriceListUrl;


/**
* 
*/
class PriceListClient {

	/**
	* 
	*
	* @param string $priceListCode 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getPriceListClient($priceListCode, $responseFields =  null)
	{
		$url = PriceListUrl::getPriceListUrl($priceListCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $customerAccountId 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getResolvedPriceListClient($customerAccountId =  null, $responseFields =  null)
	{
		$url = PriceListUrl::getResolvedPriceListUrl($customerAccountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

