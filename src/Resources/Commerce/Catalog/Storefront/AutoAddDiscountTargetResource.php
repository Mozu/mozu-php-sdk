<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Storefront;

use Mozu\Api\Clients\Commerce\Catalog\Storefront\AutoAddDiscountTargetClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class AutoAddDiscountTargetResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param int $discountId 
	* @param string $responseFields 
	* @return AutoAddDiscountTarget 
	* @deprecated deprecated since version 1.17
	*/
	public function getAutoAddTarget($discountId, $responseFields =  null)
	{
		$mozuClient = AutoAddDiscountTargetClient::getAutoAddTargetClient($discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param int $discountId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAutoAddTargetAsync($discountId, $responseFields =  null)
	{
		$mozuClient = AutoAddDiscountTargetClient::getAutoAddTargetClient($discountId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
