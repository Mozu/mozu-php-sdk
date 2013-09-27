<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Shipping\Instance;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Shipping\Instance\InstanceCarrierUrl;

/**
* Configure the shipping carrier for the site.
*/
class InstanceCarrierClient {

	/**
	* Retrieves a list of carrier configurations according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getConfigurationsClient($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = InstanceCarrierUrl::getConfigurationsUrl($filter, $pageSize, $sortBy, $startIndex);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the carrier configuration for a specific site by providing the carrier ID.
	*
	* @param string $carrierId Identifier of the shipping carrier associated with the configuration details to retrieve.
	* @return MozuClient
	*/
	public static function getConfigurationClient($carrierId)
	{
		$url = InstanceCarrierUrl::getConfigurationUrl($carrierId);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Create a new carrier configuration for the site.
	*
	* @param string $carrierId Identifier of the carrier configuration being created.
	* @param CarrierConfiguration $carrierConfiguration The properties of the carrier configuration to create.
	* @return MozuClient
	*/
	public static function createConfigurationClient($carrierId, $carrierConfiguration)
	{
		$url = InstanceCarrierUrl::createConfigurationUrl($carrierId);
		$verb = "POST";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($carrierConfiguration);
		return $mozuClient;

	}
	
	/**
	* Update and existing shipping carrier configuration.
	*
	* @param string $carrierId Identifier of the shipping carrier configuration to update.
	* @param CarrierConfiguration $carrierConfiguration The properties of the shipping carrier configuration to update.
	* @return MozuClient
	*/
	public static function updateConfigurationClient($carrierId, $carrierConfiguration)
	{
		$url = InstanceCarrierUrl::updateConfigurationUrl($carrierId);
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($carrierConfiguration);
		return $mozuClient;

	}
	
	/**
	* Delete the shipping carrier for the site.
	*
	* @param string $carrierId Identifier of the specific shipping carrier to delete.
	*/
	public static function deleteConfigurationClient($carrierId)
	{
		$url = InstanceCarrierUrl::deleteConfigurationUrl($carrierId);
		$verb = "DELETE";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

