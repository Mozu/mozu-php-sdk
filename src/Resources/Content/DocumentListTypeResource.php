<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content;

use Mozu\Api\Clients\Content\DocumentListTypeClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Headers;

/**
* 
*/
class DocumentListTypeResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* 
	*
	* @param int $pageSize 
	* @param string $responseFields 
	* @param int $startIndex 
	* @return DocumentListTypeCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getDocumentListTypes($pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$mozuClient = DocumentListTypeClient::getDocumentListTypesClient($this->dataViewMode, $pageSize, $startIndex, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param int $pageSize 
	* @param string $responseFields 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDocumentListTypesAsync($pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$mozuClient = DocumentListTypeClient::getDocumentListTypesClient($this->dataViewMode, $pageSize, $startIndex, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $documentListTypeFQN 
	* @param string $responseFields 
	* @return DocumentListType 
	* @deprecated deprecated since version 1.17
	*/
	public function getDocumentListType($documentListTypeFQN, $responseFields =  null)
	{
		$mozuClient = DocumentListTypeClient::getDocumentListTypeClient($this->dataViewMode, $documentListTypeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $documentListTypeFQN 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getDocumentListTypeAsync($documentListTypeFQN, $responseFields =  null)
	{
		$mozuClient = DocumentListTypeClient::getDocumentListTypeClient($this->dataViewMode, $documentListTypeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param DocumentListType $list 
	* @return DocumentListType 
	* @deprecated deprecated since version 1.17
	*/
	public function createDocumentListType($list, $responseFields =  null)
	{
		$mozuClient = DocumentListTypeClient::createDocumentListTypeClient($this->dataViewMode, $list, $responseFields);
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
	public function createDocumentListTypeAsync($list, $responseFields =  null)
	{
		$mozuClient = DocumentListTypeClient::createDocumentListTypeClient($this->dataViewMode, $list, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $documentListTypeFQN 
	* @param string $responseFields 
	* @param DocumentListType $list 
	* @return DocumentListType 
	* @deprecated deprecated since version 1.17
	*/
	public function updateDocumentListType($list, $documentListTypeFQN, $responseFields =  null)
	{
		$mozuClient = DocumentListTypeClient::updateDocumentListTypeClient($list, $documentListTypeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $documentListTypeFQN 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateDocumentListTypeAsync($list, $documentListTypeFQN, $responseFields =  null)
	{
		$mozuClient = DocumentListTypeClient::updateDocumentListTypeClient($list, $documentListTypeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
