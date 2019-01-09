<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Accounts;

use Mozu\Api\Clients\Commerce\Customer\Accounts\CustomerAttributeClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\Customer\CustomerAttribute;
use Mozu\Api\Contracts\Customer\CustomerAttributeCollection;

/**
* Use the Attributes subresource to manage the attributes used to uniquely identify shopper accounts, such as gender or age.
*/
class CustomerAttributeResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	

	/**
	* Retrieves the contents of an attribute associated with the specified customer account.
	*
	* @param int $accountId Identifier of the customer account associated with the attribute to retrieve.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CustomerAttribute 
	*/
	public function getAccountAttribute($accountId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::getAccountAttributeClient($accountId, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Retrieves the list of customer account attributes.
	*
	* @param int $accountId Identifier of the customer account associated with the attributes to retrieve.
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CustomerAttributeCollection 
	*/
	public function getAccountAttributes($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::getAccountAttributesClient($accountId, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Applies a defined attribute to the customer account specified in the request and assigns a value to the customer attribute.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAttribute $attribute The attribute to add to the customer account.
	* @return CustomerAttribute 
	*/
	public function addAccountAttribute($attribute, $accountId, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::addAccountAttributeClient($attribute, $accountId, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Updates one or more details of a customer account attribute.
	*
	* @param int $accountId Identifier of the customer account associated with the attribute.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAttribute $attribute Properties of the customer account attribute to update.
	* @return CustomerAttribute 
	*/
	public function updateAccountAttribute($attribute, $accountId, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = CustomerAttributeClient::updateAccountAttributeClient($attribute, $accountId, $attributeFQN, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* Removes the attribute specified in the request from the customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @return void
	*/
	public function deleteAccountAttribute($accountId, $attributeFQN)
	{
		$mozuClient = CustomerAttributeClient::deleteAccountAttributeClient($accountId, $attributeFQN);
		$mozuClient->withContext($this->apiContext)
				->execute();

	}
	
	
}

?>
