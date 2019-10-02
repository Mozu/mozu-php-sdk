<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Shipping\Admin;

use Mozu\Api\Clients\Commerce\Shipping\Admin\CarrierConfigurationClient;
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
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CarrierConfigurationCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getConfigurations($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::getConfigurationsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getConfigurationsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::getConfigurationsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $carrierId 
	* @param string $responseFields 
	* @return CarrierConfiguration 
	* @deprecated deprecated since version 1.17
	*/
	public function getConfiguration($carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::getConfigurationClient($carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $carrierId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getConfigurationAsync($carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::getConfigurationClient($carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $carrierId 
	* @param string $responseFields 
	* @param CarrierConfiguration $carrierConfiguration 
	* @return CarrierConfiguration 
	* @deprecated deprecated since version 1.17
	*/
	public function createConfiguration($carrierConfiguration, $carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::createConfigurationClient($carrierConfiguration, $carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $carrierId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createConfigurationAsync($carrierConfiguration, $carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::createConfigurationClient($carrierConfiguration, $carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $carrierId 
	* @param string $responseFields 
	* @param CarrierConfiguration $carrierConfiguration 
	* @return CarrierConfiguration 
	* @deprecated deprecated since version 1.17
	*/
	public function updateConfiguration($carrierConfiguration, $carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::updateConfigurationClient($carrierConfiguration, $carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $carrierId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateConfigurationAsync($carrierConfiguration, $carrierId, $responseFields =  null)
	{
		$mozuClient = CarrierConfigurationClient::updateConfigurationClient($carrierConfiguration, $carrierId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $carrierId 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteConfiguration($carrierId)
	{
		$mozuClient = CarrierConfigurationClient::deleteConfigurationClient($carrierId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $carrierId 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteConfigurationAsync($carrierId)
	{
		$mozuClient = CarrierConfigurationClient::deleteConfigurationClient($carrierId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
