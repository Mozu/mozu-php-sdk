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

use Mozu\Api\Clients\Commerce\Catalog\Admin\Products\ProductExtraClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\ProductAdmin\ProductExtraValueDeltaPrice;
use Mozu\Api\Contracts\ProductAdmin\ProductExtra;

/**
* Use the Extras resource to configure an extra product attribute for products associated with the product type that uses the extra attribute.
*/
class ProductExtraResource {

	private $apiContext;
	private $dataViewMode;
	public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}

	

	/**
	* Retrieves a list of extras configured for the product according to any defined filter and sort criteria.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return array|ProductExtra 
	*/
	public function getExtras($productCode)
	{
		$mozuClient = ProductExtraClient::getExtrasClient($this->dataViewMode, $productCode);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $value 
	* @return array|ProductExtraValueDeltaPrice 
	*/
	public function getExtraValueLocalizedDeltaPrices($productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductExtraClient::getExtraValueLocalizedDeltaPricesClient($this->dataViewMode, $productCode, $attributeFQN, $value);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $currencyCode 
	* @param string $productCode 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value 
	* @return ProductExtraValueDeltaPrice 
	*/
	public function getExtraValueLocalizedDeltaPrice($productCode, $attributeFQN, $value, $currencyCode, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::getExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $productCode, $attributeFQN, $value, $currencyCode, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves the details of an extra attribute configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return ProductExtra 
	*/
	public function getExtra($productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::getExtraClient($this->dataViewMode, $productCode, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value 
	* @param ProductExtraValueDeltaPrice $localizedDeltaPrice 
	* @return ProductExtraValueDeltaPrice 
	*/
	public function addExtraValueLocalizedDeltaPrice($localizedDeltaPrice, $productCode, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::addExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $localizedDeltaPrice, $productCode, $attributeFQN, $value, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Configure an extra attribute for the product specified in the request.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductExtra $productExtra Properties of the product extra to configure for the specified product.
	* @return ProductExtra 
	*/
	public function addExtra($productExtra, $productCode, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::addExtraClient($this->dataViewMode, $productExtra, $productCode, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $value 
	* @param array|ProductExtraValueDeltaPrice $localizedDeltaPrice 
	* @return array|ProductExtraValueDeltaPrice 
	*/
	public function updateExtraValueLocalizedDeltaPrices($localizedDeltaPrice, $productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductExtraClient::updateExtraValueLocalizedDeltaPricesClient($this->dataViewMode, $localizedDeltaPrice, $productCode, $attributeFQN, $value);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $currencyCode 
	* @param string $productCode 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value 
	* @param ProductExtraValueDeltaPrice $localizedDeltaPrice 
	* @return ProductExtraValueDeltaPrice 
	*/
	public function updateExtraValueLocalizedDeltaPrice($localizedDeltaPrice, $productCode, $attributeFQN, $value, $currencyCode, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::updateExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $localizedDeltaPrice, $productCode, $attributeFQN, $value, $currencyCode, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates the configuration of an extra attribute for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductExtra $productExtra Properties of the extra attribute to update for the specified product.
	* @return ProductExtra 
	*/
	public function updateExtra($productExtra, $productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::updateExtraClient($this->dataViewMode, $productExtra, $productCode, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Delete a product extra configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return void
	*/
	public function deleteExtra($productCode, $attributeFQN)
	{
		$mozuClient = ProductExtraClient::deleteExtraClient($this->dataViewMode, $productCode, $attributeFQN);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $currencyCode 
	* @param string $productCode 
	* @param string $value Use this field to include those fields which are not included by default.
	* @return void
	*/
	public function deleteExtraValueLocalizedDeltaPrice($productCode, $attributeFQN, $value, $currencyCode)
	{
		$mozuClient = ProductExtraClient::deleteExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $productCode, $attributeFQN, $value, $currencyCode);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	
}

?>

