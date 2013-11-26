<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ProductTypeOptionUrl  {

	/**
		* Get Resource Url for GetOptions
		* @param int $productTypeId 
		* @return string Resource Url
	*/
	public static function getOptionsUrl($productTypeId)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/Options";
		$url = MozuUrl::formatUrl($url, "productTypeId", $productTypeId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetOption
		* @param string $attributeFQN 
		* @param int $productTypeId 
		* @return string Resource Url
	*/
	public static function getOptionUrl($attributeFQN, $productTypeId)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/Options/{attributeFQN}";
		$url = MozuUrl::formatUrl($url, "attributeFQN", $attributeFQN);
		$url = MozuUrl::formatUrl($url, "productTypeId", $productTypeId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for AddOption
		* @param int $productTypeId 
		* @return string Resource Url
	*/
	public static function addOptionUrl($productTypeId)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/Options";
		$url = MozuUrl::formatUrl($url, "productTypeId", $productTypeId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateOption
		* @param string $attributeFQN 
		* @param int $productTypeId 
		* @return string Resource Url
	*/
	public static function updateOptionUrl($attributeFQN, $productTypeId)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/Options/{attributeFQN}";
		$url = MozuUrl::formatUrl($url, "attributeFQN", $attributeFQN);
		$url = MozuUrl::formatUrl($url, "productTypeId", $productTypeId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteOption
		* @param string $attributeFQN 
		* @param int $productTypeId 
		* @return string Resource Url
	*/
	public static function deleteOptionUrl($attributeFQN, $productTypeId)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/producttypes/{productTypeId}/Options/{attributeFQN}";
		$url = MozuUrl::formatUrl($url, "attributeFQN", $attributeFQN);
		$url = MozuUrl::formatUrl($url, "productTypeId", $productTypeId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>

