<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Couponsets;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Couponsets\CouponUrl;


/**
* 
*/
class CouponClient {

	/**
	* 
	*
	* @param string $couponCode 
	* @param string $couponSetCode 
	* @param bool $includeCounts 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getCouponClient($couponSetCode, $couponCode, $includeCounts =  null, $responseFields =  null)
	{
		$url = CouponUrl::getCouponUrl($couponCode, $couponSetCode, $includeCounts, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $couponSetCode 
	* @param string $filter 
	* @param bool $includeCounts 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getCouponsClient($couponSetCode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeCounts =  null, $responseFields =  null)
	{
		$url = CouponUrl::getCouponsUrl($couponSetCode, $filter, $includeCounts, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $couponSetCode 
	* @param array|Coupon $coupons 
	* @return MozuClient
	*/
	public static function addCouponsClient($coupons, $couponSetCode)
	{
		$url = CouponUrl::addCouponsUrl($couponSetCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($coupons);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $couponSetCode 
	* @param array|string $couponCodes 
	* @return MozuClient
	*/
	public static function deleteCouponsClient($couponCodes, $couponSetCode)
	{
		$url = CouponUrl::deleteCouponsUrl($couponSetCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($couponCodes);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $couponCode 
	* @param string $couponSetCode 
	* @return MozuClient
	*/
	public static function deleteCouponClient($couponSetCode, $couponCode)
	{
		$url = CouponUrl::deleteCouponUrl($couponCode, $couponSetCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

