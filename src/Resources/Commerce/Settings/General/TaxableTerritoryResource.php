<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\General;

use Mozu\Api\Clients\Commerce\Settings\General\TaxableTerritoryClient;
use Mozu\Api\ApiContext;


/**
* Use the taxable territories subresource to manage the regional territories for this site that are subejct to sales tax.
*/
class TaxableTerritoryResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @return array|TaxableTerritory 
	* @deprecated deprecated since version 1.17
	*/
	public function getTaxableTerritories()
	{
		$mozuClient = TaxableTerritoryClient::getTaxableTerritoriesClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getTaxableTerritoriesAsync()
	{
		$mozuClient = TaxableTerritoryClient::getTaxableTerritoriesClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param TaxableTerritory $taxableTerritory Properties of the taxable territory to create.
	* @return TaxableTerritory 
	* @deprecated deprecated since version 1.17
	*/
	public function addTaxableTerritory($taxableTerritory, $responseFields =  null)
	{
		$mozuClient = TaxableTerritoryClient::addTaxableTerritoryClient($taxableTerritory, $responseFields);
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
	public function addTaxableTerritoryAsync($taxableTerritory, $responseFields =  null)
	{
		$mozuClient = TaxableTerritoryClient::addTaxableTerritoryClient($taxableTerritory, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param array|TaxableTerritory $taxableterritories Properties of the taxable territories to update.
	* @return array|TaxableTerritory 
	* @deprecated deprecated since version 1.17
	*/
	public function updateTaxableTerritories($taxableterritories)
	{
		$mozuClient = TaxableTerritoryClient::updateTaxableTerritoriesClient($taxableterritories);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateTaxableTerritoriesAsync($taxableterritories)
	{
		$mozuClient = TaxableTerritoryClient::updateTaxableTerritoriesClient($taxableterritories);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
