<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer;

use Mozu\Api\Clients\Commerce\Customer\AddressValidationRequestClient;
use Mozu\Api\ApiContext;


/**
* Use the Address Validation resource to validate addresses associated with a customer account contact.
*/
class AddressValidationRequestResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param string $responseFields 
	* @param AddressValidationRequest $addressValidationRequest Properties of the address to validate.
	* @return AddressValidationResponse 
	* @deprecated deprecated since version 1.17
	*/
	public function validateAddress($addressValidationRequest, $responseFields =  null)
	{
		$mozuClient = AddressValidationRequestClient::validateAddressClient($addressValidationRequest, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function validateAddressAsync($addressValidationRequest, $responseFields =  null)
	{
		$mozuClient = AddressValidationRequestClient::validateAddressClient($addressValidationRequest, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

