<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class OrderUrl  {

	/**
		* Get Resource Url for GetOrders
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. You can filter an order's search results by any of its properties, including status, contact information, or total. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=Status+eq+Submitted"
		* @param bool $includeBin 
		* @param string $mode 
		* @param int $pageSize Used to page results from a query. Indicates the maximum number of entities to return from a query. Default value: 20. Max value: 200.
		* @param string $q A list of order search terms to use in the query when searching across order number and the name or email of the billing contact. Separate multiple search terms with a space character.
		* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
		* @param string $responseFields 
		* @param string $sortBy The element to sort the results by and the order in which the results appear. Either ascending order (a-z) which accepts 'asc' or 'asc' or descending order (z-a) which accepts 'desc' or 'desc'. The sortBy parameter follows an available property. For examp
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getOrdersUrl($filter, $includeBin, $mode, $pageSize, $q, $qLimit, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/orders/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&q={q}&qLimit={qLimit}&includeBin={includeBin}&mode={mode}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("includeBin", $includeBin);
		$url = $mozuUrl->formatUrl("mode", $mode);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("q", $q);
		$url = $mozuUrl->formatUrl("qLimit", $qLimit);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAvailableActions
		* @param string $orderId Unique identifier of the available order actions to get.
		* @return string Resource Url
	*/
	public static function getAvailableActionsUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/actions";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetTaxableOrders
		* @param string $orderId Unique identifier of the order to retrieve.
		* @return string Resource Url
	*/
	public static function getTaxableOrdersUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/taxableorders";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetOrder
		* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
		* @param bool $includeBin 
		* @param string $mode 
		* @param string $orderId Unique identifier of the order details to get.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function getOrderUrl($draft, $includeBin, $mode, $orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}?draft={draft}&includeBin={includeBin}&mode={mode}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("draft", $draft);
		$url = $mozuUrl->formatUrl("includeBin", $includeBin);
		$url = $mozuUrl->formatUrl("mode", $mode);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateOrderFromCart
		* @param string $cartId Unique identifier of the cart. This is the original cart ID expressed as a GUID.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function createOrderFromCartUrl($cartId, $responseFields)
	{
		$url = "/api/commerce/orders/?cartId={cartId}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("cartId", $cartId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateOrder
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function createOrderUrl($responseFields)
	{
		$url = "/api/commerce/orders/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for PerformOrderAction
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function performOrderActionUrl($orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/actions?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for PriceOrder
		* @param bool $refreshShipping 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function priceOrderUrl($refreshShipping, $responseFields)
	{
		$url = "/api/commerce/orders/price?refreshShipping={refreshShipping}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("refreshShipping", $refreshShipping);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ProcessDigitalWallet
		* @param string $digitalWalletType 
		* @param string $orderId 
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function processDigitalWalletUrl($digitalWalletType, $orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/digitalWallet/{digitalWalletType}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("digitalWalletType", $digitalWalletType);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateOrderDiscount
		* @param int $discountId Unique identifier of the discount. System-supplied and read only.
		* @param string $orderId Unique identifier of the order discount. System-supplied and read only.
		* @param string $responseFields 
		* @param string $updateMode Specifies whether to modify the discount by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function updateOrderDiscountUrl($discountId, $orderId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/discounts/{discountId}?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("discountId", $discountId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteOrderDraft
		* @param string $orderId Unique identifier of the order associated with the draft to delete.
		* @param string $version If applicable, the version of the order draft to delete.
		* @return string Resource Url
	*/
	public static function deleteOrderDraftUrl($orderId, $version)
	{
		$url = "/api/commerce/orders/{orderId}/draft?version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ResendOrderConfirmationEmail
		* @param string $orderId 
		* @return string Resource Url
	*/
	public static function resendOrderConfirmationEmailUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/email/resend";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ChangeOrderPriceList
		* @param string $orderId 
		* @param string $responseFields 
		* @param string $updateMode 
		* @param string $version 
		* @return string Resource Url
	*/
	public static function changeOrderPriceListUrl($orderId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/priceList?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ChangeOrderUserId
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields 
		* @return string Resource Url
	*/
	public static function changeOrderUserIdUrl($orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/users?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateOrder
		* @param string $orderId Unique identifier of the order to update.
		* @param string $responseFields 
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version 
		* @return string Resource Url
	*/
	public static function updateOrderUrl($orderId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
}

?>
