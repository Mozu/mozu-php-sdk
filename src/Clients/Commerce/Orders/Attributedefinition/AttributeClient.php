<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Orders\Attributedefinition;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Orders\Attributedefinition\AttributeUrl;


/**
* Use the Order Attribute Definition resource to manage the attributes that uniquely describe orders, such as the associated shopping season or "How did you hear about us?" information. Merchants can display order attributes on the order summary, the order confirmation page, invoices, or packing slips.
*/
class AttributeClient {

	/**
	* Retrieves a list of order attributes according to any filter criteria or sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getAttributesClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = AttributeUrl::getAttributesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Returns the list of vocabulary values defined for the order attribute specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return MozuClient
	*/
	public static function getAttributeVocabularyValuesClient($attributeFQN)
	{
		$url = AttributeUrl::getAttributeVocabularyValuesUrl($attributeFQN);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the order attribute specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getAttributeClient($attributeFQN, $responseFields =  null)
	{
		$url = AttributeUrl::getAttributeUrl($attributeFQN, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Create and save a new attribute. These attributes are used in products and product options.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param Attribute $attribute Properties of an attribute used to describe customers or orders.
	* @return MozuClient
	*/
	public static function createAttributeClient($attribute, $responseFields =  null)
	{
		$url = AttributeUrl::createAttributeUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	/**
	* Updates an existing attribute with attribute properties to set.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param Attribute $attribute Properties of an attribute used to describe customers or orders.
	* @return MozuClient
	*/
	public static function updateAttributeClient($attribute, $attributeFQN, $responseFields =  null)
	{
		$url = AttributeUrl::updateAttributeUrl($attributeFQN, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	
}

?>

