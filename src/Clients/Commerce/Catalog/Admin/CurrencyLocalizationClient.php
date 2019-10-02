<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\CurrencyLocalizationUrl;


/**
* 
*/
class CurrencyLocalizationClient {

	/**
	* 
	*
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getCurrencyLocalizationsClient($responseFields =  null)
	{
		$url = CurrencyLocalizationUrl::getCurrencyLocalizationsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $currencyCode 
	* @param string $responseFields 
	* @param string $toCurrencyCode 
	* @return MozuClient
	*/
	public static function getCurrencyExchangeRateClient($currencyCode, $toCurrencyCode, $responseFields =  null)
	{
		$url = CurrencyLocalizationUrl::getCurrencyExchangeRateUrl($currencyCode, $responseFields, $toCurrencyCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $currencyCode 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getCurrencyExchangeRatesClient($currencyCode, $responseFields =  null)
	{
		$url = CurrencyLocalizationUrl::getCurrencyExchangeRatesUrl($currencyCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $currencyCode 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getCurrencyLocalizationClient($currencyCode, $responseFields =  null)
	{
		$url = CurrencyLocalizationUrl::getCurrencyLocalizationUrl($currencyCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param CurrencyLocalization $currencyLocalization 
	* @return MozuClient
	*/
	public static function addCurrencyLocalizationClient($currencyLocalization, $responseFields =  null)
	{
		$url = CurrencyLocalizationUrl::addCurrencyLocalizationUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($currencyLocalization);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $currencyCode 
	* @param array|CurrencyExchangeRate $currencyExchangeRates 
	* @return MozuClient
	*/
	public static function addCurrencyExchangeRatesClient($currencyExchangeRates, $currencyCode)
	{
		$url = CurrencyLocalizationUrl::addCurrencyExchangeRatesUrl($currencyCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($currencyExchangeRates);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $currencyCode 
	* @param array|CurrencyExchangeRate $currencyExchangeRates 
	* @return MozuClient
	*/
	public static function updateCurrencyExchangeRatesClient($currencyExchangeRates, $currencyCode)
	{
		$url = CurrencyLocalizationUrl::updateCurrencyExchangeRatesUrl($currencyCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($currencyExchangeRates);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $currencyCode 
	* @param string $responseFields 
	* @param CurrencyLocalization $currencyLocalization 
	* @return MozuClient
	*/
	public static function updateCurrencyLocalizationClient($currencyLocalization, $currencyCode, $responseFields =  null)
	{
		$url = CurrencyLocalizationUrl::updateCurrencyLocalizationUrl($currencyCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($currencyLocalization);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $currencyCode 
	* @return MozuClient
	*/
	public static function deleteCurrencyLocalizationClient($currencyCode)
	{
		$url = CurrencyLocalizationUrl::deleteCurrencyLocalizationUrl($currencyCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $currencyCode 
	* @param string $toCurrencyCode 
	* @return MozuClient
	*/
	public static function deleteCurrencyExchangeRateClient($currencyCode, $toCurrencyCode)
	{
		$url = CurrencyLocalizationUrl::deleteCurrencyExchangeRateUrl($currencyCode, $toCurrencyCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
