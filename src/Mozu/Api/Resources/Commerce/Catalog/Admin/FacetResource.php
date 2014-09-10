<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\Clients\Commerce\Catalog\Admin\FacetClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\ProductAdmin\Facet;
use Mozu\Api\Contracts\ProductAdmin\FacetSet;

/**
* Use the Facets resource to manage the facets shoppers use to filter product display results on a storefront. Facets can include categories, product attributes, or prices, and use either a range of values or discrete values.
*/
class FacetResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	

	/**
	* Retrieves a facet specified by its unique identifier and displays its properties.
	*
	* @param int $facetId Unique identifier of the facet to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param bool $validate Validates that the product category associated with a facet is active. System-supplied and read only.
	* @return Facet 
	*/
	public function getFacet($facetId, $validate =  null, $responseFields =  null)
	{
		$mozuClient = FacetClient::getFacetClient($facetId, $validate, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves a list of the facets defined for the specified category.
	*
	* @param int $categoryId Unique identifier of the category associated with the facets to retrieve.
	* @param bool $includeAvailable If true, returns a list of the attributes and categories associated with a product type that have not been defined as a facet for the category.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param bool $validate Validates that the product category associated with a facet is active. System-supplied and read only.
	* @return FacetSet 
	*/
	public function getFacetCategoryList($categoryId, $includeAvailable =  null, $validate =  null, $responseFields =  null)
	{
		$mozuClient = FacetClient::getFacetCategoryListClient($categoryId, $includeAvailable, $validate, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Creates a new category, price, or attribute facet. Define the category or attribute source to use for the facet values.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Facet $facet Properties of the new facet to create. You must specify the source, type, and category.
	* @return Facet 
	*/
	public function addFacet($facet, $responseFields =  null)
	{
		$mozuClient = FacetClient::addFacetClient($facet, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Modifies one or more properties of a defined facet.
	*
	* @param int $facetId Unique identifier of the facet to modify.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Facet $facet Properties of the defined facet to modify.
	* @return Facet 
	*/
	public function updateFacet($facet, $facetId, $responseFields =  null)
	{
		$mozuClient = FacetClient::updateFacetClient($facet, $facetId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Deletes the facet specified by its unique identifier.
	*
	* @param int $facetId Unique identifier of the facet to delete.
	* @return void
	*/
	public function deleteFacetById($facetId)
	{
		$mozuClient = FacetClient::deleteFacetByIdClient($facetId);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	
}

?>

