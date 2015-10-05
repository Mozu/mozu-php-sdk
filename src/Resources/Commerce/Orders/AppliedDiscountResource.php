<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\Clients\Commerce\Orders\AppliedDiscountClient;
use Mozu\Api\ApiContext;


/**
* Use this subresource to apply coupons to or remove coupons from an order based on a supplied coupon code.
*/
class AppliedDiscountResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Apply a coupon to the order.
	*
	* @param string $couponCode Alphanumeric code associated with the coupon or promotion that results in a discounted price.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Order 
	* @deprecated deprecated since version 1.17
	*/
	public function applyCoupon($orderId, $couponCode, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$mozuClient = AppliedDiscountClient::applyCouponClient($orderId, $couponCode, $updateMode, $version, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Apply a coupon to the order.
	*
	* @param string $couponCode Alphanumeric code associated with the coupon or promotion that results in a discounted price.
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function applyCouponAsync($orderId, $couponCode, $updateMode =  null, $version =  null, $responseFields =  null)
	{
		$mozuClient = AppliedDiscountClient::applyCouponClient($orderId, $couponCode, $updateMode, $version, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes a coupon previously applied to the order.
	*
	* @param string $couponCode Alphanumeric code associated with the coupon or promotion that results in a discounted price.
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Order 
	* @deprecated deprecated since version 1.17
	*/
	public function removeCoupon($orderId, $couponCode, $updateMode =  null, $version =  null)
	{
		$mozuClient = AppliedDiscountClient::removeCouponClient($orderId, $couponCode, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Removes a coupon previously applied to the order.
	*
	* @param string $couponCode Alphanumeric code associated with the coupon or promotion that results in a discounted price.
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function removeCouponAsync($orderId, $couponCode, $updateMode =  null, $version =  null)
	{
		$mozuClient = AppliedDiscountClient::removeCouponClient($orderId, $couponCode, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes all coupons previously applied to the order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Order 
	* @deprecated deprecated since version 1.17
	*/
	public function removeCoupons($orderId, $updateMode =  null, $version =  null)
	{
		$mozuClient = AppliedDiscountClient::removeCouponsClient($orderId, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Removes all coupons previously applied to the order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function removeCouponsAsync($orderId, $updateMode =  null, $version =  null)
	{
		$mozuClient = AppliedDiscountClient::removeCouponsClient($orderId, $updateMode, $version);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

