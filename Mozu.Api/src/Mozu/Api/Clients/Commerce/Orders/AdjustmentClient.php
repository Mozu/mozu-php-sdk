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
use Mozu\Api\Urls\Commerce\Orders\AdjustmentUrl;

/**
* Use this subresource to manage ad-hoc order level price adjustments.
*/
class AdjustmentClient {

	/**
	* Modify the amount charged for shipping the specified order.
	*
	* @param string $orderId Unique identifier of the order associated with the shipping adjustment.
	* @param string $updateMode Specifies whether to apply the shipping adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version If applicable, the version of the order or draft to which to apply the shipping adjustment.
	* @param Adjustment $adjustment Properties of the shipping adjustment to apply to the order.
	* @return MozuClient
	*/
	public static function applyShippingAdjustmentClient($orderId, $updateMode, $version, $adjustment)
	{
		$url = AdjustmentUrl::applyShippingAdjustmentUrl($orderId, $updateMode, $version);
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($adjustment);
		return $mozuClient;

	}
	
	/**
	* Applies a price adjustment to the specified order.
	*
	* @param string $orderId Unique identifier of the order for which to apply the adjustment.
	* @param string $updateMode Specifies whether to apply the adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version If applicable, the version of the order or draft for which to apply the adjustment.
	* @param Adjustment $adjustment Properties of the price adjustment to apply to the order.
	* @return MozuClient
	*/
	public static function applyAdjustmentClient($orderId, $updateMode, $version, $adjustment)
	{
		$url = AdjustmentUrl::applyAdjustmentUrl($orderId, $updateMode, $version);
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($adjustment);
		return $mozuClient;

	}
	
	/**
	* Removes a shipping adjustment previously applied to an order or draft.
	*
	* @param string $orderId Unique identifier of the order with the applied shipping adjustment.
	* @param string $updateMode Specifies whether to remove the shipping adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version If applicable, the version of the order or draft from which to remove the shipping adjustment.
	* @return MozuClient
	*/
	public static function removeShippingAdjustmentClient($orderId, $updateMode, $version)
	{
		$url = AdjustmentUrl::removeShippingAdjustmentUrl($orderId, $updateMode, $version);
		$verb = "DELETE";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Removes a price adjustment from the specified order.
	*
	* @param string $orderId Unique identifier of the order for which to delete the adjustment.
	* @param string $updateMode Specifies whether to remove the adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version If applicable, the version of the order or draft from which to remove the adjustment.
	* @return MozuClient
	*/
	public static function removeAdjustmentClient($orderId, $updateMode, $version)
	{
		$url = AdjustmentUrl::removeAdjustmentUrl($orderId, $updateMode, $version);
		$verb = "DELETE";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

