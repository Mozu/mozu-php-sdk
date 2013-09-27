<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Content\DocumentListClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Use the document lists resource to organize your site's documents into a hierarchy. Document lists can contain documents, folders, and complete hierarchies of folders, which contain documents with unique names.
*/
class DocumentListResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a collection of document lists.
	*
	* @param long $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sort 
	* @param long $startIndex 
	* @return DocumentListCollection 
	*/
	public function getDocumentLists($pageSize, $sort, $startIndex)
	{
		$mozuClient = DocumentListClient::getDocumentListsClient($pageSize, $sort, $startIndex);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieve the details of a document list by providing the list name.
	*
	* @param string $documentListName The name of the document list.
	* @return DocumentList 
	*/
	public function getDocumentList($documentListName)
	{
		$mozuClient = DocumentListClient::getDocumentListClient($documentListName);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

