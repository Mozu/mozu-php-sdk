<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\General;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Settings\General\IPBlockClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* General site setting subresource to define global settings for the site such as website name, shipping and email addresses, and logo images. Also, block undesirable IP addresses using this resource.
*/
class IPBlockResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of IP blocks.
	*
	* @return IPBlockCollection 
	*/
	public function getIPBlocks()
	{
		$mozuClient = IPBlockClient::getIPBlocksClient();
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieve the details of a single IP block by providing the IP block ID.
	*
	* @param int $ipBlockId Unique identifier of the IP block.
	* @return IPBlock 
	*/
	public function getIPBlock($ipBlockId)
	{
		$mozuClient = IPBlockClient::getIPBlockClient($ipBlockId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Create a new IP block to deny server access. Prevents undesirable connections such as brute force attacks. Block access to the storefront, admin area, or both.
	*
	* @param IPBlock $ipBlock Properties of the IP block.
	* @return IPBlock 
	*/
	public function createIPBlock($ipBlock)
	{
		$mozuClient = IPBlockClient::createIPBlockClient($ipBlock);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Modifies an IP block.
	*
	* @param int $ipBlockId Identifier of the IP block.
	* @param IPBlock $ipBlock Properties of the IP block.
	* @return IPBlock 
	*/
	public function updateIPBlock($ipBlockId, $ipBlock)
	{
		$mozuClient = IPBlockClient::updateIPBlockClient($ipBlockId, $ipBlock);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Delete the IP block specified by the IP block ID.
	*
	* @param int $ipBlockId Unique identifier of the IP block.
	*/
	public function deleteIPBlock($ipBlockId)
	{
		$mozuClient = IPBlockClient::deleteIPBlockClient($ipBlockId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	
}

?>

