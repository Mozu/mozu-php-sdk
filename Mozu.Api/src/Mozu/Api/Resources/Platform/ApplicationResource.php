<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Platform\ApplicationClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class ApplicationResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $appId 
	* @return Application 
	*/
	public function getApplication($appId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ApplicationClient::getApplicationClient($appId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $appId 
	* @param Application $application 
	* @return Application 
	*/
	public function updateApplication($application, $appId, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ApplicationClient::updateApplicationClient($application, $appId, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

