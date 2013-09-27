<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\LocationUrl;

/**
* List of locations where customer pages exist. Examples: Customer Welcome Page, Customer Information Page.
*/
class LocationClient {

	/**
	* Retrieves the location of a customer by providing a location ID.
	*
	* @param int $locationId Identifier of the location being retrieved.
	* @return MozuClient
	*/
	public static function getLocationClient($locationId)
	{
		$url = LocationUrl::getLocationUrl($locationId);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the location by providing a name to query by.
	*
	* @param string $name The name of the location.
	* @return MozuClient
	*/
	public static function getLocationByNameClient($name)
	{
		$url = LocationUrl::getLocationByNameUrl($name);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of locations for this particular customer.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getLocationsClient($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = LocationUrl::getLocationsUrl($filter, $pageSize, $sortBy, $startIndex);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

