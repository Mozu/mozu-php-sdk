<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Checkouts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Checkouts\DestinationUrl;


/**
* 
*/
class DestinationClient {

	/**
	* 
	*
	* @param string $checkoutId 
	* @return MozuClient
	*/
	public static function getDestinationsClient($checkoutId)
	{
		$url = DestinationUrl::getDestinationsUrl($checkoutId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $checkoutId 
	* @param string $destinationId 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getDestinationClient($checkoutId, $destinationId, $responseFields =  null)
	{
		$url = DestinationUrl::getDestinationUrl($checkoutId, $destinationId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $checkoutId 
	* @param string $responseFields 
	* @param Destination $destination 
	* @return MozuClient
	*/
	public static function addDestinationClient($destination, $checkoutId, $responseFields =  null)
	{
		$url = DestinationUrl::addDestinationUrl($checkoutId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($destination);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $checkoutId 
	* @param string $destinationId 
	* @param string $responseFields 
	* @param Destination $destination 
	* @return MozuClient
	*/
	public static function updateDestinationClient($destination, $checkoutId, $destinationId, $responseFields =  null)
	{
		$url = DestinationUrl::updateDestinationUrl($checkoutId, $destinationId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($destination);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $checkoutId 
	* @param string $destinationId 
	* @return MozuClient
	*/
	public static function removeDestinationClient($checkoutId, $destinationId)
	{
		$url = DestinationUrl::removeDestinationUrl($checkoutId, $destinationId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
