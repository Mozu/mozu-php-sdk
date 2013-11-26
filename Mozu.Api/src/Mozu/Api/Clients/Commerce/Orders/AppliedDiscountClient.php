<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Orders\AppliedDiscountUrl;

/**
* 
*/
class AppliedDiscountClient {

	/**
	* 
	*
	* @param string $couponCode 
	* @param string $orderId 
	* @param string $updateMode 
	* @param string $version 
	* @return MozuClient
	*/
	public static function applyCouponClient( $couponCode,  $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AppliedDiscountUrl::applyCouponUrl($couponCode, $orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $couponCode 
	* @param string $orderId 
	* @param string $updateMode 
	* @param string $version 
	* @return MozuClient
	*/
	public static function removeCouponClient( $couponCode,  $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AppliedDiscountUrl::removeCouponUrl($couponCode, $orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $orderId 
	* @param string $updateMode 
	* @param string $version 
	* @return MozuClient
	*/
	public static function removeCouponsClient( $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AppliedDiscountUrl::removeCouponsUrl($orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

