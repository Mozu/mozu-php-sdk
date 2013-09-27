<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\PropertyTypeUrl;

/**
* Use the property types subresource to manage content properties.
*/
class PropertyTypeClient {

	/**
	* Retrieves a list of the content property types.
	*
	* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getListClient($pageSize, $startIndex)
	{
		$url = PropertyTypeUrl::getListUrl($pageSize, $startIndex);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the content property type.
	*
	* @param string $propertyTypeName The name of the content property type.
	* @return MozuClient
	*/
	public static function getClient($propertyTypeName)
	{
		$url = PropertyTypeUrl::getUrl($propertyTypeName);
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the value types associated with a content property.
	*
	* @return MozuClient
	*/
	public static function propertyValueTypesClient()
	{
		$url = PropertyTypeUrl::propertyValueTypesUrl();
		$verb = "GET";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

