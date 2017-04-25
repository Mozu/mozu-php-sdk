<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Storefront;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Storefront\OrderTaxContextUrl;


/**
* Use the Storefront Tax resource to retrieve tax information from the storefront.
*/
class OrderTaxContextClient {

	/**
	* Retrieves tax information applicable to the site.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param TaxableOrder $taxableOrder 
	* @return MozuClient
	*/
	public static function estimateTaxesClient($taxableOrder, $responseFields =  null)
	{
		$url = OrderTaxContextUrl::estimateTaxesUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($taxableOrder);
		return $mozuClient;

	}
	
	
}

?>

