<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin;

use Mozu\Api\Clients\Commerce\Catalog\Admin\PriceListClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class PriceListResource {

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
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return PriceListCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getPriceLists($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = PriceListClient::getPriceListsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPriceListsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = PriceListClient::getPriceListsClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $priceListCode 
	* @param string $responseFields 
	* @return PriceList 
	* @deprecated deprecated since version 1.17
	*/
	public function getPriceList($priceListCode, $responseFields =  null)
	{
		$mozuClient = PriceListClient::getPriceListClient($priceListCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $priceListCode 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPriceListAsync($priceListCode, $responseFields =  null)
	{
		$mozuClient = PriceListClient::getPriceListClient($priceListCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param PriceList $priceList 
	* @return PriceList 
	* @deprecated deprecated since version 1.17
	*/
	public function addPriceList($priceList, $responseFields =  null)
	{
		$mozuClient = PriceListClient::addPriceListClient($priceList, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addPriceListAsync($priceList, $responseFields =  null)
	{
		$mozuClient = PriceListClient::addPriceListClient($priceList, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param bool $invalidateCache 
	* @param bool $publishEvents 
	* @param array|PriceListEntry $priceListEntriesIn 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function bulkAddPriceListEntries($priceListEntriesIn, $publishEvents =  null, $invalidateCache =  null)
	{
		$mozuClient = PriceListClient::bulkAddPriceListEntriesClient($priceListEntriesIn, $publishEvents, $invalidateCache);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param bool $invalidateCache 
	* @param bool $publishEvents 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function bulkAddPriceListEntriesAsync($priceListEntriesIn, $publishEvents =  null, $invalidateCache =  null)
	{
		$mozuClient = PriceListClient::bulkAddPriceListEntriesClient($priceListEntriesIn, $publishEvents, $invalidateCache);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param bool $invalidateCache 
	* @param bool $publishEvents 
	* @param array|PriceListEntry $priceListEntriesIn 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function bulkDeletePriceListEntries($priceListEntriesIn, $publishEvents =  null, $invalidateCache =  null)
	{
		$mozuClient = PriceListClient::bulkDeletePriceListEntriesClient($priceListEntriesIn, $publishEvents, $invalidateCache);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param bool $invalidateCache 
	* @param bool $publishEvents 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function bulkDeletePriceListEntriesAsync($priceListEntriesIn, $publishEvents =  null, $invalidateCache =  null)
	{
		$mozuClient = PriceListClient::bulkDeletePriceListEntriesClient($priceListEntriesIn, $publishEvents, $invalidateCache);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param bool $invalidateCache 
	* @param bool $publishEvents 
	* @param array|PriceListEntry $priceListEntriesIn 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function bulkUpdatePriceListEntries($priceListEntriesIn, $publishEvents =  null, $invalidateCache =  null)
	{
		$mozuClient = PriceListClient::bulkUpdatePriceListEntriesClient($priceListEntriesIn, $publishEvents, $invalidateCache);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param bool $invalidateCache 
	* @param bool $publishEvents 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function bulkUpdatePriceListEntriesAsync($priceListEntriesIn, $publishEvents =  null, $invalidateCache =  null)
	{
		$mozuClient = PriceListClient::bulkUpdatePriceListEntriesClient($priceListEntriesIn, $publishEvents, $invalidateCache);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $priceListCode 
	* @param string $responseFields 
	* @param PriceList $priceList 
	* @return PriceList 
	* @deprecated deprecated since version 1.17
	*/
	public function updatePriceList($priceList, $priceListCode, $responseFields =  null)
	{
		$mozuClient = PriceListClient::updatePriceListClient($priceList, $priceListCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $priceListCode 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updatePriceListAsync($priceList, $priceListCode, $responseFields =  null)
	{
		$mozuClient = PriceListClient::updatePriceListClient($priceList, $priceListCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param bool $cascadeDeleteEntries 
	* @param string $priceListCode 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deletePriceList($priceListCode, $cascadeDeleteEntries =  null)
	{
		$mozuClient = PriceListClient::deletePriceListClient($priceListCode, $cascadeDeleteEntries);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param bool $cascadeDeleteEntries 
	* @param string $priceListCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deletePriceListAsync($priceListCode, $cascadeDeleteEntries =  null)
	{
		$mozuClient = PriceListClient::deletePriceListClient($priceListCode, $cascadeDeleteEntries);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
