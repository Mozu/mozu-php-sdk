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
use Mozu\Api\Urls\Commerce\Orders\BillingInfoUrl;

/**
* 
*/
class BillingInfoClient {

	/**
	* 
	*
	* @param bool $draft 
	* @param string $orderId 
	* @return MozuClient
	*/
	public static function getBillingInfoClient( $orderId, $draft =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = BillingInfoUrl::getBillingInfoUrl($draft, $orderId);
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
	* @param BillingInfo $billingInfo 
	* @return MozuClient
	*/
	public static function setBillingInfoClient($billingInfo,  $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = BillingInfoUrl::setBillingInfoUrl($orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($billingInfo);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

