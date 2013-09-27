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
use Mozu\Api\Clients\Content\DocumentDraftSummaryClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Use the document publishing subresource to manage and publish document drafts in the Content service.
*/
class DocumentDraftSummaryResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of the documents currently in draft state, according to any defined filter and sort criteria.
	*
	* @param string $documentLists Lists that contain the document drafts.
	* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param int $startIndex Indicates the zero-based offset in the complete result set where the returned entities begin, when creating paged results from a query. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return DocumentDraftSummaryPagedCollection 
	*/
	public function listDocumentDraftSummaries($documentLists, $pageSize, $startIndex)
	{
		$mozuClient = DocumentDraftSummaryClient::listDocumentDraftSummariesClient($documentLists, $pageSize, $startIndex);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Publish one or more document drafts to live content on the site.
	*
	* @param string $documentLists List of document lists that contain documents to publish.
	* @param array|string $documentIds List of unique identifiers of the document drafts to publish.
	*/
	public function publishDocuments($documentLists, $documentIds)
	{
		$mozuClient = DocumentDraftSummaryClient::publishDocumentsClient($documentLists, $documentIds);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	/**
	* Deletes the drafts of the specified documents. Published documents cannot be deleted.
	*
	* @param string $documentIds Unique identifiers of the documents to delete.
	* @param string $documentLists List of document lists that contain documents to delete.
	*/
	public function deleteDocumentDrafts($documentIds, $documentLists)
	{
		$mozuClient = DocumentDraftSummaryClient::deleteDocumentDraftsClient($documentIds, $documentLists);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	
}

?>

