<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\ProductReservationClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class ProductReservationResource {

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
	* @param string $sortBy 
	* @param int $startIndex 
	* @return ProductReservationCollection 
	*/
	public function getProductReservations($dataViewMode, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductReservationClient::getProductReservationsClient($dataViewMode, $filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $productReservationId 
	* @return ProductReservation 
	*/
	public function getProductReservation($dataViewMode,  $productReservationId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductReservationClient::getProductReservationClient($dataViewMode,  $productReservationId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param ProductReservation $productReservation 
	* @return ProductReservation 
	*/
	public function addProductReservation($dataViewMode, $productReservation, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductReservationClient::addProductReservationClient($dataViewMode, $productReservation, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $productReservationId 
	* @param int $qty 
	*/
	public function commitReservation($dataViewMode,  $productReservationId,  $qty, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductReservationClient::commitReservationClient($dataViewMode,  $productReservationId,  $qty, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Updates an existing product reservation for a product. 
	*
	* @param int $productReservationId Unique identifier of the product reservation to update. 
	* @param ProductReservation $productReservation Properties of the product reservation to update. 
	* @return ProductReservation 
	*/
	public function updateProductReservation($dataViewMode, $productReservation,  $productReservationId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductReservationClient::updateProductReservationClient($dataViewMode, $productReservation,  $productReservationId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $productReservationId 
	*/
	public function deleteProductReservation($dataViewMode,  $productReservationId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductReservationClient::deleteProductReservationClient($dataViewMode,  $productReservationId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

