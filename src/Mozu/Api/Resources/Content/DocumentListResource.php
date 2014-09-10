<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content;

use Mozu\Api\Clients\Content\DocumentListClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\Content\DocumentList;
use Mozu\Api\Contracts\Content\DocumentListCollection;

/**
* Use the document lists resource to organize your site's documents into a hierarchy. Document lists can contain documents, folders, and complete hierarchies of folders, which contain documents with unique names.
*/
class DocumentListResource {

	private $apiContext;
	private $dataViewMode;
	public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}

	

	/**
	* Retrieves a collection of document lists.
	*
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $startIndex 
	* @return DocumentListCollection 
	*/
	public function getDocumentLists($pageSize =  null, $startIndex =  null, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::getDocumentListsClient($this->dataViewMode, $pageSize, $startIndex, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieve the details of a document list by providing the list name.
	*
	* @param string $documentListName The name of the document list.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return DocumentList 
	*/
	public function getDocumentList($documentListName, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::getDocumentListClient($this->dataViewMode, $documentListName, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DocumentList $list 
	* @return DocumentList 
	*/
	public function createDocumentList($list, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::createDocumentListClient($this->dataViewMode, $list, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $documentListName 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param DocumentList $list 
	* @return DocumentList 
	*/
	public function updateDocumentList($list, $documentListName, $responseFields =  null)
	{
		$mozuClient = DocumentListClient::updateDocumentListClient($list, $documentListName, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $documentListName 
	* @return void
	*/
	public function deleteDocumentList($documentListName)
	{
		$mozuClient = DocumentListClient::deleteDocumentListClient($documentListName);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	
}

?>

