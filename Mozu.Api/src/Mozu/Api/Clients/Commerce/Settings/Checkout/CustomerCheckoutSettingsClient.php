<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings\Checkout;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\Checkout\CustomerCheckoutSettingsUrl;

/**
* 
*/
class CustomerCheckoutSettingsClient {

	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getCustomerCheckoutSettingsClient(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerCheckoutSettingsUrl::getCustomerCheckoutSettingsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param CustomerCheckoutSettings $customerCheckoutSettings 
	* @return MozuClient
	*/
	public static function updateCustomerCheckoutSettingsClient($customerCheckoutSettings, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerCheckoutSettingsUrl::updateCustomerCheckoutSettingsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customerCheckoutSettings);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

