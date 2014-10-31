<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\Checkout;

use Mozu\Api\Clients\Commerce\Settings\Checkout\PaymentSettingsClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\SiteSettings\Order\ExternalPaymentWorkflowDefinition;

/**
* Use the Payment Settings resource to specify settings when creating payments for order checkout on the site.
*/
class PaymentSettingsResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	

	/**
	* Retrieves the details of the third-party payment service workflows configured for the site.
	*
	* @return array|ExternalPaymentWorkflowDefinition 
	*/
	public function getThirdPartyPaymentWorkflows()
	{
		$mozuClient = PaymentSettingsClient::getThirdPartyPaymentWorkflowsClient();
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	
}

?>

