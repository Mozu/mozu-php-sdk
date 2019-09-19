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
use Mozu\Api\Urls\Platform\SiteDataUrl;


/**
* Use the site data resource to store site-level information required for a third-party application in the Mozu database.
*/
class SiteDataClient {

	/**
	* 
	*
	* @param string $dbEntryQuery The database entry query string used to retrieve the record information.
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getDBValueClient($dbEntryQuery, $responseFields =  null)
	{
		$url = SiteDataUrl::getDBValueUrl($dbEntryQuery, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	* @return MozuClient
	*/
	public static function createDBValueClient($value, $dbEntryQuery)
	{
		$url = SiteDataUrl::createDBValueUrl($dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($value);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $dbEntryQuery The database entry query string used to update the record information.
	* @param string $value The database value to update.
	* @return MozuClient
	*/
	public static function updateDBValueClient($value, $dbEntryQuery)
	{
		$url = SiteDataUrl::updateDBValueUrl($dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($value);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $dbEntryQuery The database entry string to delete.
	* @return MozuClient
	*/
	public static function deleteDBValueClient($dbEntryQuery)
	{
		$url = SiteDataUrl::deleteDBValueUrl($dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

