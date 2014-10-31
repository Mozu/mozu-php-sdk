<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Event\Push\Subscriptions;

use Mozu\Api\Clients\Event\Push\Subscriptions\EventDeliverySummaryClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\Event\EventDeliverySummaryCollection;
use Mozu\Api\Contracts\Event\EventDeliverySummary;

/**
* 
*/
class EventDeliverySummaryResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	

	/**
	* This operation method is the external/public event entity used specifically in pull/poll event scenarios.
	*
	* @param int $id This parameter is the unique identifer for an event attempt delivery summary.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $subscriptionId This operation paramenter is the unique identifer for a subscription.
	* @return EventDeliverySummary 
	*/
	public function getDeliveryAttemptSummary($subscriptionId, $id =  null, $responseFields =  null)
	{
		$mozuClient = EventDeliverySummaryClient::getDeliveryAttemptSummaryClient($subscriptionId, $id, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	/**
	* 
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @param string $subscriptionId 
	* @return EventDeliverySummaryCollection 
	*/
	public function getDeliveryAttemptSummaries($subscriptionId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = EventDeliverySummaryClient::getDeliveryAttemptSummariesClient($subscriptionId, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	
}

?>

