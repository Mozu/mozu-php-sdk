<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Carts;



class Cart
{
		public $channelCode;
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		return $this;
	}

		public $currencyCode;
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
	
	public function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;
		return $this;
	}

		public $customerInteractionType;
	public function getCustomerInteractionType() {
		return $this->customerInteractionType;
	}
	
	public function setCustomerInteractionType($customerInteractionType) {
		$this->customerInteractionType = $customerInteractionType;
		return $this;
	}

		public $discountedSubtotal;
	public function getDiscountedSubtotal() {
		return $this->discountedSubtotal;
	}
	
	public function setDiscountedSubtotal($discountedSubtotal) {
		$this->discountedSubtotal = $discountedSubtotal;
		return $this;
	}

		public $discountedTotal;
	public function getDiscountedTotal() {
		return $this->discountedTotal;
	}
	
	public function setDiscountedTotal($discountedTotal) {
		$this->discountedTotal = $discountedTotal;
		return $this;
	}

		public $discountTotal;
	public function getDiscountTotal() {
		return $this->discountTotal;
	}
	
	public function setDiscountTotal($discountTotal) {
		$this->discountTotal = $discountTotal;
		return $this;
	}

		public $expirationDate;
	public function getExpirationDate() {
		return $this->expirationDate;
	}
	
	public function setExpirationDate($expirationDate) {
		$this->expirationDate = $expirationDate;
		return $this;
	}

		public $feeTotal;
	public function getFeeTotal() {
		return $this->feeTotal;
	}
	
	public function setFeeTotal($feeTotal) {
		$this->feeTotal = $feeTotal;
		return $this;
	}

		public $handlingTaxTotal;
	public function getHandlingTaxTotal() {
		return $this->handlingTaxTotal;
	}
	
	public function setHandlingTaxTotal($handlingTaxTotal) {
		$this->handlingTaxTotal = $handlingTaxTotal;
		return $this;
	}

		public $id;
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

		public $itemTaxTotal;
	public function getItemTaxTotal() {
		return $this->itemTaxTotal;
	}
	
	public function setItemTaxTotal($itemTaxTotal) {
		$this->itemTaxTotal = $itemTaxTotal;
		return $this;
	}

		public $lastValidationDate;
	public function getLastValidationDate() {
		return $this->lastValidationDate;
	}
	
	public function setLastValidationDate($lastValidationDate) {
		$this->lastValidationDate = $lastValidationDate;
		return $this;
	}

		public $shippingSubTotal;
	public function getShippingSubTotal() {
		return $this->shippingSubTotal;
	}
	
	public function setShippingSubTotal($shippingSubTotal) {
		$this->shippingSubTotal = $shippingSubTotal;
		return $this;
	}

		public $shippingTaxTotal;
	public function getShippingTaxTotal() {
		return $this->shippingTaxTotal;
	}
	
	public function setShippingTaxTotal($shippingTaxTotal) {
		$this->shippingTaxTotal = $shippingTaxTotal;
		return $this;
	}

		public $shippingTotal;
	public function getShippingTotal() {
		return $this->shippingTotal;
	}
	
	public function setShippingTotal($shippingTotal) {
		$this->shippingTotal = $shippingTotal;
		return $this;
	}

		public $siteId;
	public function getSiteId() {
		return $this->siteId;
	}
	
	public function setSiteId($siteId) {
		$this->siteId = $siteId;
		return $this;
	}

		public $subtotal;
	public function getSubtotal() {
		return $this->subtotal;
	}
	
	public function setSubtotal($subtotal) {
		$this->subtotal = $subtotal;
		return $this;
	}

		public $taxTotal;
	public function getTaxTotal() {
		return $this->taxTotal;
	}
	
	public function setTaxTotal($taxTotal) {
		$this->taxTotal = $taxTotal;
		return $this;
	}

		public $tenantId;
	public function getTenantId() {
		return $this->tenantId;
	}
	
	public function setTenantId($tenantId) {
		$this->tenantId = $tenantId;
		return $this;
	}

		public $total;
	public function getTotal() {
		return $this->total;
	}
	
	public function setTotal($total) {
		$this->total = $total;
		return $this;
	}

		public $userId;
	public function getUserId() {
		return $this->userId;
	}
	
	public function setUserId($userId) {
		$this->userId = $userId;
		return $this;
	}

		public $visitId;
	public function getVisitId() {
		return $this->visitId;
	}
	
	public function setVisitId($visitId) {
		$this->visitId = $visitId;
		return $this;
	}

		public $webSessionId;
	public function getWebSessionId() {
		return $this->webSessionId;
	}
	
	public function setWebSessionId($webSessionId) {
		$this->webSessionId = $webSessionId;
		return $this;
	}

		public $auditInfo;
	public function getAuditInfo() {
		return $this->auditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->auditInfo = $auditInfo;
		return $this;
	}

		public $changeMessages;
	public function getChangeMessages() {
		return $this->changeMessages;
	}
	
	public function setChangeMessages($changeMessages) {
		$this->changeMessages = $changeMessages;
		return $this;
	}

		public $fulfillmentInfo;
	public function getFulfillmentInfo() {
		return $this->fulfillmentInfo;
	}
	
	public function setFulfillmentInfo($fulfillmentInfo) {
		$this->fulfillmentInfo = $fulfillmentInfo;
		return $this;
	}

		public $items;
	public function getItems() {
		return $this->items;
	}
	
	public function setItems($items) {
		$this->items = $items;
		return $this;
	}

		public $orderDiscounts;
	public function getOrderDiscounts() {
		return $this->orderDiscounts;
	}
	
	public function setOrderDiscounts($orderDiscounts) {
		$this->orderDiscounts = $orderDiscounts;
		return $this;
	}

}

?>
