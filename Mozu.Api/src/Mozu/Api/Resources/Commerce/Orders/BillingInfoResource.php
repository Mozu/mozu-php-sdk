<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Orders\BillingInfoClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Use the Billing Info subresource to manage the billing information stored for an order.
*/
class BillingInfoResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the billing information associated with an order.
	*
	* @param bool $draft If true, retrieve the draft version of the order billing information, which might include uncommitted changes.
	* @param string $orderId Unique identifier of the order.
	* @return BillingInfo 
	*/
	public function getBillingInfo($draft, $orderId)
	{
		$mozuClient = BillingInfoClient::getBillingInfoClient($draft, $orderId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the billing information supplied for an order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to set the billing information by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version If applicable, the version of the order or draft for which to set the billing information.
	* @param BillingInfo $billingInfo The properties of the order billing information to update.
	* @return BillingInfo 
	*/
	public function setBillingInfo($orderId, $updateMode, $version, $billingInfo)
	{
		$mozuClient = BillingInfoClient::setBillingInfoClient($orderId, $updateMode, $version, $billingInfo);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

