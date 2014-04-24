<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Settings\ApplicationClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the applications subresource to update site settings for installed applications.
*/
class ApplicationResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieve the settings of a third-party application.
	*
	* @return Application 
	*/
	public function thirdPartyGetApplication()
	{
		$mozuClient = ApplicationClient::thirdPartyGetApplicationClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Initializes an application with the necessary configured settings.
	*
	* @param Application $application Properties of the application to update.
	* @return Application 
	*/
	public function thirdPartyUpdateApplication($application)
	{
		$mozuClient = ApplicationClient::thirdPartyUpdateApplicationClient($application);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

