<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings\Shipping;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\Shipping\FeatureUrl;

/**
* Use the active rate providers subresource to manage entities that provide estimated shipping rate calculations. Active rate providers represent carrier configurations set up in the shipping admin service.
*/
class FeatureClient {

	/**
	* Retrieves a list of the active rate providers configured for the site.
	*
	* @return MozuClient
	*/
	public static function getActiveRateProvidersClient()
	{
		$url = FeatureUrl::getActiveRateProvidersUrl();
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new active rate provider for the site.
	*
	* @param Feature $activeRateProvider Properties of the active rate provider to create.
	* @return MozuClient
	*/
	public static function addActiveRateProviderClient($activeRateProvider)
	{
		$url = FeatureUrl::addActiveRateProviderUrl();
		$verb = "POST";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($activeRateProvider);
		return $mozuClient;

	}
	
	/**
	* Updates the active rate providers configured for the site.
	*
	* @param array|Feature $activeRateProviders Properties of the active rate provider to update.
	* @return MozuClient
	*/
	public static function updateActiveRateProvidersClient($activeRateProviders)
	{
		$url = FeatureUrl::updateActiveRateProvidersUrl();
		$verb = "PUT";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($activeRateProviders);
		return $mozuClient;

	}
	
	
}

?>

