<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Orders\BillingInfoUrl;


/**
* Use the Billing Info subresource to manage the billing information stored for an order.
*/
class BillingInfoClient {

	/**
	* 
	*
	* @param bool $draft If true, retrieve the draft version of the order billing information, which might include uncommitted changes.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getBillingInfoClient($orderId, $draft =  null, $responseFields =  null)
	{
		$url = BillingInfoUrl::getBillingInfoUrl($draft, $orderId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields 
	* @param string $updateMode Specifies whether to set the billing information by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version 
	* @param BillingInfo $billingInfo The properties of the order billing information to update.
	* @return MozuClient
	*/
	public static function setBillingInfoClient($billingInfo, $orderId, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$url = BillingInfoUrl::setBillingInfoUrl($orderId, $responseFields, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($billingInfo);
		return $mozuClient;

	}
	
	
}

?>

