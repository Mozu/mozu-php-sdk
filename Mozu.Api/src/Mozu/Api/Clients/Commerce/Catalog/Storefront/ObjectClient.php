<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Storefront;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Storefront\ObjectUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class ObjectClient {

	/**
	* 
	*
	* @param RateRequest $rateRequest 
	* @return MozuClient
	*/
	public static function getRatesClient($rateRequest, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$url = ObjectUrl::getRatesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($rateRequest);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($userAuthTicket);
		return $mozuClient;

	}
	
	
}

?>

