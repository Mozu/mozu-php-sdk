<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Storefront;

use Mozu\Api\Clients\Commerce\Catalog\Storefront\OrderTaxContextClient;
use Mozu\Api\ApiContext;


/**
* Use the Storefront Tax resource to retrieve tax information from the storefront.
*/
class OrderTaxContextResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves tax information applicable to the site.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param TaxableOrder $taxableOrder 
	* @return OrderTaxContext 
	* @deprecated deprecated since version 1.17
	*/
	public function estimateTaxes($taxableOrder, $responseFields =  null)
	{
		$mozuClient = OrderTaxContextClient::estimateTaxesClient($taxableOrder, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves tax information applicable to the site.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function estimateTaxesAsync($taxableOrder, $responseFields =  null)
	{
		$mozuClient = OrderTaxContextClient::estimateTaxesClient($taxableOrder, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

