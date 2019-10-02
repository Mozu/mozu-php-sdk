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
use Mozu\Api\Urls\Commerce\Settings\ApplicationUrl;


/**
* Use the Applications resource to update site-specific settings for installed applications.
*/
class ApplicationClient {

	/**
	* 
	*
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function thirdPartyGetApplicationClient($responseFields =  null)
	{
		$url = ApplicationUrl::thirdPartyGetApplicationUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param Application $application Properties of the application to update.
	* @return MozuClient
	*/
	public static function thirdPartyUpdateApplicationClient($application, $responseFields =  null)
	{
		$url = ApplicationUrl::thirdPartyUpdateApplicationUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($application);
		return $mozuClient;

	}
	
	
}

?>
