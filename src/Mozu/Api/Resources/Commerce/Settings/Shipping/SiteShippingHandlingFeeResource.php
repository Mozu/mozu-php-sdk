<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\Shipping;

use Mozu\Api\Clients\Commerce\Settings\Shipping\SiteShippingHandlingFeeClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\SiteSettings\Shipping\SiteShippingHandlingFee;

/**
* Use the Order Handling Fee subresource to configure any shipping and handling fees to apply to orders for this site.
*/
class SiteShippingHandlingFeeResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	

	/**
	* Retrieves the details of the order handling fee configured for the site.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return SiteShippingHandlingFee 
	*/
	public function getOrderHandlingFee($responseFields =  null)
	{
		$mozuClient = SiteShippingHandlingFeeClient::getOrderHandlingFeeClient($responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Creates a new order handling fee for the site.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param SiteShippingHandlingFee $orderHandlingFee Properties of the order handling fee to assess for order shipment.
	* @return SiteShippingHandlingFee 
	*/
	public function createOrderHandlingFee($orderHandlingFee, $responseFields =  null)
	{
		$mozuClient = SiteShippingHandlingFeeClient::createOrderHandlingFeeClient($orderHandlingFee, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates the order handling fee amount for the site.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param SiteShippingHandlingFee $orderHandlingFee The combined price for all items in the order, including all selected options but excluding any discounts.
	* @return SiteShippingHandlingFee 
	*/
	public function updateOrderHandlingFee($orderHandlingFee, $responseFields =  null)
	{
		$mozuClient = SiteShippingHandlingFeeClient::updateOrderHandlingFeeClient($orderHandlingFee, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	
}

?>

