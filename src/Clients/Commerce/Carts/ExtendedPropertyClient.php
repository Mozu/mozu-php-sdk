<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Carts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Carts\ExtendedPropertyUrl;


/**
* Use the Cart Extended Properties subresource to store an arbitrary number of cart extended properties such as tracking strings, marketing sources, affiliates, sales personnel/data, and so on, on a per cart basis. Each cart may have none, one, or more than one entry in the extended properties collection, and all values in the extended properties collection are represented as strings. When you create an order from a cart, all extended properties are retained from the cart and copied to the order. Refer to the subresource for more information about order extended properties.
*/
class ExtendedPropertyClient {

	/**
	* Retrieves a list of cart extended properties specified in the request.
	*
	* @return MozuClient
	*/
	public static function getExtendedPropertiesClient()
	{
		$url = ExtendedPropertyUrl::getExtendedPropertiesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds one or more specified extended properties to the carts extended properties collection.
	*
	* @param array|ExtendedProperty $extendedProperties Mozu.CommerceRuntime.Contracts.Commerce.ExtendedProperty ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function addExtendedPropertiesClient($extendedProperties)
	{
		$url = ExtendedPropertyUrl::addExtendedPropertiesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($extendedProperties);
		return $mozuClient;

	}
	
	/**
	* Updates one or more details of the extended property specified in the request.
	*
	* @param string $key Key used for metadata defined for objects, including extensible attributes, custom attributes associated with a shipping provider, and search synonyms definitions. This content may be user-defined depending on the object and usage.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param bool $upsert Any set of key value pairs to be stored in the extended properties of a cart.
	* @param ExtendedProperty $extendedProperty Mozu.CommerceRuntime.Contracts.Commerce.ExtendedProperty ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function updateExtendedPropertyClient($extendedProperty, $key, $upsert =  null, $responseFields =  null)
	{
		$url = ExtendedPropertyUrl::updateExtendedPropertyUrl($key, $responseFields, $upsert);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($extendedProperty);
		return $mozuClient;

	}
	
	/**
	* Updates one or more details of the extended properties specified in the request.
	*
	* @param bool $upsert Any set of key value pairs to be stored in the extended properties of a cart.
	* @param array|ExtendedProperty $extendedProperties Mozu.CommerceRuntime.Contracts.Commerce.ExtendedProperty ApiType DOCUMENT_HERE 
	* @return MozuClient
	*/
	public static function updateExtendedPropertiesClient($extendedProperties, $upsert =  null)
	{
		$url = ExtendedPropertyUrl::updateExtendedPropertiesUrl($upsert);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($extendedProperties);
		return $mozuClient;

	}
	
	/**
	* Deletes the extended properties cart extended properties collection.
	*
	* @param array|string $keys 
	*/
	public static function deleteExtendedPropertiesClient($keys)
	{
		$url = ExtendedPropertyUrl::deleteExtendedPropertiesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($keys);
		return $mozuClient;

	}
	
	/**
	* Deletes a specific extended property from the cart extended property collection.
	*
	* @param string $key 
	*/
	public static function deleteExtendedPropertyClient($key)
	{
		$url = ExtendedPropertyUrl::deleteExtendedPropertyUrl($key);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

