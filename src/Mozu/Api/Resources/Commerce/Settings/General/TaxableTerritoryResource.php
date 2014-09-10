<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\General;

use Mozu\Api\Clients\Commerce\Settings\General\TaxableTerritoryClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\SiteSettings\General\TaxableTerritory;

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
	* Retrieves a list of the taxable territories configured for the site.
	*
	* @return array|TaxableTerritory 
	*/
	public function getTaxableTerritories()
	{
		$mozuClient = TaxableTerritoryClient::getTaxableTerritoriesClient();
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Creates a new territory for which to calculate sales tax.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param TaxableTerritory $taxableTerritory Properties of the taxable territory to create.
	* @return TaxableTerritory 
	*/
	public function addTaxableTerritory($taxableTerritory, $responseFields =  null)
	{
		$mozuClient = TaxableTerritoryClient::addTaxableTerritoryClient($taxableTerritory, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates one or more taxable territories configured for a site.
	*
	* @param array|TaxableTerritory $taxableterritories Properties of the taxable territories to update.
	* @return array|TaxableTerritory 
	*/
	public function updateTaxableTerritories($taxableterritories)
	{
		$mozuClient = TaxableTerritoryClient::updateTaxableTerritoriesClient($taxableterritories);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	
}

?>

