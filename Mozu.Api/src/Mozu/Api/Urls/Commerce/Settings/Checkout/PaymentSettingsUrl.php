<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Settings\Checkout;

use Mozu\Api\Urls\BaseUrl;

class PaymentSettingsUrl extends BaseUrl {

	/**
		* Get Resource Url for GetPaymentSettings
		* @return string Resource Url
	*/
	public static function getPaymentSettingsUrl()
	{
		$url = "/api/commerce/settings/checkout/paymentsettings";
		return $url;
	}
	
	/**
		* Get Resource Url for GetActiveGatewayForCountry
		* @param string $countryCode 
		* @return string Resource Url
	*/
	public static function getActiveGatewayForCountryUrl($countryCode)
	{
		$url = "/api/commerce/settings/checkout/paymentsettings/activeForCountry/{countryCode}";
		$url = parent::formatUrl($url, "countryCode", $countryCode);
		return $url;
	}
	
	/**
		* Get Resource Url for GetGatewayDefinitions
		* @return string Resource Url
	*/
	public static function getGatewayDefinitionsUrl()
	{
		$url = "/api/commerce/settings/checkout/paymentsettings/gatewayDefinitions";
		return $url;
	}
	
	/**
		* Get Resource Url for GetGateway
		* @param string $gatewayId 
		* @return string Resource Url
	*/
	public static function getGatewayUrl($gatewayId)
	{
		$url = "/api/commerce/settings/checkout/paymentsettings/gateways/{gatewayId}";
		$url = parent::formatUrl($url, "gatewayId", $gatewayId);
		return $url;
	}
	
	/**
		* Get Resource Url for CreateGateway
		* @return string Resource Url
	*/
	public static function createGatewayUrl()
	{
		$url = "/api/commerce/settings/checkout/paymentsettings/gateways";
		return $url;
	}
	
	/**
		* Get Resource Url for UpdatePaymentSettings
		* @return string Resource Url
	*/
	public static function updatePaymentSettingsUrl()
	{
		$url = "/api/commerce/settings/checkout/paymentsettings";
		return $url;
	}
	
	/**
		* Get Resource Url for UpdateGateway
		* @param string $gatewayId 
		* @return string Resource Url
	*/
	public static function updateGatewayUrl($gatewayId)
	{
		$url = "/api/commerce/settings/checkout/paymentsettings/gateways/{gatewayId}";
		$url = parent::formatUrl($url, "gatewayId", $gatewayId);
		return $url;
	}
	
}

?>

