<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Platform\SiteDataClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Use the site data resource to store site-level information required for a third-party application in the Mozu database.
*/
class SiteDataResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the value of a record in the Mozu database.
	*
	* @param string $dbEntryQuery The database entry query string used to retrieve the record information.
	* @return string 
	*/
	public function getDBValue($dbEntryQuery)
	{
		$mozuClient = SiteDataClient::getDBValueClient($dbEntryQuery);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new record in the Mozu database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	*/
	public function createDBValue($dbEntryQuery, $value)
	{
		$mozuClient = SiteDataClient::createDBValueClient($dbEntryQuery, $value);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	/**
	* Updates a record in the Mozu database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry query string used to update the record information.
	* @param string $value The database value to update.
	*/
	public function updateDBValue($dbEntryQuery, $value)
	{
		$mozuClient = SiteDataClient::updateDBValueClient($dbEntryQuery, $value);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	/**
	* Removes a previously defined record in the Mozu database.
	*
	* @param string $dbEntryQuery The database entry string to delete.
	*/
	public function deleteDBValue($dbEntryQuery)
	{
		$mozuClient = SiteDataClient::deleteDBValueClient($dbEntryQuery);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	
}

?>

