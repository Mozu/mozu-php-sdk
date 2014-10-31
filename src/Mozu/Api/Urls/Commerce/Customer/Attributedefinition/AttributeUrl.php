<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer\Attributedefinition;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class AttributeUrl  {

	/**
		* Get Resource Url for GetAttributes
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @return string Resource Url
	*/
	public static function getAttributesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/attributedefinition/attributes/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("filter", $filter)
				->formatUrl("pageSize", $pageSize)
				->formatUrl("responseFields", $responseFields)
				->formatUrl("sortBy", $sortBy)
				->formatUrl("startIndex", $startIndex);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAttributeVocabularyValues
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @return string Resource Url
	*/
	public static function getAttributeVocabularyValuesUrl($attributeFQN)
	{
		$url = "/api/commerce/customer/attributedefinition/attributes/{attributeFQN}/VocabularyValues";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("attributeFQN", $attributeFQN);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAttribute
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getAttributeUrl($attributeFQN, $responseFields)
	{
		$url = "/api/commerce/customer/attributedefinition/attributes/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("attributeFQN", $attributeFQN)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
}

?>

