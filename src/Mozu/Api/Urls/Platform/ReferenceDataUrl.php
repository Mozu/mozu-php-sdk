<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ReferenceDataUrl  {

	/**
		* Get Resource Url for GetAddressSchema
		* @param string $countryCode The 2-letter geographic code representing the country for the physical or mailing address. Currently limited to the US.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getAddressSchemaUrl($countryCode, $responseFields)
	{
		$url = "/api/platform/reference/addressschema/{countryCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("countryCode", $countryCode)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAddressSchemas
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getAddressSchemasUrl($responseFields)
	{
		$url = "/api/platform/reference/addressschemas?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetBehavior
		* @param int $behaviorId Unique identifier of the behavior.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getBehaviorUrl($behaviorId, $responseFields)
	{
		$url = "/api/platform/reference/behaviors/{behaviorId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("behaviorId", $behaviorId)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetBehaviorCategory
		* @param int $categoryId Unique identifier of the behavior category.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getBehaviorCategoryUrl($categoryId, $responseFields)
	{
		$url = "/api/platform/reference/behaviors/categories/{categoryId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("categoryId", $categoryId)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetBehaviorCategories
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getBehaviorCategoriesUrl($responseFields)
	{
		$url = "/api/platform/reference/behaviors/categories?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetBehaviors
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $userType The user type associated with the behaviors to retrieve.
		* @return string Resource Url
	*/
	public static function getBehaviorsUrl($responseFields, $userType)
	{
		$url = "/api/platform/reference/behaviors?userType={userType}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields)
				->formatUrl("userType", $userType);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetContentLocales
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getContentLocalesUrl($responseFields)
	{
		$url = "/api/platform/reference/contentLocales?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCountries
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getCountriesUrl($responseFields)
	{
		$url = "/api/platform/reference/countries?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCurrencies
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getCurrenciesUrl($responseFields)
	{
		$url = "/api/platform/reference/currencies?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetTimeZones
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getTimeZonesUrl($responseFields)
	{
		$url = "/api/platform/reference/timezones?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetTopLevelDomains
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getTopLevelDomainsUrl($responseFields)
	{
		$url = "/api/platform/reference/topleveldomains?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetUnitsOfMeasure
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getUnitsOfMeasureUrl($filter, $responseFields)
	{
		$url = "/api/platform/reference/unitsofmeasure?filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false);
		$mozuUrl->formatUrl("filter", $filter)
				->formatUrl("responseFields", $responseFields);

		return $mozuUrl;
	}
	
}

?>

