<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	A hold placed on product inventory for a particular product so that the quantity specified is set aside and available for purchase during the ordering process.
*/
class ProductReservation
{
	/**
	*The unique identifier of the item in the order.
	*/
	public $OrderItemId;
	public function getOrderItemId() {
		return $this->OrderItemId;
	}
	
	public function setOrderItemId($orderItemId) {
		$this->OrderItemId = $orderItemId;
		return $this;
	}

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $ProductCode;
	public function getProductCode() {
		return $this->ProductCode;
	}
	
	public function setProductCode($productCode) {
		$this->ProductCode = $productCode;
		return $this;
	}

	/**
	*The quantity of items associated with the product reservation.
	*/
	public $Quantity;
	public function getQuantity() {
		return $this->Quantity;
	}
	
	public function setQuantity($quantity) {
		$this->Quantity = $quantity;
		return $this;
	}

	/**
	*Identifier of the entity.
	*/
	public $Id;
	public function getId() {
		return $this->Id;
	}
	
	public function setId($id) {
		$this->Id = $id;
		return $this;
	}

	/**
	*Unique identifier of the order.
	*/
	public $OrderId;
	public function getOrderId() {
		return $this->OrderId;
	}
	
	public function setOrderId($orderId) {
		$this->OrderId = $orderId;
		return $this;
	}

	/**
	*Identifier and datetime stamp information recorded when creating or updating a resource entity. This value is system-supplied and read-only.
	*/
	public $AuditInfo;
	public function getAuditInfo() {
		return $this->AuditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->AuditInfo = $auditInfo;
		return $this;
	}

}

?>
