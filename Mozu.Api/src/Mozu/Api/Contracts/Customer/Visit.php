<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer;



class Visit
{
		public $BrowserLocationCode;
	public function getBrowserLocationCode() {
		return $this->BrowserLocationCode;
	}
	
	public function setBrowserLocationCode($browserLocationCode) {
		$this->BrowserLocationCode = $browserLocationCode;
		return $this;
	}

		public $CustomerId;
	public function getCustomerId() {
		return $this->CustomerId;
	}
	
	public function setCustomerId($customerId) {
		$this->CustomerId = $customerId;
		return $this;
	}

		public $Date;
	public function getDate() {
		return $this->Date;
	}
	
	public function setDate($date) {
		$this->Date = $date;
		return $this;
	}

		public $Id;
	public function getId() {
		return $this->Id;
	}
	
	public function setId($id) {
		$this->Id = $id;
		return $this;
	}

		public $LocationCode;
	public function getLocationCode() {
		return $this->LocationCode;
	}
	
	public function setLocationCode($locationCode) {
		$this->LocationCode = $locationCode;
		return $this;
	}

		public $Type;
	public function getType() {
		return $this->Type;
	}
	
	public function setType($type) {
		$this->Type = $type;
		return $this;
	}

		public $UserId;
	public function getUserId() {
		return $this->UserId;
	}
	
	public function setUserId($userId) {
		$this->UserId = $userId;
		return $this;
	}

		public $WebReferrer;
	public function getWebReferrer() {
		return $this->WebReferrer;
	}
	
	public function setWebReferrer($webReferrer) {
		$this->WebReferrer = $webReferrer;
		return $this;
	}

		public $WebSessionId;
	public function getWebSessionId() {
		return $this->WebSessionId;
	}
	
	public function setWebSessionId($webSessionId) {
		$this->WebSessionId = $webSessionId;
		return $this;
	}

		public $WebSiteId;
	public function getWebSiteId() {
		return $this->WebSiteId;
	}
	
	public function setWebSiteId($webSiteId) {
		$this->WebSiteId = $webSiteId;
		return $this;
	}

		public $Transactions;
	public function getTransactions() {
		return $this->Transactions;
	}
	
	public function setTransactions($transactions) {
		$this->Transactions = $transactions;
		return $this;
	}

}

?>
