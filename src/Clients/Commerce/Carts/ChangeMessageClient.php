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
use Mozu\Api\Urls\Commerce\Carts\ChangeMessageUrl;


/**
* Use the Cart Messages resource to retrieve messages for live carts that the system logs when a product's price or inventory level changes.
*/
class ChangeMessageClient {

	/**
	* 
	*
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getMessagesClient($responseFields =  null)
	{
		$url = ChangeMessageUrl::getMessagesUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @return MozuClient
	*/
	public static function removeAllMessagesClient()
	{
		$url = ChangeMessageUrl::removeAllMessagesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $messageId Identifier of the message to remove from the cart.
	* @return MozuClient
	*/
	public static function removeMessageClient($messageId)
	{
		$url = ChangeMessageUrl::removeMessageUrl($messageId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

