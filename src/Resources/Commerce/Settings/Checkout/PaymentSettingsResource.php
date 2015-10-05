<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\Checkout;

use Mozu\Api\Clients\Commerce\Settings\Checkout\PaymentSettingsClient;
use Mozu\Api\ApiContext;


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
	* checkout-paymentsettings Get GetThirdPartyPaymentWorkflowWithValues description DOCUMENT_HERE 
	*
	* @param string $fullyQualifiedName 
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @return ExternalPaymentWorkflowDefinition 
	* @deprecated deprecated since version 1.17
	*/
	public function getThirdPartyPaymentWorkflowWithValues($fullyQualifiedName, $responseFields =  null)
	{
		$mozuClient = PaymentSettingsClient::getThirdPartyPaymentWorkflowWithValuesClient($fullyQualifiedName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* checkout-paymentsettings Get GetThirdPartyPaymentWorkflowWithValues description DOCUMENT_HERE 
	*
	* @param string $fullyQualifiedName 
	* @param string $responseFields A list or array of fields returned for a call. These fields may be customized and may be used for various types of data calls in Mozu. For example, responseFields are returned for retrieving or updating attributes, carts, and messages in Mozu.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getThirdPartyPaymentWorkflowWithValuesAsync($fullyQualifiedName, $responseFields =  null)
	{
		$mozuClient = PaymentSettingsClient::getThirdPartyPaymentWorkflowWithValuesClient($fullyQualifiedName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the third-party payment service workflows configured for the site.
	*
	* @return array|ExternalPaymentWorkflowDefinition 
	* @deprecated deprecated since version 1.17
	*/
	public function getThirdPartyPaymentWorkflows()
	{
		$mozuClient = PaymentSettingsClient::getThirdPartyPaymentWorkflowsClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the third-party payment service workflows configured for the site.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getThirdPartyPaymentWorkflowsAsync()
	{
		$mozuClient = PaymentSettingsClient::getThirdPartyPaymentWorkflowsClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* checkout-paymentsettings Put AddThirdPartyPaymentWorkflow description DOCUMENT_HERE 
	*
	* @param ExternalPaymentWorkflowDefinition $definition Properties of an external payment processing workflow defined for the site. At this time, only PayPal Express is supported.
	* @deprecated deprecated since version 1.17
	*/
	public function addThirdPartyPaymentWorkflow($definition)
	{
		$mozuClient = PaymentSettingsClient::addThirdPartyPaymentWorkflowClient($definition);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* checkout-paymentsettings Put AddThirdPartyPaymentWorkflow description DOCUMENT_HERE 
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addThirdPartyPaymentWorkflowAsync($definition)
	{
		$mozuClient = PaymentSettingsClient::addThirdPartyPaymentWorkflowClient($definition);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* checkout-paymentsettings Delete DeleteThirdPartyPaymentWorkflow description DOCUMENT_HERE 
	*
	* @param string $fullyQualifiedName 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteThirdPartyPaymentWorkflow($fullyQualifiedName)
	{
		$mozuClient = PaymentSettingsClient::deleteThirdPartyPaymentWorkflowClient($fullyQualifiedName);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* checkout-paymentsettings Delete DeleteThirdPartyPaymentWorkflow description DOCUMENT_HERE 
	*
	* @param string $fullyQualifiedName 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteThirdPartyPaymentWorkflowAsync($fullyQualifiedName)
	{
		$mozuClient = PaymentSettingsClient::deleteThirdPartyPaymentWorkflowClient($fullyQualifiedName);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

