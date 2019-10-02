<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Checkouts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Checkouts\OrderAttributeUrl;


/**
* 
*/
class OrderAttributeClient {

	/**
	* 
	*
	* @param string $checkoutId 
	* @return MozuClient
	*/
	public static function getCheckoutAttributesClient($checkoutId)
	{
		$url = OrderAttributeUrl::getCheckoutAttributesUrl($checkoutId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $checkoutId 
	* @param array|OrderAttribute $checkoutAttributes 
	* @return MozuClient
	*/
	public static function createCheckoutAttributesClient($checkoutAttributes, $checkoutId)
	{
		$url = OrderAttributeUrl::createCheckoutAttributesUrl($checkoutId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($checkoutAttributes);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $checkoutId 
	* @param bool $removeMissing 
	* @param array|OrderAttribute $checkoutAttributes 
	* @return MozuClient
	*/
	public static function updateCheckoutAttributeClient($checkoutAttributes, $checkoutId, $removeMissing =  null)
	{
		$url = OrderAttributeUrl::updateCheckoutAttributeUrl($checkoutId, $removeMissing);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($checkoutAttributes);
		return $mozuClient;

	}
	
	
}

?>
