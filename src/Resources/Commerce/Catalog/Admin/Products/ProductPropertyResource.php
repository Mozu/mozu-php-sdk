<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Products;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Products\ProductPropertyClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Headers;

/**
* Use the Properties resource to configure a property attribute for an individual product associated with a product type that uses the property attribute, as well as set property values for the product.
*/
class ProductPropertyResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* 
	*
	* @param string $productCode 
	* @return array|ProductProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function getProperties($productCode)
	{
		$mozuClient = ProductPropertyClient::getPropertiesClient($this->dataViewMode, $productCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $productCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPropertiesAsync($productCode)
	{
		$mozuClient = ProductPropertyClient::getPropertiesClient($this->dataViewMode, $productCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $value 
	* @return array|ProductPropertyValueLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function getPropertyValueLocalizedContents($productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductPropertyClient::getPropertyValueLocalizedContentsClient($this->dataViewMode, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $value 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPropertyValueLocalizedContentsAsync($productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductPropertyClient::getPropertyValueLocalizedContentsClient($this->dataViewMode, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $productCode 
	* @param string $responseFields 
	* @param string $value 
	* @return ProductPropertyValueLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function getPropertyValueLocalizedContent($productCode, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::getPropertyValueLocalizedContentClient($this->dataViewMode, $productCode, $attributeFQN, $value, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $productCode 
	* @param string $responseFields 
	* @param string $value 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPropertyValueLocalizedContentAsync($productCode, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::getPropertyValueLocalizedContentClient($this->dataViewMode, $productCode, $attributeFQN, $value, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $responseFields 
	* @return ProductProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function getProperty($productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::getPropertyClient($this->dataViewMode, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getPropertyAsync($productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::getPropertyClient($this->dataViewMode, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $responseFields 
	* @param string $value 
	* @param ProductPropertyValueLocalizedContent $localizedContent 
	* @return ProductPropertyValueLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function addPropertyValueLocalizedContent($localizedContent, $productCode, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::addPropertyValueLocalizedContentClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $responseFields 
	* @param string $value 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addPropertyValueLocalizedContentAsync($localizedContent, $productCode, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::addPropertyValueLocalizedContentClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $productCode 
	* @param string $responseFields 
	* @param ProductProperty $productProperty Properties of the property attribute to configure for a product.
	* @return ProductProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function addProperty($productProperty, $productCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::addPropertyClient($this->dataViewMode, $productProperty, $productCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $productCode 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addPropertyAsync($productProperty, $productCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::addPropertyClient($this->dataViewMode, $productProperty, $productCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $value 
	* @param array|ProductPropertyValueLocalizedContent $localizedContent 
	* @return array|ProductPropertyValueLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function updatePropertyValueLocalizedContents($localizedContent, $productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductPropertyClient::updatePropertyValueLocalizedContentsClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $value 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updatePropertyValueLocalizedContentsAsync($localizedContent, $productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductPropertyClient::updatePropertyValueLocalizedContentsClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $productCode 
	* @param string $responseFields 
	* @param string $value 
	* @param ProductPropertyValueLocalizedContent $localizedContent 
	* @return ProductPropertyValueLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function updatePropertyValueLocalizedContent($localizedContent, $productCode, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::updatePropertyValueLocalizedContentClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $productCode 
	* @param string $responseFields 
	* @param string $value 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updatePropertyValueLocalizedContentAsync($localizedContent, $productCode, $attributeFQN, $value, $localeCode, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::updatePropertyValueLocalizedContentClient($this->dataViewMode, $localizedContent, $productCode, $attributeFQN, $value, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $responseFields 
	* @param ProductProperty $productProperty Details of the property attribute to update for the product configuration.
	* @return ProductProperty 
	* @deprecated deprecated since version 1.17
	*/
	public function updateProperty($productProperty, $productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::updatePropertyClient($this->dataViewMode, $productProperty, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updatePropertyAsync($productProperty, $productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductPropertyClient::updatePropertyClient($this->dataViewMode, $productProperty, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteProperty($productCode, $attributeFQN)
	{
		$mozuClient = ProductPropertyClient::deletePropertyClient($this->dataViewMode, $productCode, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $productCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deletePropertyAsync($productCode, $attributeFQN)
	{
		$mozuClient = ProductPropertyClient::deletePropertyClient($this->dataViewMode, $productCode, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $productCode 
	* @param string $value 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deletePropertyValueLocalizedContent($productCode, $attributeFQN, $value, $localeCode)
	{
		$mozuClient = ProductPropertyClient::deletePropertyValueLocalizedContentClient($this->dataViewMode, $productCode, $attributeFQN, $value, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $productCode 
	* @param string $value 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deletePropertyValueLocalizedContentAsync($productCode, $attributeFQN, $value, $localeCode)
	{
		$mozuClient = ProductPropertyClient::deletePropertyValueLocalizedContentClient($this->dataViewMode, $productCode, $attributeFQN, $value, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
