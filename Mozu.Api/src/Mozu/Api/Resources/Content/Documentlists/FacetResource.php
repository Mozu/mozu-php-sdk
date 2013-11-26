<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Content\Documentlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Content\Documentlists\FacetClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class FacetResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $documentListName 
	* @param string $propertyName 
	* @return array|Facet 
	*/
	public function getFacets( $documentListName,  $propertyName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = FacetClient::getFacetsClient( $documentListName,  $propertyName, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

