<?php
namespace Mozu\Api;

use Mozu\Api\iApiContext;

class ApiException extends \RuntimeException {
	private $correlationId;
	private $apiContext;
	private $exceptionDetail;
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
	
	public function getExceptionDetail() {
		return $this->exceptionDetail;
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
	
	public function setExceptionDetail($exceptionDetail) {
		$this->exceptionDetail = $exceptionDetail;
	}
	
	public function setItems($items) {
		$this->items = $items;
	}
	
}

?>