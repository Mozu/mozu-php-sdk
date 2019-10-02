<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\Clients\Commerce\Catalog\Admin\ProductReservationClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Headers;

/**
* Temporarily hold a product from inventory while a shopper is filling out payment information. Create a product reservation when a shopper proceeds to check out and then release the reservation when the order process is complete.
*/
class ProductReservationResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize Used to page results from a query. Indicates the maximum number of entities to return from a query. Default value: 20. Max value: 200.
	* @param string $responseFields 
	* @param string $sortBy The element to sort the results by and the order in which the results appear. Either ascending order (a-z) which accepts 'asc' or 'asc' or descending order (z-a) which accepts 'desc' or 'desc'. The sortBy parameter follows an available property.
	* @param int $startIndex 
	* @return ProductReservationCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getProductReservations($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ProductReservationClient::getProductReservationsClient($this->dataViewMode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize Used to page results from a query. Indicates the maximum number of entities to return from a query. Default value: 20. Max value: 200.
	* @param string $responseFields 
	* @param string $sortBy The element to sort the results by and the order in which the results appear. Either ascending order (a-z) which accepts 'asc' or 'asc' or descending order (z-a) which accepts 'desc' or 'desc'. The sortBy parameter follows an available property.
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getProductReservationsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ProductReservationClient::getProductReservationsClient($this->dataViewMode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param int $productReservationId Unique identifier of the product reservation.
	* @param string $responseFields 
	* @return ProductReservation 
	* @deprecated deprecated since version 1.17
	*/
	public function getProductReservation($productReservationId, $responseFields =  null)
	{
		$mozuClient = ProductReservationClient::getProductReservationClient($this->dataViewMode, $productReservationId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param int $productReservationId Unique identifier of the product reservation.
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getProductReservationAsync($productReservationId, $responseFields =  null)
	{
		$mozuClient = ProductReservationClient::getProductReservationClient($this->dataViewMode, $productReservationId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
	* @param array|ProductReservation $productReservations Details of the product reservations to add.
	* @return array|ProductReservation 
	* @deprecated deprecated since version 1.17
	*/
	public function addProductReservations($productReservations, $skipInventoryCheck =  null)
	{
		$mozuClient = ProductReservationClient::addProductReservationsClient($this->dataViewMode, $productReservations, $skipInventoryCheck);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addProductReservationsAsync($productReservations, $skipInventoryCheck =  null)
	{
		$mozuClient = ProductReservationClient::addProductReservationsClient($this->dataViewMode, $productReservations, $skipInventoryCheck);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param array|ProductReservation $productReservations List of unique identifiers of the reservations to commit.
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function commitReservations($productReservations)
	{
		$mozuClient = ProductReservationClient::commitReservationsClient($this->dataViewMode, $productReservations);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function commitReservationsAsync($productReservations)
	{
		$mozuClient = ProductReservationClient::commitReservationsClient($this->dataViewMode, $productReservations);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param bool $skipInventoryCheck If true, skip the inventory validation process when updating this product reservation.
	* @param array|ProductReservation $productReservations Properties of the product reservations to update.
	* @return array|ProductReservation 
	* @deprecated deprecated since version 1.17
	*/
	public function updateProductReservations($productReservations, $skipInventoryCheck =  null)
	{
		$mozuClient = ProductReservationClient::updateProductReservationsClient($this->dataViewMode, $productReservations, $skipInventoryCheck);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param bool $skipInventoryCheck If true, skip the inventory validation process when updating this product reservation.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateProductReservationsAsync($productReservations, $skipInventoryCheck =  null)
	{
		$mozuClient = ProductReservationClient::updateProductReservationsClient($this->dataViewMode, $productReservations, $skipInventoryCheck);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param int $productReservationId Unique identifier of the reservation.
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteProductReservation($productReservationId)
	{
		$mozuClient = ProductReservationClient::deleteProductReservationClient($this->dataViewMode, $productReservationId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param int $productReservationId Unique identifier of the reservation.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteProductReservationAsync($productReservationId)
	{
		$mozuClient = ProductReservationClient::deleteProductReservationClient($this->dataViewMode, $productReservationId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
