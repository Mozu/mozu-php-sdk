<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Payments;

use Mozu\Api\Clients\Commerce\Payments\PublicCardClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class PublicCardResource {

				



	/**
	* 
	*
	* @param string $responseFields 
	* @param PublicCard $request 
	* @return SyncResponse 
	* @deprecated deprecated since version 1.17
	*/
	public function create($request, $responseFields =  null)
	{
		$mozuClient = PublicCardClient::createClient($request, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createAsync($request, $responseFields =  null)
	{
		$mozuClient = PublicCardClient::createClient($request, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $cardId 
	* @param string $responseFields 
	* @param GetGiftCardBalanceRequest $balanceRequest 
	* @return SyncResponse 
	* @deprecated deprecated since version 1.17
	*/
	public function getGiftCardBalance($balanceRequest, $cardId, $responseFields =  null)
	{
		$mozuClient = PublicCardClient::getGiftCardBalanceClient($balanceRequest, $cardId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $cardId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getGiftCardBalanceAsync($balanceRequest, $cardId, $responseFields =  null)
	{
		$mozuClient = PublicCardClient::getGiftCardBalanceClient($balanceRequest, $cardId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param GetGiftCardBalanceRequest $balanceRequest 
	* @return SyncResponse 
	* @deprecated deprecated since version 1.17
	*/
	public function getUnregisteredGiftCardBalance($balanceRequest, $responseFields =  null)
	{
		$mozuClient = PublicCardClient::getUnregisteredGiftCardBalanceClient($balanceRequest, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getUnregisteredGiftCardBalanceAsync($balanceRequest, $responseFields =  null)
	{
		$mozuClient = PublicCardClient::getUnregisteredGiftCardBalanceClient($balanceRequest, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $cardId 
	* @param string $responseFields 
	* @param PublicCard $request 
	* @return SyncResponse 
	* @deprecated deprecated since version 1.17
	*/
	public function update($request, $cardId, $responseFields =  null)
	{
		$mozuClient = PublicCardClient::updateClient($request, $cardId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $cardId 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateAsync($request, $cardId, $responseFields =  null)
	{
		$mozuClient = PublicCardClient::updateClient($request, $cardId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $cardId 
	* @deprecated deprecated since version 1.17
	*/
	public function delete($cardId)
	{
		$mozuClient = PublicCardClient::deleteClient($cardId);
		$mozuClient->execute();

	}
	
/**
	* 
	*
	* @param string $cardId 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteAsync($cardId)
	{
		$mozuClient = PublicCardClient::deleteClient($cardId);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
