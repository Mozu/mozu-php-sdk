<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\DocumentDraftSummaryUrl;

/**
* 
*/
class DocumentDraftSummaryClient {

	/**
	* 
	*
	* @param string $documentLists 
	* @param int $pageSize 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function listDocumentDraftSummariesClient($documentLists =  null, $pageSize =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DocumentDraftSummaryUrl::listDocumentDraftSummariesUrl($documentLists, $pageSize, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentLists 
	* @param array|string $documentIds 
	*/
	public static function publishDocumentsClient($documentIds, $documentLists =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DocumentDraftSummaryUrl::publishDocumentsUrl($documentLists);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($documentIds);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $documentIds 
	* @param string $documentLists 
	*/
	public static function deleteDocumentDraftsClient( $documentIds, $documentLists =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = DocumentDraftSummaryUrl::deleteDocumentDraftsUrl($documentIds, $documentLists);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

