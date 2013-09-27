<?php

namespace Mozu\Api;

use Mozu\Api\Contracts\Tenant\Tenant;
use Mozu\Api\Contracts\Tenant\Domain;

class ApiContext {
	private $baseUrl=null;
	private $tenantId = 0;
	private $siteGroupId = null;
	private $siteId = null;
	private $tenantUrl=null;
	private $siteUrl=null;
	private $correlationId=null;
	private $hmacSha256=null;
	private $appAuthTicket=null;
	
	
	public function setContext($tenant) {
		$this->tenantUrl = $this->getUrl($tenant->Domain);
		
		foreach($tenant->SiteGroups as $siteGroup) {
			foreach($siteGroup->Sites as $site) {
				if ($site->Id == $this->siteId) {
					$this->siteGroupId = $site->SiteGroupId;
					break;
				}
			}
			if (!empty($this->siteGroupId)) break;
		}
	}
	
	private function getUrl($domain) {
		return "Http://" . $domain->DomainName;
	}
	
	public function getBaseUrl() {
		return $this->baseUrl;
	}
	public function setBaseUrl($baseUrl) {
		$this->baseUrl = $baseUrl;
		return $this;
	}
	
	public function getTenantId() {
		return $this->tenantId;
	}
	public function setTenantId($tenantId) {
		$this->tenantId = $tenantId;
		return $this;
	}
	
	public function getSiteGroupId() {
		return $this->siteGroupId;
	}
	public function setSiteGroupId($siteGroupId) {
		$this->siteGroupId = $siteGroupId;
		return $this;
	}
	
	public function getSiteId() {
		return $this->siteId;
	}
	public function setSiteId($siteId) {
		$this->siteId = $siteId;
		return $this;
	}
	
	public function getTenantUrl() {
		return $this->tenantUrl;
	}
	public function setTenantUrl($tenantUrl) {
		$this->tenantUrl = $tenantUrl;
		return $this;
	}
	
	public function getSiteUrl() {
		return $this->siteUrl;
	}
	public function setSiteUrl($siteUrl) {
		$this->siteUrl = $siteUrl;
		return $this;
	}
	
	public function getCorrelationId() {
		return $this->correlationId;
	}
	public function setCorrelationId($correlationId) {
		$this->correlationId = $correlationId;
		return $this;
	}
	
	public function getHmacSha256() {
		return $this->hmacSha256;
	}
	public function setHmacSha256($hmacSha256) {
		$this->hmacSha256 = $hmacSha256;
		return $this;
	}
	
	public function getAppAuthTicket() {
		return $this->appAuthTicket;
	}
	public function setAppAuthTicket($appAuthTicket) {
		$this->appAuthTicket = $appAuthTicket;
		return $this;
	}
}

?>