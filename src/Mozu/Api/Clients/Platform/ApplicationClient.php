<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\ApplicationUrl;
use Mozu\Api\Headers;

use Mozu\Api\Contracts\InstalledApplications\Application;

/**
* Use the Applications resource to update and retrieve details about the applications installed for your tenant.
*/
class ApplicationClient {

	/**
	* Retrieves the details of the installed application specified in the request.
	*
	* @param string $appId The application ID that represents the application to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getApplicationClient($appId, $responseFields =  null)
	{
		$url = ApplicationUrl::getApplicationUrl($appId, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* Updates one or more properties of the application specified in the request.
	*
	* @param string $appId The application ID that represents the application to update.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Application $application Properties of the application to update.
	* @return MozuClient
	*/
	public static function updateApplicationClient($application, $appId, $responseFields =  null)
	{
		$url = ApplicationUrl::updateApplicationUrl($appId, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($application);

	}
	
	
}

?>
