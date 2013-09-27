<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Shipping\Instance;

use Mozu\Api\Urls\BaseUrl;

class InstanceCarrierUrl extends BaseUrl {

	/**
		* Get Resource Url for GetConfigurations
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getConfigurationsUrl($filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/shipping/instance/carriers/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = parent::formatUrl($url, "filter", $filter);
		$url = parent::formatUrl($url, "pageSize", $pageSize);
		$url = parent::formatUrl($url, "sortBy", $sortBy);
		$url = parent::formatUrl($url, "startIndex", $startIndex);
		return $url;
	}
	
	/**
		* Get Resource Url for GetConfiguration
		* @param string $carrierId Identifier of the shipping carrier associated with the configuration details to retrieve.
		* @return string Resource Url
	*/
	public static function getConfigurationUrl($carrierId)
	{
		$url = "/api/commerce/catalog/admin/shipping/instance/carriers/{carrierId}";
		$url = parent::formatUrl($url, "carrierId", $carrierId);
		return $url;
	}
	
	/**
		* Get Resource Url for CreateConfiguration
		* @param string $carrierId Identifier of the carrier configuration being created.
		* @return string Resource Url
	*/
	public static function createConfigurationUrl($carrierId)
	{
		$url = "/api/commerce/catalog/admin/shipping/instance/carriers/{carrierId}";
		$url = parent::formatUrl($url, "carrierId", $carrierId);
		return $url;
	}
	
	/**
		* Get Resource Url for UpdateConfiguration
		* @param string $carrierId Identifier of the shipping carrier configuration to update.
		* @return string Resource Url
	*/
	public static function updateConfigurationUrl($carrierId)
	{
		$url = "/api/commerce/catalog/admin/shipping/instance/carriers/{carrierId}";
		$url = parent::formatUrl($url, "carrierId", $carrierId);
		return $url;
	}
	
	/**
		* Get Resource Url for DeleteConfiguration
		* @param string $carrierId Identifier of the specific shipping carrier to delete.
		* @return string Resource Url
	*/
	public static function deleteConfigurationUrl($carrierId)
	{
		$url = "/api/commerce/catalog/admin/shipping/instance/carriers/{carrierId}";
		$url = parent::formatUrl($url, "carrierId", $carrierId);
		return $url;
	}
	
}

?>

