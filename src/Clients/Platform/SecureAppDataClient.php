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
use Mozu\Api\Urls\Platform\SecureAppDataUrl;


/**
* Manage Secure App Settings. Expose via arc.js so that arc apps can securely access secrets. Third-party extensions can also access their data. Secured via AppKey.AppId
*/
class SecureAppDataClient {

	/**
	* platform-secureappdata Get GetDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getDBValueClient($appKeyId, $dbEntryQuery, $responseFields =  null)
	{
		$url = SecureAppDataUrl::getDBValueUrl($appKeyId, $dbEntryQuery, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* platform-secureappdata Post CreateDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @param JObject $value JSON code for objects.
	*/
	public static function createDBValueClient($value, $appKeyId, $dbEntryQuery)
	{
		$url = SecureAppDataUrl::createDBValueUrl($appKeyId, $dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($value);
		return $mozuClient;

	}
	
	/**
	* platform-secureappdata Put UpdateDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	* @param JObject $value JSON code for objects.
	*/
	public static function updateDBValueClient($value, $appKeyId, $dbEntryQuery)
	{
		$url = SecureAppDataUrl::updateDBValueUrl($appKeyId, $dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($value);
		return $mozuClient;

	}
	
	/**
	* platform-secureappdata Delete DeleteDBValue description DOCUMENT_HERE 
	*
	* @param string $appKeyId 
	* @param string $dbEntryQuery The database entry string to create.
	*/
	public static function deleteDBValueClient($appKeyId, $dbEntryQuery)
	{
		$url = SecureAppDataUrl::deleteDBValueUrl($appKeyId, $dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

