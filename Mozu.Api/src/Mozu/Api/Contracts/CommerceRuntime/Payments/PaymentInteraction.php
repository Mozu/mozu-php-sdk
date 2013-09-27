<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Payments;



/**
*	Properties of a resulting payment interaction that occurs when a payment action is performed.
*/
class PaymentInteraction
{
	/**
	*If applicable, the total monetary amount associated with this payment interaction.
	*/
	public $Amount;
	public function getAmount() {
		return $this->Amount;
	}
	
	public function setAmount($amount) {
		$this->Amount = $amount;
		return $this;
	}

	/**
	*If applicable, the check number associated with this payment interaction.
	*/
	public $CheckNumber;
	public function getCheckNumber() {
		return $this->CheckNumber;
	}
	
	public function setCheckNumber($checkNumber) {
		$this->CheckNumber = $checkNumber;
		return $this;
	}

	/**
	*If required by the payment gateway, the authorization code of the transaction.
	*/
	public $GatewayAuthCode;
	public function getGatewayAuthCode() {
		return $this->GatewayAuthCode;
	}
	
	public function setGatewayAuthCode($gatewayAuthCode) {
		$this->GatewayAuthCode = $gatewayAuthCode;
		return $this;
	}

	/**
	*AVS codes supplied by the payment gateway.
	*/
	public $GatewayAVSCodes;
	public function getGatewayAVSCodes() {
		return $this->GatewayAVSCodes;
	}
	
	public function setGatewayAVSCodes($gatewayAVSCodes) {
		$this->GatewayAVSCodes = $gatewayAVSCodes;
		return $this;
	}

	/**
	*CVV2 codes supplied by the payment gateway.
	*/
	public $GatewayCVV2Codes;
	public function getGatewayCVV2Codes() {
		return $this->GatewayCVV2Codes;
	}
	
	public function setGatewayCVV2Codes($gatewayCVV2Codes) {
		$this->GatewayCVV2Codes = $gatewayCVV2Codes;
		return $this;
	}

	/**
	*Unique identifier of the gateway interaction. Used for credit card transactions where the payment creates a GatewayInteractionId for each interaction. System-supplied and read-only.
	*/
	public $GatewayInteractionId;
	public function getGatewayInteractionId() {
		return $this->GatewayInteractionId;
	}
	
	public function setGatewayInteractionId($gatewayInteractionId) {
		$this->GatewayInteractionId = $gatewayInteractionId;
		return $this;
	}

	/**
	*Response code from the gateway associated with the payment interaction. For example, if the gateway returns "Not Authorized," an interaction for voiding the payment transaction would result.
	*/
	public $GatewayResponseCode;
	public function getGatewayResponseCode() {
		return $this->GatewayResponseCode;
	}
	
	public function setGatewayResponseCode($gatewayResponseCode) {
		$this->GatewayResponseCode = $gatewayResponseCode;
		return $this;
	}

	/**
	*Unique identifier of the gateway transaction associated with the payment interaction.
	*/
	public $GatewayTransactionId;
	public function getGatewayTransactionId() {
		return $this->GatewayTransactionId;
	}
	
	public function setGatewayTransactionId($gatewayTransactionId) {
		$this->GatewayTransactionId = $gatewayTransactionId;
		return $this;
	}

	/**
	*Unique identifier of the payment interaction.
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
	*Date and time the payment interaction occured.
	*/
	public $InteractionDate;
	public function getInteractionDate() {
		return $this->InteractionDate;
	}
	
	public function setInteractionDate($interactionDate) {
		$this->InteractionDate = $interactionDate;
		return $this;
	}

	/**
	*The type of payment interaction, such as Capture or CheckReceived.
	*/
	public $InteractionType;
	public function getInteractionType() {
		return $this->InteractionType;
	}
	
	public function setInteractionType($interactionType) {
		$this->InteractionType = $interactionType;
		return $this;
	}

	/**
	*If true, the payment interaction was manually defined s part of offline order processing.
	*/
	public $IsManual;
	public function getIsManual() {
		return $this->IsManual;
	}
	
	public function setIsManual($isManual) {
		$this->IsManual = $isManual;
		return $this;
	}

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $ISOCurrencyCode;
	public function getISOCurrencyCode() {
		return $this->ISOCurrencyCode;
	}
	
	public function setISOCurrencyCode($iSOCurrencyCode) {
		$this->ISOCurrencyCode = $iSOCurrencyCode;
		return $this;
	}

	/**
	*If true, this payment interaction repeats on a scheduled interval.
	*/
	public $IsRecurring;
	public function getIsRecurring() {
		return $this->IsRecurring;
	}
	
	public function setIsRecurring($isRecurring) {
		$this->IsRecurring = $isRecurring;
		return $this;
	}

	/**
	*Note content entered for a payment interaction.
	*/
	public $Note;
	public function getNote() {
		return $this->Note;
	}
	
	public function setNote($note) {
		$this->Note = $note;
		return $this;
	}

	/**
	*Unique identifier of the order associated with this payment interaction.
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
	*Unique identifier of the payment associated with this transaction.
	*/
	public $PaymentId;
	public function getPaymentId() {
		return $this->PaymentId;
	}
	
	public function setPaymentId($paymentId) {
		$this->PaymentId = $paymentId;
		return $this;
	}

	/**
	*Unique identifier of previous interaction that this payment interaction is modifying. For example, when refunding a payment, the crediting interaction would reference the capture interaction.
	*/
	public $PaymentTransactionInteractionIdReference;
	public function getPaymentTransactionInteractionIdReference() {
		return $this->PaymentTransactionInteractionIdReference;
	}
	
	public function setPaymentTransactionInteractionIdReference($paymentTransactionInteractionIdReference) {
		$this->PaymentTransactionInteractionIdReference = $paymentTransactionInteractionIdReference;
		return $this;
	}

	/**
	*The status of this payment interaction. Possible values are "Success" or "Failure".
	*/
	public $Status;
	public function getStatus() {
		return $this->Status;
	}
	
	public function setStatus($status) {
		$this->Status = $status;
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
