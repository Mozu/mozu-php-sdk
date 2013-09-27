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
use Mozu\Api\Urls\Commerce\Orders\ShippingInfoUrl;

/**
* Use this subresource to manage shipping information for orders.
*/
class ShippingInfoClient {

	/**
	* Retrieve a list of the shipping information for the specified order.
	*
	* @param bool $draft If true, retrieve the draft version of the order's shipping information, which might include uncommitted changes.
	* @param string $orderId Unique identifier of the order associated with the shipping information to retrieve.
	* @return MozuClient
	*/
	public static function getShippingInfoClient($draft, $orderId)
	{
		$url = ShippingInfoUrl::getShippingInfoUrl($draft, $orderId);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates one or more propertes of shipping information for the specified order.
	*
	* @param string $orderId Unique identifier of the order associated with the shipping information to update.
	* @param string $updateMode Specifies whether to set the shipping information by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version If applicable, the version of the order or draft for which to set the shipping information.
	* @param ShippingInfo $shippingInfo Container for the shipping information associated with an order.
	* @return MozuClient
	*/
	public static function setShippingInfoClient($orderId, $updateMode, $version, $shippingInfo)
	{
		$url = ShippingInfoUrl::setShippingInfoUrl($orderId, $updateMode, $version);
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($shippingInfo);
		return $mozuClient;

	}
	
	
}

?>

