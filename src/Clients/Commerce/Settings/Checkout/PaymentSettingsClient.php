<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings\Checkout;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\Checkout\PaymentSettingsUrl;


/**
* Use the Payment Settings resource to specify settings when creating payments for order checkout on the site.
*/
class PaymentSettingsClient {

	/**
	* 
	*
	* @param string $fullyQualifiedName 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getThirdPartyPaymentWorkflowWithValuesClient($fullyQualifiedName, $responseFields =  null)
	{
		$url = PaymentSettingsUrl::getThirdPartyPaymentWorkflowWithValuesUrl($fullyQualifiedName, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @return MozuClient
	*/
	public static function getThirdPartyPaymentWorkflowsClient()
	{
		$url = PaymentSettingsUrl::getThirdPartyPaymentWorkflowsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param ExternalPaymentWorkflowDefinition $definition 
	* @return MozuClient
	*/
	public static function addThirdPartyPaymentWorkflowClient($definition)
	{
		$url = PaymentSettingsUrl::addThirdPartyPaymentWorkflowUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($definition);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $fullyQualifiedName 
	* @return MozuClient
	*/
	public static function deleteThirdPartyPaymentWorkflowClient($fullyQualifiedName)
	{
		$url = PaymentSettingsUrl::deleteThirdPartyPaymentWorkflowUrl($fullyQualifiedName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
