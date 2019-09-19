<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\TenantUrl;


/**
* Use the tenants resource to manage information about a Mozu tenant.
*/
class TenantClient {

	/**
	* 
	*
	* @param string $responseFields 
	* @param int $tenantId 
	* @return MozuClient
	*/
	public static function getTenantClient($tenantId, $responseFields =  null)
	{
		$url = TenantUrl::getTenantUrl($responseFields, $tenantId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

