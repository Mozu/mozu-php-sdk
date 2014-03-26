<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Products;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Products\ProductPropertyClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Query, create, and update product properties.
*/
class ProductPropertyResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of product properties by providing the product code.
	*
	* @param string $productCode Identifies the product for which a list of properties is being retrieved.
	* @return array|ProductProperty 
	*/
	public function getProperties($dataViewMode, $productCode, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ProductPropertyClient::getPropertiesClient($dataViewMode, $productCode, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the individual product property by providing the product code and the attribute's fully qualified name.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param string $productCode Identifies the product for which a single property is being retrieved.
	* @return ProductProperty 
	*/
	public function getProperty($dataViewMode, $productCode, $attributeFQN, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ProductPropertyClient::getPropertyClient($dataViewMode, $productCode, $attributeFQN, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds or creates an individual property by providing the product code.
	*
	* @param string $productCode The merchant-created code that uniquely identifies the product such as a SKU or item number. Identifies the product for which a new property is created.
	* @param ProductProperty $productProperty The details of the product property including the attribute detail, user's fully qualified name, and the list of product property values to add.
	* @return ProductProperty 
	*/
	public function addProperty($dataViewMode, $productProperty, $productCode, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ProductPropertyClient::addPropertyClient($dataViewMode, $productProperty, $productCode, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update the details of a product property by providng the product code and the attribute's fully qualified name.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param string $productCode Identifies the product for which a list of properties is being updated.
	* @param ProductProperty $productProperty The details of the product property including the attribute detail, user's fully qualified name, and the list of product property values to update.
	* @return ProductProperty 
	*/
	public function updateProperty($dataViewMode, $productProperty, $productCode, $attributeFQN, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ProductPropertyClient::updatePropertyClient($dataViewMode, $productProperty, $productCode, $attributeFQN, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes the property by providing the product code and the attribute's fully qualified name.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param string $productCode Identifies the product for which a new property is being deleted.
	*/
	public function deleteProperty($dataViewMode, $productCode, $attributeFQN, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ProductPropertyClient::deletePropertyClient($dataViewMode, $productCode, $attributeFQN, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

