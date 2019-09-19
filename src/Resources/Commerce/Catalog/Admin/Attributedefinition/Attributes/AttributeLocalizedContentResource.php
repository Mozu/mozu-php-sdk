<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Attributes\AttributeLocalizedContentClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class AttributeLocalizedContentResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* 
	*
	* @param string $attributeFQN 
	* @return array|AttributeLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttributeLocalizedContents($attributeFQN)
	{
		$mozuClient = AttributeLocalizedContentClient::getAttributeLocalizedContentsClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAttributeLocalizedContentsAsync($attributeFQN)
	{
		$mozuClient = AttributeLocalizedContentClient::getAttributeLocalizedContentsClient($attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $responseFields 
	* @return AttributeLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function getAttributeLocalizedContent($attributeFQN, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::getAttributeLocalizedContentClient($attributeFQN, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAttributeLocalizedContentAsync($attributeFQN, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::getAttributeLocalizedContentClient($attributeFQN, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @param AttributeLocalizedContent $localizedContent 
	* @return AttributeLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function addLocalizedContent($localizedContent, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::addLocalizedContentClient($localizedContent, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function addLocalizedContentAsync($localizedContent, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::addLocalizedContentClient($localizedContent, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param array|AttributeLocalizedContent $localizedContent 
	* @return array|AttributeLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function updateLocalizedContents($localizedContent, $attributeFQN)
	{
		$mozuClient = AttributeLocalizedContentClient::updateLocalizedContentsClient($localizedContent, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateLocalizedContentsAsync($localizedContent, $attributeFQN)
	{
		$mozuClient = AttributeLocalizedContentClient::updateLocalizedContentsClient($localizedContent, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $responseFields 
	* @param AttributeLocalizedContent $localizedContent 
	* @return AttributeLocalizedContent 
	* @deprecated deprecated since version 1.17
	*/
	public function updateLocalizedContent($localizedContent, $attributeFQN, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::updateLocalizedContentClient($localizedContent, $attributeFQN, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateLocalizedContentAsync($localizedContent, $attributeFQN, $localeCode, $responseFields =  null)
	{
		$mozuClient = AttributeLocalizedContentClient::updateLocalizedContentClient($localizedContent, $attributeFQN, $localeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteLocalizedContent($attributeFQN, $localeCode)
	{
		$mozuClient = AttributeLocalizedContentClient::deleteLocalizedContentClient($attributeFQN, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $attributeFQN 
	* @param string $localeCode 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteLocalizedContentAsync($attributeFQN, $localeCode)
	{
		$mozuClient = AttributeLocalizedContentClient::deleteLocalizedContentClient($attributeFQN, $localeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

