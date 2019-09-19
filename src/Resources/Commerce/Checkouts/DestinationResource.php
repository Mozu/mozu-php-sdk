<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Checkouts;

use Mozu\Api\Clients\Commerce\Checkouts\DestinationClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class DestinationResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param string $checkoutId 
	* @return array|Destination 
	* @deprecated deprecated since version 1.17
	*/
	public function getDestinations($checkoutId)
	{
		$mozuClient = DestinationClient::getDestinationsClient($checkoutId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $checkoutId 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDestinationsAsync($checkoutId)
	{
		$mozuClient = DestinationClient::getDestinationsClient($checkoutId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $checkoutId 
	* @param string $destinationId 
	* @param string $responseFields 
	* @return Destination 
	* @deprecated deprecated since version 1.17
	*/
	public function getDestination($checkoutId, $destinationId, $responseFields =  null)
	{
		$mozuClient = DestinationClient::getDestinationClient($checkoutId, $destinationId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $checkoutId 
	* @param string $destinationId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDestinationAsync($checkoutId, $destinationId, $responseFields =  null)
	{
		$mozuClient = DestinationClient::getDestinationClient($checkoutId, $destinationId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $checkoutId 
	* @param string $responseFields 
	* @param Destination $destination 
	* @return Destination 
	* @deprecated deprecated since version 1.17
	*/
	public function addDestination($destination, $checkoutId, $responseFields =  null)
	{
		$mozuClient = DestinationClient::addDestinationClient($destination, $checkoutId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $checkoutId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addDestinationAsync($destination, $checkoutId, $responseFields =  null)
	{
		$mozuClient = DestinationClient::addDestinationClient($destination, $checkoutId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $checkoutId 
	* @param string $destinationId 
	* @param string $responseFields 
	* @param Destination $destination 
	* @return Destination 
	* @deprecated deprecated since version 1.17
	*/
	public function updateDestination($destination, $checkoutId, $destinationId, $responseFields =  null)
	{
		$mozuClient = DestinationClient::updateDestinationClient($destination, $checkoutId, $destinationId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $checkoutId 
	* @param string $destinationId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateDestinationAsync($destination, $checkoutId, $destinationId, $responseFields =  null)
	{
		$mozuClient = DestinationClient::updateDestinationClient($destination, $checkoutId, $destinationId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $checkoutId 
	* @param string $destinationId 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function removeDestination($checkoutId, $destinationId)
	{
		$mozuClient = DestinationClient::removeDestinationClient($checkoutId, $destinationId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $checkoutId 
	* @param string $destinationId 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function removeDestinationAsync($checkoutId, $destinationId)
	{
		$mozuClient = DestinationClient::removeDestinationClient($checkoutId, $destinationId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

