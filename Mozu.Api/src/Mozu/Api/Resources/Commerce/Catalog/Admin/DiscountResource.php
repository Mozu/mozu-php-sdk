<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\DiscountClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class DiscountResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return DiscountCollection 
	*/
	public function getDiscounts($dataViewMode, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountClient::getDiscountsClient($dataViewMode, $filter, $pageSize, $sortBy, $startIndex, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $discountId 
	* @return Discount 
	*/
	public function getDiscount($dataViewMode,  $discountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountClient::getDiscountClient($dataViewMode,  $discountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $discountId 
	* @return DiscountLocalizedContent 
	*/
	public function getDiscountContent($dataViewMode,  $discountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountClient::getDiscountContentClient($dataViewMode,  $discountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @return string 
	*/
	public function generateRandomCoupon($dataViewMode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountClient::generateRandomCouponClient($dataViewMode, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param Discount $discount 
	* @return Discount 
	*/
	public function createDiscount($dataViewMode, $discount, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountClient::createDiscountClient($dataViewMode, $discount, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param Redemption $redemption 
	* @return Redemption 
	*/
	public function redeemDiscount($dataViewMode, $redemption, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountClient::redeemDiscountClient($dataViewMode, $redemption, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $discountId 
	* @param Discount $discount 
	* @return Discount 
	*/
	public function updateDiscount($dataViewMode, $discount,  $discountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountClient::updateDiscountClient($dataViewMode, $discount,  $discountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $discountId 
	* @param DiscountLocalizedContent $content 
	* @return DiscountLocalizedContent 
	*/
	public function updateDiscountContent($dataViewMode, $content,  $discountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountClient::updateDiscountContentClient($dataViewMode, $content,  $discountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $discountId 
	*/
	public function deleteDiscount($dataViewMode,  $discountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountClient::deleteDiscountClient($dataViewMode,  $discountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	/**
	* 
	*
	* @param int $discountId 
	* @param int $orderNumber 
	*/
	public function unRedeemDiscount($dataViewMode, $discountId =  null, $orderNumber =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = DiscountClient::unRedeemDiscountClient($dataViewMode, $discountId, $orderNumber, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

