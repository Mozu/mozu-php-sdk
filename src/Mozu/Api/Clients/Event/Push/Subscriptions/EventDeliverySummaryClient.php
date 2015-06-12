<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Event\Push\Subscriptions;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Event\Push\Subscriptions\EventDeliverySummaryUrl;


/**
* Provides details for each attempted delivery of the event to the endpoint.
*/
class EventDeliverySummaryClient {

	/**
	* This operation method is the external/public event entity used specifically in pull/poll event scenarios.
	*
	* @param int $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $subscriptionId Unique identifier for a subscription, such as subscribing tenants for an event or to receive a notification.
	* @return MozuClient
	*/
	public static function getDeliveryAttemptSummaryClient($subscriptionId, $id =  null, $responseFields =  null)
	{
		$url = EventDeliverySummaryUrl::getDeliveryAttemptSummaryUrl($id, $responseFields, $subscriptionId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a collection of data for delivery attempts of events and notifications. These are notifications sent to subscribing sites and tenants. A paged list is returned sorted and filtered per the entered parameters.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The amount is divided and displayed on the `pageCount `amount of pages. The default is 20 and maximum value is 200 per page.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a `pageSize `of 25, to get the 51st through the 75th items, use `startIndex=3`.
	* @param string $subscriptionId Unique identifier for a subscription, such as subscribing tenants for an event or to receive a notification.
	* @return MozuClient
	*/
	public static function getDeliveryAttemptSummariesClient($subscriptionId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = EventDeliverySummaryUrl::getDeliveryAttemptSummariesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex, $subscriptionId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

