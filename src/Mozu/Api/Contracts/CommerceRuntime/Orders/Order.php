<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Orders;



/**
*	Properties of an order, including its components.
*/
class Order
{
	/**
	*The date and time the order was accepted by the tenant.
	*/
	public $acceptedDate;

	/**
	*If true, the customer account associated with the order is opted in to receive marketing materials.
	*/
	public $acceptsMarketing;

	/**
	*The amount of the order the shopper can receive in the event of a return. This amount represents the amount captured at the time the order was submitted, not when the order was returned.
	*/
	public $amountAvailableForRefund;

	/**
	*The total amount of the order not currently associated with a payment. The shopper must create one or more payments to satisfy this amount before the order can be fully paid.
	*/
	public $amountRemainingForPayment;

	/**
	*The available order, payment, and shipment actions a user can perform for the order.
	*/
	public $availableActions;

	/**
	*Date when the order was cancelled. System-supplied and read-only.
	*/
	public $cancelledDate;

	/**
	*Code that identifies the channel associated with the site where the order was submitted.
	*/
	public $channelCode;

	/**
	*Date when the order was closed. Closed order is an order that has been processed and the items shipped. System-supplied and read-only.
	*/
	public $closedDate;

	/**
	*Array list of coupon codes associated with an order submitted using an external system. Mozu populates this list during the order import process.
	*/
	public $couponCodes;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*Numeric identifer of the customer account.
	*/
	public $customerAccountId;

	/**
	*The type of interaction the shopper used to submit the order. Possible values are Website, Call, Store, or Unknown.
	*/
	public $customerInteractionType;

	/**
	*The tax identification number (TIN) of the customer who submitted the order. If the customer who submitted the order has a customer account defined for the tenant, the system sets this value when the order is submitted.
	*/
	public $customerTaxId;

	/**
	*The aggregate total for all line items in the order, including costs associated with shopper-defined options or extras and any applied discounts.
	*/
	public $discountedSubtotal;

	/**
	*The subtotal of the order including any applied discount calculations.
	*/
	public $discountedTotal;

	/**
	*Estimated amount of discounts applied to all items in the order, which is system-supplied and read-only.
	*/
	public $discountTotal;

	/**
	*The email address of the specified user or the email address associated with the specified entity.
	*/
	public $email;

	/**
	*The date when the order will no longer be active or considered abandoned. For example, if a guest or anonymous shopper has 14 days of inactivity, the order is considered abandoned after that period of inactivity. An order never expires for shoppers who are logged into their account. Date in UTC Date/Time. System-supplied and read-only.
	*/
	public $expirationDate;

	/**
	*Unique identifier used by an external program to identify a Mozu order.
	*/
	public $externalId;

	/**
	*The monetary sum of all fees incurred in the order.
	*/
	public $feeTotal;

	/**
	*The current fulfillment status of the order, which is "Fulfilled," "NotFulfilled," or "PartiallyFulfilled." The order is considered fulfilled when all packages are shipped or all pickups are picked up.
	*/
	public $fulfillmentStatus;

	/**
	*The combined price for all items in the order, including all selected options but excluding any discounts.
	*/
	public $handlingAmount;

		public $handlingSubTotal;

	/**
	*If the handling fee for the order is subject to sales tax, the total tax amount.
	*/
	public $handlingTaxTotal;

	/**
	*This total represents the handling amount value with any applied discounts.
	*/
	public $handlingTotal;

	/**
	*If true, the order has a draft that may include one or more uncommitted changes to the order or its components.
	*/
	public $hasDraft;

	/**
	*Unique identifier of the order.
	*/
	public $id;

	/**
	*If the order was imported from an external program, the date and time the order was imported into Mozu.
	*/
	public $importDate;

	/**
	*The IP address from which the order originated.
	*/
	public $ipAddress;

	/**
	*If true, this version of the order is a draft that might contain uncommitted changes.
	*/
	public $isDraft;

	/**
	*If true, the shopper can return any of the items in this order to the tenant.
	*/
	public $isEligibleForReturns;

	/**
	*If true, this order was submitted using an external system, and the order record was imported into Mozu.
	*/
	public $isImport;

	/**
	*If true, the order is exempt from applied sales tax.
	*/
	public $isTaxExempt;

	/**
	*The total amount of tax applied to items in the order.
	*/
	public $itemTaxTotal;

	/**
	*The date when the order was last validated against the product catalog. Date in UTC Date/Time. System-supplied and read-only.
	*/
	public $lastValidationDate;

	/**
	*The unique code that identifies the location where the order was submitted.
	*/
	public $locationCode;

	/**
	*The order number that displays on the storefront which differs from the order ID.
	*/
	public $orderNumber;

	/**
	*Identifier of the cart prior to the customer proceeding to checkout.
	*/
	public $originalCartId;

		public $parentOrderId;

	/**
	*If this order was created to fulfill an item replacement as part of a return merchandise authorization (RMA), the unique identifier of the return.
	*/
	public $parentReturnId;

	/**
	*Status of the payment for the specified order.
	*/
	public $paymentStatus;

	/**
	*Status of any returns associated with this order after it was completed.
	*/
	public $returnStatus;

	/**
	*The shipping subtotal amount calculated without any applied discounts.
	*/
	public $shippingSubTotal;

	/**
	*The total amount of sales tax incurred for shipping charges on the order.
	*/
	public $shippingTaxTotal;

	/**
	*Amount of the shipping fees for the order.
	*/
	public $shippingTotal;

	/**
	*Unique identifier of the site.
	*/
	public $siteId;

	/**
	*The device from which the order originated in the case of offline orders.
	*/
	public $sourceDevice;

	/**
	*The current status of this order. Possible values are "Pending", "Submitted", "Processing", "Pending Review", "Closed", or "Cancelled". System-supplied and read-only.
	*/
	public $status;

	/**
	*The date and time the order was submitted. System-supplied and read-only.
	*/
	public $submittedDate;

	/**
	*Amount of the order without sales tax, shipping costs, and other fees.
	*/
	public $subtotal;

	/**
	*The total monetary sum of sales tax for the order.
	*/
	public $taxTotal;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*Amount of the order, including items, sales tax, shipping costs, and other fees.
	*/
	public $total;

	/**
	*The total amount collected to date for the order.
	*/
	public $totalCollected;

	/**
	*This specifies the order type. This means, was this order placed online or offline? Online means shopper created the order at checkout, offline means the order was a phone order.
	*/
	public $type;

	/**
	*The current version number of the order.
	*/
	public $version;

	/**
	*Unique identifier of the customer visit in which the order was created or last updated.
	*/
	public $visitId;

	/**
	*Unique identifier of the web session in which the order was created or last updated.
	*/
	public $webSessionId;

	/**
	*Properties of an ad-hoc price adjustment for an order.
	*/
	public $adjustment;

	/**
	*Paged list collection of order attributes.
	*/
	public $attributes;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Container for the customer billing information associated with an order.
	*/
	public $billingInfo;

	/**
	*Paged list of notes entered when the order was modified.
	*/
	public $changeMessages;

	/**
	*Specifies the fulfillment of digital packages associated with this order.
	*/
	public $digitalPackages;

	/**
	*Properties of the item fulfillment information associated with the order. Shoppers can fulfill order items using in-store pickup or direct shipping.
	*/
	public $fulfillmentInfo;

		public $handlingDiscounts;

	/**
	*List of invalid coupon codes the shopper entered for the order.
	*/
	public $invalidCoupons;

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;

	/**
	*Paged list collection of order notes.
	*/
	public $notes;

	/**
	*List of order-level discounts that apply to the order.
	*/
	public $orderDiscounts;

	/**
	*Array list of physical packages shipped for the specified order.
	*/
	public $packages;

	/**
	*Wrapper for a collection of payments associated with this order. An order can include any number of payments.
	*/
	public $payments;

	/**
	*Array list of the in-store pickups defined for the order.
	*/
	public $pickups;

	/**
	*Array list of the shipments defined to fulfill items in this order using the direct ship fulfillment method.
	*/
	public $shipments;

	/**
	*Properties of an ad-hoc price adjustment made for an order.
	*/
	public $shippingAdjustment;

	/**
	*List of shipping discounts to apply to the order.
	*/
	public $shippingDiscounts;

	/**
	*A paged list collection of shopper notes for the order.
	*/
	public $shopperNotes;

	/**
	*Response returned by an order validation capability application.
	*/
	public $validationResults;

}

?>
