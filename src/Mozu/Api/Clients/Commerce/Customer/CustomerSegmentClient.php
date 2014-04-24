<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\CustomerSegmentUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class CustomerSegmentClient {

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getSegmentsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null)
	{
		$url = CustomerSegmentUrl::getSegmentsUrl($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $id 
	* @return MozuClient
	*/
	public static function getSegmentClient($id)
	{
		$url = CustomerSegmentUrl::getSegmentUrl($id);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param CustomerSegment $segment 
	* @return MozuClient
	*/
	public static function addSegmentClient($segment)
	{
		$url = CustomerSegmentUrl::addSegmentUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($segment);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountIds 
	* @param int $id 
	*/
	public static function addSegmentAccountsClient($accountIds, $id)
	{
		$url = CustomerSegmentUrl::addSegmentAccountsUrl($accountIds, $id);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $id 
	* @param CustomerSegment $segment 
	* @return MozuClient
	*/
	public static function updateSegmentClient($segment, $id)
	{
		$url = CustomerSegmentUrl::updateSegmentUrl($id);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($segment);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $id 
	*/
	public static function deleteSegmentClient($id)
	{
		$url = CustomerSegmentUrl::deleteSegmentUrl($id);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountIds 
	* @param int $id 
	*/
	public static function deleteSegmentAccountsClient($accountIds, $id)
	{
		$url = CustomerSegmentUrl::deleteSegmentAccountsUrl($accountIds, $id);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
