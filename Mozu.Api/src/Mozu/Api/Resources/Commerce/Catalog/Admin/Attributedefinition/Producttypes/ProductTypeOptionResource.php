<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypeOptionClient;
use Mozu\Api\ApiContext;

/**
* 
*/
class ProductTypeOptionResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param int $productTypeId 
	* @return array|AttributeInProductType 
	*/
	public function getOptions($dataViewMode,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductTypeOptionClient::getOptionsClient($dataViewMode,  $productTypeId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param int $productTypeId 
	* @return AttributeInProductType 
	*/
	public function getOption($dataViewMode,  $attributeFQN,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductTypeOptionClient::getOptionClient($dataViewMode,  $attributeFQN,  $productTypeId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $productTypeId 
	* @param AttributeInProductType $attributeInProductType 
	* @return AttributeInProductType 
	*/
	public function addOption($dataViewMode, $attributeInProductType,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductTypeOptionClient::addOptionClient($dataViewMode, $attributeInProductType,  $productTypeId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param int $productTypeId 
	* @param AttributeInProductType $attributeInProductType 
	* @return AttributeInProductType 
	*/
	public function updateOption($dataViewMode, $attributeInProductType,  $attributeFQN,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductTypeOptionClient::updateOptionClient($dataViewMode, $attributeInProductType,  $attributeFQN,  $productTypeId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param int $productTypeId 
	*/
	public function deleteOption($dataViewMode,  $attributeFQN,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = ProductTypeOptionClient::deleteOptionClient($dataViewMode,  $attributeFQN,  $productTypeId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

