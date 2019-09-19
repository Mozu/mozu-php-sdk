<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce;

use Mozu\Api\Clients\Commerce\TargetRuleClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class TargetRuleResource {

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
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return TargetRuleCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getTargetRules($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::getTargetRulesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getTargetRulesAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::getTargetRulesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $code 
	* @param string $responseFields 
	* @return TargetRule 
	* @deprecated deprecated since version 1.17
	*/
	public function getTargetRule($code, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::getTargetRuleClient($code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $code 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getTargetRuleAsync($code, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::getTargetRuleClient($code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param TargetRule $targetRule 
	* @return TargetRule 
	* @deprecated deprecated since version 1.17
	*/
	public function createTargetRule($targetRule, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::createTargetRuleClient($targetRule, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function createTargetRuleAsync($targetRule, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::createTargetRuleClient($targetRule, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param TargetRule $targetRule 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function validateTargetRule($targetRule)
	{
		$mozuClient = TargetRuleClient::validateTargetRuleClient($targetRule);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function validateTargetRuleAsync($targetRule)
	{
		$mozuClient = TargetRuleClient::validateTargetRuleClient($targetRule);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $code 
	* @param string $responseFields 
	* @param TargetRule $targetRule 
	* @return TargetRule 
	* @deprecated deprecated since version 1.17
	*/
	public function updateTargetRule($targetRule, $code, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::updateTargetRuleClient($targetRule, $code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $code 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function updateTargetRuleAsync($targetRule, $code, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::updateTargetRuleClient($targetRule, $code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $code 
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function deleteTargetRule($code)
	{
		$mozuClient = TargetRuleClient::deleteTargetRuleClient($code);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $code 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function deleteTargetRuleAsync($code)
	{
		$mozuClient = TargetRuleClient::deleteTargetRuleClient($code);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

