<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypeVariationUrl;

/**
* Use the variations resource to preview possible product variations for a specific product type based on the option attributes defined for the product type, such as size or color.
*/
class ProductTypeVariationClient {

	/**
	* Generates the variations possible for a product associated with the product type based on the option values supplied in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $productCode 
	* @param int $productTypeId Unique identifier of the product type.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex Indicates the zero-based offset in the complete result set where the returned entities begin, when creating paged results from a query. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @param array|ProductOption $productOptionsIn The product option attributes configured for this product type.
	* @return MozuClient
	*/
	public static function generateProductVariationsClient($filter, $pageSize, $productCode, $productTypeId, $sortBy, $startIndex, $productOptionsIn)
	{
		$url = ProductTypeVariationUrl::generateProductVariationsUrl($filter, $pageSize, $productCode, $productTypeId, $sortBy, $startIndex);
		$verb = "POST";
		$mozuClient = new MozuClient();
		$mozuClient->withVerb($verb)
				->withResourceUrl($url)->withBody($productOptionsIn);
		return $mozuClient;

	}
	
	
}

?>

