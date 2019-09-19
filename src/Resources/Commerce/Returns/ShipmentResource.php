<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Returns;

use Mozu\Api\Clients\Commerce\Returns\ShipmentClient;
use Mozu\Api\ApiContext;


/**
* Use the Return Shipments subresource to manage shipments for a return replacement.
*/
class ShipmentResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param string $responseFields 
	* @param string $returnId Unique identifier of the return associated with the replacement shipment to retrieve.
	* @param string $shipmentId Unique identifier of the return replacement shipment to retrieve.
	* @return Shipment 
	* @deprecated deprecated since version 1.17
	*/
	public function getShipment($returnId, $shipmentId, $responseFields =  null)
	{
		$mozuClient = ShipmentClient::getShipmentClient($returnId, $shipmentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @param string $returnId Unique identifier of the return associated with the replacement shipment to retrieve.
	* @param string $shipmentId Unique identifier of the return replacement shipment to retrieve.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getShipmentAsync($returnId, $shipmentId, $responseFields =  null)
	{
		$mozuClient = ShipmentClient::getShipmentClient($returnId, $shipmentId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $returnId Unique identifier of the return for which to create replacement package shipments.
	* @param array|string $packageIds List of packages in the return replacement shipment.
	* @return array|Package 
	* @deprecated deprecated since version 1.17
	*/
	public function createPackageShipments($packageIds, $returnId)
	{
		$mozuClient = ShipmentClient::createPackageShipmentsClient($packageIds, $returnId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $returnId Unique identifier of the return for which to create replacement package shipments.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createPackageShipmentsAsync($packageIds, $returnId)
	{
		$mozuClient = ShipmentClient::createPackageShipmentsClient($packageIds, $returnId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $returnId Unique identifier of the return associated with the replacement shipment to delete.
	* @param string $shipmentId Unique identifier of the return replacement shipment to delete.
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteShipment($returnId, $shipmentId)
	{
		$mozuClient = ShipmentClient::deleteShipmentClient($returnId, $shipmentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $returnId Unique identifier of the return associated with the replacement shipment to delete.
	* @param string $shipmentId Unique identifier of the return replacement shipment to delete.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteShipmentAsync($returnId, $shipmentId)
	{
		$mozuClient = ShipmentClient::deleteShipmentClient($returnId, $shipmentId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

