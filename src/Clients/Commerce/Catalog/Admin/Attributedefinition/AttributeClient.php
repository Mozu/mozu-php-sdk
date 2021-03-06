<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\AttributeUrl;


/**
* Attributes are used to add custom definitions and characteristics to the following objects:
*  — are attributes that define the characteristics of products, enabling you to uniquely describe a product. They consist of options, properties, and extras. Refer to [Product Attributes](https://www.mozu.com/docs/guides/catalog/product-attributes.htm) in the Guides section for more information.

*  — are custom attributes that you can apply to customer accounts to add further definition for special uses, such as marketing campaigns, or discounts. Refer to [Customer Attributes](https://www.mozu.com/docs/guides/customers/customers.htm#customer_attributes) in the Guides section for more information.

*  — are custom attributes that enable you to uniquely describe an aspect of an order. Depending on the attribute definition, either you or a shopper can enter values for the order attribute. Refer to [Order Attributes](https://www.mozu.com/docs/guides/orders/order-attributes.htm) in the Guides section for more information.

*/
class AttributeClient {

	/**
	* Retrieves a paged list of attributes according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
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
	* Retrieves the details of the specified product attribute.
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
	* Creates a new attribute to describe one aspect of a product such as color or size, based on its defined product type. The attribute name, attribute type, input type, and data type are required.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Attribute $attribute Properties of an attribute used to describe customers or orders.
	* @return MozuClient
	*/
	public static function addAttributeClient($attribute, $responseFields =  null)
	{
		$url = AttributeUrl::addAttributeUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attribute);
		return $mozuClient;

	}
	
	/**
	* Updates an existing attribute with attribute properties to set.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
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
	
	/**
	* Deletes a defined product attribute. You cannot delete an attribute assigned a value for a product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	*/
	public static function deleteAttributeClient($attributeFQN)
	{
		$url = AttributeUrl::deleteAttributeUrl($attributeFQN);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

