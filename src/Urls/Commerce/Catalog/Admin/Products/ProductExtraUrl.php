<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Products;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ProductExtraUrl  {

	/**
		* Get Resource Url for GetExtras
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @return string Resource Url
	*/
	public static function getExtrasUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetExtraValueLocalizedDeltaPrices
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function getExtraValueLocalizedDeltaPricesUrl($attributeFQN, $productCode, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras/{attributeFQN}/Values/{value}/localizedDeltaPrice";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetExtraValueLocalizedDeltaPrice
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function getExtraValueLocalizedDeltaPriceUrl($attributeFQN, $currencyCode, $productCode, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras/{attributeFQN}/Values/{value}/localizedDeltaPrice/{currencyCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetExtra
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getExtraUrl($attributeFQN, $productCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddExtraValueLocalizedDeltaPrice
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function addExtraValueLocalizedDeltaPriceUrl($attributeFQN, $productCode, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras/{attributeFQN}/Values/{value}/localizedDeltaPrice?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddExtra
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addExtraUrl($productCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateExtraValueLocalizedDeltaPrices
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function updateExtraValueLocalizedDeltaPricesUrl($attributeFQN, $productCode, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras/{attributeFQN}/Values/{value}/localizedDeltaPrice";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateExtraValueLocalizedDeltaPrice
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $value The value string to create.
		* @return string Resource Url
	*/
	public static function updateExtraValueLocalizedDeltaPriceUrl($attributeFQN, $currencyCode, $productCode, $responseFields, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras/{attributeFQN}/Values/{value}/localizedDeltaPrice/{currencyCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateExtra
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateExtraUrl($attributeFQN, $productCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras/{attributeFQN}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteExtra
		* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @return string Resource Url
	*/
	public static function deleteExtraUrl($attributeFQN, $productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras/{attributeFQN}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteExtraValueLocalizedDeltaPrice
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param string $value Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function deleteExtraValueLocalizedDeltaPriceUrl($attributeFQN, $currencyCode, $productCode, $value)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/Extras/{attributeFQN}/Values/{value}/localizedDeltaPrice/{currencyCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("currencyCode", $currencyCode);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("value", $value);
		return $mozuUrl;
	}
	
}

?>

