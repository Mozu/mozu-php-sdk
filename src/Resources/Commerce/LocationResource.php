<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce;

use Mozu\Api\Clients\Commerce\LocationClient;
use Mozu\Api\ApiContext;


/**
* Use the Location resource to retrieve details about a location from a Mozu hosted storefront.
*/
class LocationResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param bool $includeAttributeDefinition 
	* @param string $locationCode 
	* @param string $responseFields 
	* @return Location 
	* @deprecated deprecated since version 1.17
	*/
	public function getLocation($locationCode, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getLocationClient($locationCode, $includeAttributeDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param bool $includeAttributeDefinition 
	* @param string $locationCode 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getLocationAsync($locationCode, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getLocationClient($locationCode, $includeAttributeDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param bool $includeAttributeDefinition 
	* @param string $locationUsageType System-defined location usage type code, which is DS for direct ship, SP for in-store pickup, or storeFinder.
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return LocationCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getLocationsInUsageType($locationUsageType, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getLocationsInUsageTypeClient($locationUsageType, $startIndex, $pageSize, $sortBy, $filter, $includeAttributeDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $filter 
	* @param bool $includeAttributeDefinition 
	* @param string $locationUsageType System-defined location usage type code, which is DS for direct ship, SP for in-store pickup, or storeFinder.
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getLocationsInUsageTypeAsync($locationUsageType, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getLocationsInUsageTypeClient($locationUsageType, $startIndex, $pageSize, $sortBy, $filter, $includeAttributeDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param bool $includeAttributeDefinition 
	* @param string $responseFields 
	* @return Location 
	* @deprecated deprecated since version 1.17
	*/
	public function getDirectShipLocation($includeAttributeDefinition =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getDirectShipLocationClient($includeAttributeDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param bool $includeAttributeDefinition 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDirectShipLocationAsync($includeAttributeDefinition =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getDirectShipLocationClient($includeAttributeDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param bool $includeAttributeDefinition 
	* @param string $locationCode 
	* @param string $responseFields 
	* @return Location 
	* @deprecated deprecated since version 1.17
	*/
	public function getInStorePickupLocation($locationCode, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getInStorePickupLocationClient($locationCode, $includeAttributeDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param bool $includeAttributeDefinition 
	* @param string $locationCode 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getInStorePickupLocationAsync($locationCode, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getInStorePickupLocationClient($locationCode, $includeAttributeDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param bool $includeAttributeDefinition 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return LocationCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getInStorePickupLocations($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getInStorePickupLocationsClient($startIndex, $pageSize, $sortBy, $filter, $includeAttributeDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $filter 
	* @param bool $includeAttributeDefinition 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getInStorePickupLocationsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeAttributeDefinition =  null, $responseFields =  null)
	{
		$mozuClient = LocationClient::getInStorePickupLocationsClient($startIndex, $pageSize, $sortBy, $filter, $includeAttributeDefinition, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
