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
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Temporarily hold a product from inventory while a shopper is filling out payment information. Create a product reservation when a shopper proceeds to check out and then release the reservation when the order process is complete.
*/
class ProductReservationResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of product reservations according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return ProductReservationCollection 
	*/
	public function getProductReservations($filter, $pageSize, $sortBy, $startIndex)
	{
		$mozuClient = ProductReservationClient::getProductReservationsClient($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the details of a product reservation.
	*
	* @param int $productReservationId Unique identifier of the product reservation.
	* @return ProductReservation 
	*/
	public function getProductReservation($productReservationId)
	{
		$mozuClient = ProductReservationClient::getProductReservationClient($productReservationId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new product reservation for a product. This action places a hold on the product inventory for the quantity specified during the ordering process.
	*
	* @param ProductReservation $productReservation Properties of the product reservation.
	* @return ProductReservation 
	*/
	public function addProductReservation($productReservation)
	{
		$mozuClient = ProductReservationClient::addProductReservationClient($productReservation);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Commits a product reservation to decrement the product's inventory by the quantity specified then release the reservation once the order process completed successfully.
	*
	* @param int $productReservationId Unique identifier of the reservation.
	* @param int $qty Number of product items to remove from inventory.
	*/
	public function commitReservation($productReservationId, $qty)
	{
		$mozuClient = ProductReservationClient::commitReservationClient($productReservationId, $qty);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	/**
	* Updates an existing product reservation for a product. 
	*
	* @param int $productReservationId Unique identifier of the product reservation to update. 
	* @param ProductReservation $productReservation Properties of the product reservation to update. 
	* @return ProductReservation 
	*/
	public function updateProductReservation($productReservationId, $productReservation)
	{
		$mozuClient = ProductReservationClient::updateProductReservationClient($productReservationId, $productReservation);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes a product reservation. For example, delete a reservation when an order is not processed to return the product quantity back to inventory.
	*
	* @param int $productReservationId Unique identifier of the reservation.
	*/
	public function deleteProductReservation($productReservationId)
	{
		$mozuClient = ProductReservationClient::deleteProductReservationClient($productReservationId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	
}

?>

