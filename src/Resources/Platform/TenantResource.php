<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform;

use Mozu\Api\Clients\Platform\TenantClient;
use Mozu\Api\ApiContext;


/**
* Use the tenants resource to manage information about a Mozu tenant.
*/
class TenantResource {

				



	/**
	* Retrieve details about a specific tenant by providing the tenant ID.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $tenantId Unique identifier of the Mozu tenant.
	* @return Tenant 
	* @deprecated deprecated since version 1.17
	*/
	public function getTenant($tenantId, $responseFields =  null)
	{
		$mozuClient = TenantClient::getTenantClient($tenantId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieve details about a specific tenant by providing the tenant ID.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $tenantId Unique identifier of the Mozu tenant.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getTenantAsync($tenantId, $responseFields =  null)
	{
		$mozuClient = TenantClient::getTenantClient($tenantId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

