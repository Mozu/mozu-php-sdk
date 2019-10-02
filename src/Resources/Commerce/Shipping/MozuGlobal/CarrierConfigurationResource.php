<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Shipping\MozuGlobal;

use Mozu\Api\Clients\Commerce\Shipping\MozuGlobal\CarrierConfigurationClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class CarrierConfigurationResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param string $carrierId 
	* @param string $localeCode 
	* @return array|ServiceType 
	* @deprecated deprecated since version 1.17
	*/
	public function getCarrierServiceTypes($carrierId, $localeCode)
	{
		$mozuClient = CarrierConfigurationClient::getCarrierServiceTypesClient($carrierId, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $carrierId 
	* @param string $localeCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCarrierServiceTypesAsync($carrierId, $localeCode)
	{
		$mozuClient = CarrierConfigurationClient::getCarrierServiceTypesClient($carrierId, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $localeCode 
	* @return array|ServiceType 
	* @deprecated deprecated since version 1.17
	*/
	public function getAllServiceTypes($localeCode)
	{
		$mozuClient = CarrierConfigurationClient::getAllServiceTypesClient($localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $localeCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAllServiceTypesAsync($localeCode)
	{
		$mozuClient = CarrierConfigurationClient::getAllServiceTypesClient($localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
