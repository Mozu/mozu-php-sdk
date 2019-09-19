<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\ReturnSettingsUrl;


/**
* 
*/
class ReturnSettingsClient {

	/**
	* 
	*
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getReturnSettingsClient($responseFields =  null)
	{
		$url = ReturnSettingsUrl::getReturnSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param ReturnSettings $returnSettings 
	* @return MozuClient
	*/
	public static function createReturnSettingsClient($returnSettings, $responseFields =  null)
	{
		$url = ReturnSettingsUrl::createReturnSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($returnSettings);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param ReturnSettings $returnSettings 
	* @return MozuClient
	*/
	public static function updateReturnSettingsClient($returnSettings, $responseFields =  null)
	{
		$url = ReturnSettingsUrl::updateReturnSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($returnSettings);
		return $mozuClient;

	}
	
	
}

?>

