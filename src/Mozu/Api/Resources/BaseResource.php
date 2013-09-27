<?php
namespace Mozu\Api\Resources;

use Mozu\Api\ApiContext;
use Mozu\Api\MozuClient;
use Mozu\Api\Headers;
use Mozu\Api\Resources\Platform\TenantResource;


class BaseResource {
	
	
	protected function SetContext(ApiContext $apiContext, MozuClient $client, $useTenantUrl)
	{
		$apiContext = $this->validateContext($useTenantUrl, $apiContext);
		$url = $apiContext->getBaseUrl();
	
		if ($useTenantUrl == TRUE)
			$url = $apiContext->getTenantUrl();
	
		$client = $client->withBaseUrl($url)
				->withContext($apiContext->getTenantId(), $apiContext->getSiteGroupId(), $apiContext->getSiteId());
		
		$authTicket = $apiContext->getAppAuthTicket();
		if (isset($authTicket) && !empty($authTicket))  {
			echo "auth ticket " . $apiContext->getAppAuthTicket() . "\n";
			$client = $client->AddHeader(Headers::getAppClaimsHeader(), $apiContext->getAppAuthTicket());
		}
		
		return $client;
	}
	
	 
	private function validateContext($useTenantUrl, ApiContext $apiContext)
	{
		if ($useTenantUrl == TRUE)
		{
			$tenantId = $apiContext->getTenantId();
			if (!isset($tenantId) or empty($tenantId))
				throw new \Exception("TenantId is missing");
	
			$tenantUrl = $apiContext->getTenantUrl();
			if (!isset($tenantUrl) || empty($tenantUrl))
			{
				$tenantContext = new ApiContext();
				$tenantContext->setBaseUrl($apiContext->getBaseUrl());
				$tenantResource = new TenantResource($tenantContext);
				$tenant = $tenantResource->GetTenant($apiContext->getTenantId());
	
				if ($tenant == null)
					throw new \Exception("Tenant "+$apiContext->getTenantId()+" Not found");
				$apiContext->setContext($tenant);
			}
		}
		else
		{
			$baseUrl = $apiContext->getBaseUrl();
			if (!isset($baseUrl) or empty($baseUrl))
				throw new \Exception("Base Url is missing");
		}
		
		return $apiContext;
	}
}

?>