<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Couponsets;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Couponsets\CouponClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class CouponResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param string $couponCode 
	* @param string $couponSetCode 
	* @param bool $includeCounts 
	* @param string $responseFields 
	* @return Coupon 
	* @deprecated deprecated since version 1.17
	*/
	public function getCoupon($couponSetCode, $couponCode, $includeCounts =  null, $responseFields =  null)
	{
		$mozuClient = CouponClient::getCouponClient($couponSetCode, $couponCode, $includeCounts, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $couponCode 
	* @param string $couponSetCode 
	* @param bool $includeCounts 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCouponAsync($couponSetCode, $couponCode, $includeCounts =  null, $responseFields =  null)
	{
		$mozuClient = CouponClient::getCouponClient($couponSetCode, $couponCode, $includeCounts, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

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
	* @return CouponCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCoupons($couponSetCode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeCounts =  null, $responseFields =  null)
	{
		$mozuClient = CouponClient::getCouponsClient($couponSetCode, $startIndex, $pageSize, $sortBy, $filter, $includeCounts, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

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
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCouponsAsync($couponSetCode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $includeCounts =  null, $responseFields =  null)
	{
		$mozuClient = CouponClient::getCouponsClient($couponSetCode, $startIndex, $pageSize, $sortBy, $filter, $includeCounts, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $couponSetCode 
	* @param array|Coupon $coupons 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function addCoupons($coupons, $couponSetCode)
	{
		$mozuClient = CouponClient::addCouponsClient($coupons, $couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $couponSetCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addCouponsAsync($coupons, $couponSetCode)
	{
		$mozuClient = CouponClient::addCouponsClient($coupons, $couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $couponSetCode 
	* @param array|string $couponCodes 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteCoupons($couponCodes, $couponSetCode)
	{
		$mozuClient = CouponClient::deleteCouponsClient($couponCodes, $couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $couponSetCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteCouponsAsync($couponCodes, $couponSetCode)
	{
		$mozuClient = CouponClient::deleteCouponsClient($couponCodes, $couponSetCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $couponCode 
	* @param string $couponSetCode 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteCoupon($couponSetCode, $couponCode)
	{
		$mozuClient = CouponClient::deleteCouponClient($couponSetCode, $couponCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $couponCode 
	* @param string $couponSetCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteCouponAsync($couponSetCode, $couponCode)
	{
		$mozuClient = CouponClient::deleteCouponClient($couponSetCode, $couponCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
