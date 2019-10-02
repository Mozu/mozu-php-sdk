<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform\Appdev;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\Appdev\PackageUrl;


/**
* 
*/
class PackageClient {

	/**
	* 
	*
	* @param string $applicationKey 
	* @param string $fileName 
	* @return MozuClient
	*/
	public static function getFileClient($applicationKey, $fileName)
	{
		$url = PackageUrl::getFileUrl($applicationKey, $fileName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
