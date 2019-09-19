<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CurrencyLocalizationUrl  {

	/**
		* Get Resource Url for GetCurrencyLocalizations
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getCurrencyLocalizationsUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/currency/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCurrencyExchangeRate
		* @param string $currencyCode 
		* @param string $responseFields 
		* @param string $toCurrencyCode 
		* @return string Resource Url
	*/
	public static function getCurrencyExchangeRateUrl($currencyCode, $responseFields, $toCurrencyCode)
	{
		$url = "/api/commerce/catalog/admin/currency/{currencyCode}/exchangerates/{toCurrencyCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("toCurrencyCode", $toCurrencyCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCurrencyExchangeRates
		* @param string $currencyCode 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getCurrencyExchangeRatesUrl($currencyCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/currency/{currencyCode}/exchangerates?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCurrencyLocalization
		* @param string $currencyCode 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getCurrencyLocalizationUrl($currencyCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/currency/{currencyCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddCurrencyLocalization
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function addCurrencyLocalizationUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/currency/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddCurrencyExchangeRates
		* @param string $currencyCode 
		* @return string Resource Url
	*/
	public static function addCurrencyExchangeRatesUrl($currencyCode)
	{
		$url = "/api/commerce/catalog/admin/currency/{currencyCode}/exchangerates";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCurrencyExchangeRates
		* @param string $currencyCode 
		* @return string Resource Url
	*/
	public static function updateCurrencyExchangeRatesUrl($currencyCode)
	{
		$url = "/api/commerce/catalog/admin/currency/{currencyCode}/exchangerates";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCurrencyLocalization
		* @param string $currencyCode 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function updateCurrencyLocalizationUrl($currencyCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/currency/{currencyCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCurrencyLocalization
		* @param string $currencyCode 
		* @return string Resource Url
	*/
	public static function deleteCurrencyLocalizationUrl($currencyCode)
	{
		$url = "/api/commerce/catalog/admin/currency/{currencyCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCurrencyExchangeRate
		* @param string $currencyCode 
		* @param string $toCurrencyCode 
		* @return string Resource Url
	*/
	public static function deleteCurrencyExchangeRateUrl($currencyCode, $toCurrencyCode)
	{
		$url = "/api/commerce/catalog/admin/currency/{currencyCode}/exchangerates/{toCurrencyCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("toCurrencyCode", $toCurrencyCode);
		return $mozuUrl;
	}
	
}

?>

