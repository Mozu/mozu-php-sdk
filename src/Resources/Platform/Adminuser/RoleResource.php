<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform\Adminuser;

use Mozu\Api\Clients\Platform\Adminuser\RoleClient;
use Mozu\Api\ApiContext;


/**
* 
*/
class RoleResource {

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
	* @param int $startIndex 
	* @return RoleCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getRoles($startIndex =  null, $pageSize =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = RoleClient::getRolesClient($startIndex, $pageSize, $filter, $responseFields);
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
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getRolesAsync($startIndex =  null, $pageSize =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = RoleClient::getRolesClient($startIndex, $pageSize, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

