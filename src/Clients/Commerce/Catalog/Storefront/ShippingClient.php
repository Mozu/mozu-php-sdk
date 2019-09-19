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
use Mozu\Api\Urls\Commerce\Catalog\Storefront\ShippingUrl;


/**
* Use the Storefront Shipping resource to retrieve shipping rate information from the website.
*/
class ShippingClient {

	/**
	* 
	*
	* @param bool $includeRawResponse 
	* @param array|RateRequestGroup $rateRequestGroupList 
	* @return MozuClient
	*/
	public static function getMultiRatesClient($rateRequestGroupList, $includeRawResponse =  null)
	{
		$url = ShippingUrl::getMultiRatesUrl($includeRawResponse);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($rateRequestGroupList);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param bool $includeRawResponse 
	* @param string $responseFields 
	* @param RateRequest $rateRequest Properties of the shipping rate request sent on behalf of the storefront website.
	* @return MozuClient
	*/
	public static function getRatesClient($rateRequest, $includeRawResponse =  null, $responseFields =  null)
	{
		$url = ShippingUrl::getRatesUrl($includeRawResponse, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($rateRequest);
		return $mozuClient;

	}
	
	
}

?>

