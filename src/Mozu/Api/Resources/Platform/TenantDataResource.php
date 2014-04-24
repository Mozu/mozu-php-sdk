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
use Mozu\Api\Clients\Platform\TenantDataClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the tenant data resource to store tenant-level information required for a third-party application in the Mozu database.
*/
class TenantDataResource {

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
		$mozuClient = TenantDataClient::getDBValueClient($dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new record in the Mozu database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	*/
	public function createDBValue($value, $dbEntryQuery)
	{
		$mozuClient = TenantDataClient::createDBValueClient($value, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Updates a record in the Mozu database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry query string used to update the record information.
	* @param string $value The database value to update.
	*/
	public function updateDBValue($value, $dbEntryQuery)
	{
		$mozuClient = TenantDataClient::updateDBValueClient($value, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* Removes a previously defined record in the Mozu database.
	*
	* @param string $dbEntryQuery The database entry string to delete.
	*/
	public function deleteDBValue($dbEntryQuery)
	{
		$mozuClient = TenantDataClient::deleteDBValueClient($dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

