<?php
namespace Mozu\Api;


class ApiException extends \RuntimeException {
	private $correlationId;
	private $apiContext;
	private $additionalErrorData;
	private $errorCode;
	private $applicationName;
	private $items;
	
	public function __construct($message,  $code) {
		return parent::__construct($message, $code);
	}
	

	public function getCorrelationId() {
		return $this->correlationId;
	}

	public function getApiContext() {
		return $this->apiContext;
	}


	public function getItems() {
		return $this->items;
	}


	public function setCorrelationId($correlationId) {
		$this->correlationId = $correlationId;
	}

	public function setApiContext($apiContext) {
		$this->apiContext = $apiContext;
	}

	public function setItems($items) {
		$this->items = $items;
	}

	public function getAdditionalErrorData() {
		return $this->additionalErrorData;
	}

	public function setAdditionalErrorData($additionalErrorData) {
		$this->additionalErrorData = $additionalErrorData;
		return $this;
	}

	public function getErrorCode() {
		return $this->errorCode;
	}

	public function setErrorCode($errorCode) {
		$this->errorCode = $errorCode;
		return $this;
	}

	public function getApplicationName() {
		return $this->applicationName;
	}

	public function setApplicationName($applicationName) {
		$this->applicationName = $applicationName;
		return $this;
	}



}

?>