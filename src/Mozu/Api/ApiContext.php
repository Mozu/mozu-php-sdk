<?php

namespace Mozu\Api;

use Mozu\Api\Contracts\Tenant\Tenant;
use Mozu\Api\Helpers\SignatureResolver;
use Mozu\Api\Security\AppAuthenticator;

interface iApiContext 
{
	public function getTenantId();
	public function getSiteId();
	public function getTenantUrl();
	public function getSiteUrl();
	public function getMasterCatalogId();
	public function getCatalogId();
	
	public function getCorrelationId();
	public function getHMACSha256();
	public function getAppAuthTicket();
	public function getUserAuthTicket();

	public function getTenant();
	
	public function setTenantId($tenantId);
	public function setSiteId($siteId);
	public function setMasterCatalogId($masterCatalogId);
	public function setCatalogId($catalogId);
	
	public function setHMACSha256($hmacSha256);
	public function setAppAuthTicket($appAuthTicket);
	public function setUserAuthTicket($userAuthTicket);
}

class ApiContext implements iApiContext {
	private $tenantId = 0;
	private $siteGroupId = null;
	private $siteId = null;
	private $masterCatalogId = null;
	private $catalogId = null;
	private $tenantUrl=null;
	private $siteUrl=null;
	private $correlationId=null;
	private $hmacSha256=null;
	
	private $tenant = null;
	private $userAuthTicket = null;
	private $appAuthTicket=null;
	
	private $constructor_signatures = array(
			'setTenantById' => array('integer'),
			'setTenantById1' => array('integer', 'integer','integer','integer'),
			'setTenant' => array('object'),
			'setTenant1' => array('object', 'object','integer','integer')
	);
	
	 public function __construct() {
	    $args = func_get_args();
	    print_r($args, true);
	    $signature = SignatureResolver::resolve($args);
	
	    if ($method = array_search($signature, $this->constructor_signatures)) {
	      call_user_func_array(array($this, $method), $args);
	    }
	    return $this;
	 }
	 
	 public function setTenantById() {
	 	$this->tenantId = func_get_arg(0);
	 }
	 
	 private function setTenantById1() {
	 	$this->tenantId = func_get_arg(0);
	 	$this->siteId = func_get_arg(1);
	 	$this->masterCatalogId = func_get_arg(2);
	 	$this->catalogId = func_get_arg(3);
	 }
	
	 
	 private function setTenant() {
	 	$this->setContextByTenant(func_get_arg(0));
	 }
	 
	
	 private function setTenant1() {
	 	$this->siteId = func_get_arg(1);
	 	$this->masterCatalogId = func_get_arg(2);
	 	$this->catalogId = func_get_arg(3);
	 	$this->setContextByTenant(func_get_arg(0));
	 }
	
	
	private function setContextByTenant($tenant) {
	 	$this->tenant = $tenant;
	 	$this->tenantId = $tenant->id;
	 	$this->tenantUrl = $tenant->domain;
	 	 //echo($this->tenantUrl);
	 	//if (count($this->tenant->sites) == 1) {
	 	//	$this->siteId = $tenant->sites[0]->id;
	 	//}
	 	 
	 	if ( ($this->masterCatalogId == null || $this->masterCatalogId <=0) && count($tenant->masterCatalogs) == 1 ) {
	 		$this->masterCatalogId = $tenant->masterCatalogs[0]->id;
	 	
	 		if (count($this->tenant->masterCatalogs[0]->catalogs) == 1)
	 			$this->catalogId = $tenant->masterCatalogs[0]->catalogs[0]->id;
	 	}
	}
	
	public function getTenantId() {
		return $this->tenantId;
	}

	public function getSiteId() {
		return $this->siteId;
	}

	public function getTenantUrl() {
		return $this->tenantUrl;
	}

	public function getSiteUrl() {
		return $this->siteUrl;
	}

	public function getMasterCatalogId() {
		return $this->masterCatalogId;
	}

	public function getCatalogId() {
		return $this->catalogId;
	}

	public function getCorrelationId() {
		return $this->correlationId;
	}

	public function getHMACSha256() {
		return $this->hmacSha256;
	}

	public function getAppAuthTicket() {
		return $this->appAuthTicket;
	}

	public function getUserAuthTicket() {
		return $this->userAuthTicket;
	}
	
	public function getTenant() {
		return $this->tenant;
	}
	
	public function setTenantId($tenantId) {
		$this->tenantId = $tenantId;
		return $this;
	}
	
	public function setSiteId($siteId) {
		$this->siteId = $siteId;
		return $this;
	}
	
	public function setMasterCatalogId($masterCatalogId) {
		$this->masterCatalogId = $masterCatalogId;
		return $this;
	}
	
	public function setCatalogId($catalogId) {
		$this->catalogId = $catalogId;
		return $this;
	}
	
	public function setHmacSha256($hmacSha256) {
		$this->hmacSha256 = $hmacSha256;
		return $this;
	}
	
	public function setUserAuthTicket($userAuthTicket) {
		$this->userAuthTicket = $userAuthTicket;
		return $this;
	}
	
	public function setAppAuthTicket($appAuthTicket) {
		$this->appAuthTicket = $appAuthTicket;
		return $this;
	}
	
}

?>