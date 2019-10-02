<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Attributes\AttributeTypeRuleUrl;


/**
* Type rules are subresources of product attributes which could be specifications that can be shared across products in a store or assigned to specific products. Attribute type rules provide definitions of how attribute types will appear on the user interface.
*/
class AttributeTypeRuleClient {

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getAttributeTypeRulesClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = AttributeTypeRuleUrl::getAttributeTypeRulesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
