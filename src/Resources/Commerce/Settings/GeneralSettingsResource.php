<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings;

use Mozu\Api\Clients\Commerce\Settings\GeneralSettingsClient;
use Mozu\Api\ApiContext;


/**
* Define global site settings such as the site name, shipping and email addresses, and logo images. Block undesirable IP addresses using this resource.
*/
class GeneralSettingsResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param string $responseFields 
	* @return GeneralSettings 
	* @deprecated deprecated since version 1.17
	*/
	public function getGeneralSettings($responseFields =  null)
	{
		$mozuClient = GeneralSettingsClient::getGeneralSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getGeneralSettingsAsync($responseFields =  null)
	{
		$mozuClient = GeneralSettingsClient::getGeneralSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param GeneralSettings $generalSettings The properties of the site's general settings to update.
	* @return GeneralSettings 
	* @deprecated deprecated since version 1.17
	*/
	public function updateGeneralSettings($generalSettings, $responseFields =  null)
	{
		$mozuClient = GeneralSettingsClient::updateGeneralSettingsClient($generalSettings, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateGeneralSettingsAsync($generalSettings, $responseFields =  null)
	{
		$mozuClient = GeneralSettingsClient::updateGeneralSettingsClient($generalSettings, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
