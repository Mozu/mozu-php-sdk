<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Attributedefinition;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Customer\Attributedefinition\AttributeClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class AttributeResource {

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
	* @param string $sortBy 
	* @param int $startIndex 
	* @return AttributeCollection 
	*/
	public function getAttributes($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null)
	{
		$mozuClient = AttributeClient::getAttributesClient($startIndex, $pageSize, $sortBy, $filter);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @return Attribute 
	*/
	public function getAttribute($attributeFQN)
	{
		$mozuClient = AttributeClient::getAttributeClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @return array|AttributeVocabularyValue 
	*/
	public function getAttributeVocabularyValues($attributeFQN)
	{
		$mozuClient = AttributeClient::getAttributeVocabularyValuesClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

