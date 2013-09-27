<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Shipping\Instance;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Shipping\Instance\InstanceCarrierClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Configure the shipping carrier for the site.
*/
class InstanceCarrierResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of carrier configurations according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return CarrierConfigurationCollection 
	*/
	public function getConfigurations($filter, $pageSize, $sortBy, $startIndex)
	{
		$mozuClient = InstanceCarrierClient::getConfigurationsClient($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the carrier configuration for a specific site by providing the carrier ID.
	*
	* @param string $carrierId Identifier of the shipping carrier associated with the configuration details to retrieve.
	* @return CarrierConfiguration 
	*/
	public function getConfiguration($carrierId)
	{
		$mozuClient = InstanceCarrierClient::getConfigurationClient($carrierId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Create a new carrier configuration for the site.
	*
	* @param string $carrierId Identifier of the carrier configuration being created.
	* @param CarrierConfiguration $carrierConfiguration The properties of the carrier configuration to create.
	* @return CarrierConfiguration 
	*/
	public function createConfiguration($carrierId, $carrierConfiguration)
	{
		$mozuClient = InstanceCarrierClient::createConfigurationClient($carrierId, $carrierConfiguration);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Update and existing shipping carrier configuration.
	*
	* @param string $carrierId Identifier of the shipping carrier configuration to update.
	* @param CarrierConfiguration $carrierConfiguration The properties of the shipping carrier configuration to update.
	* @return CarrierConfiguration 
	*/
	public function updateConfiguration($carrierId, $carrierConfiguration)
	{
		$mozuClient = InstanceCarrierClient::updateConfigurationClient($carrierId, $carrierConfiguration);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Delete the shipping carrier for the site.
	*
	* @param string $carrierId Identifier of the specific shipping carrier to delete.
	*/
	public function deleteConfiguration($carrierId)
	{
		$mozuClient = InstanceCarrierClient::deleteConfigurationClient($carrierId);
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();

	}
	
	
}

?>

