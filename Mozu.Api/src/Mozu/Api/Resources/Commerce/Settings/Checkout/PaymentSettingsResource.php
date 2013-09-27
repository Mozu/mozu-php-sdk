<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\Checkout;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Settings\Checkout\PaymentSettingsClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Specify settings when creating payments for order checkout on the site.
*/
class PaymentSettingsResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of the payment settings for the specified site.
	*
	* @return PaymentSettings 
	*/
	public function getPaymentSettings()
	{
		$mozuClient = PaymentSettingsClient::getPaymentSettingsClient();
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $countryCode 
	* @return Gateway 
	*/
	public function getActiveGatewayForCountry($countryCode)
	{
		$mozuClient = PaymentSettingsClient::getActiveGatewayForCountryClient($countryCode);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @return array|GatewayDefinition 
	*/
	public function getGatewayDefinitions()
	{
		$mozuClient = PaymentSettingsClient::getGatewayDefinitionsClient();
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $gatewayId 
	* @return Gateway 
	*/
	public function getGateway($gatewayId)
	{
		$mozuClient = PaymentSettingsClient::getGatewayClient($gatewayId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param Gateway $gateway 
	* @return Gateway 
	*/
	public function createGateway($gateway)
	{
		$mozuClient = PaymentSettingsClient::createGatewayClient($gateway);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more properties in the configured payment settings for a site.
	*
	* @param PaymentSettings $paymentSettings Properties of the payment settings to use for the site.
	* @return PaymentSettings 
	*/
	public function updatePaymentSettings($paymentSettings)
	{
		$mozuClient = PaymentSettingsClient::updatePaymentSettingsClient($paymentSettings);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $gatewayId 
	* @param Gateway $gateway 
	* @return Gateway 
	*/
	public function updateGateway($gatewayId, $gateway)
	{
		$mozuClient = PaymentSettingsClient::updateGatewayClient($gatewayId, $gateway);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

