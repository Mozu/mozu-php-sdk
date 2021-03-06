<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\Accounts\TransactionUrl;


/**
* Use the Customer Account Transactions resource to manage the transactions associated with a customer account.
*/
class TransactionClient {

	/**
	* Retrieves a list of transactions associated with the customer account specified in the request.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @return MozuClient
	*/
	public static function getTransactionsClient($accountId)
	{
		$url = TransactionUrl::getTransactionsUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new transaction for the customer account specified in the request.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Transaction $transaction Properties of a transaction performed by a customer account. The system creates a transaction each time the customer submits an order, returns an item, picks up items for an order, or manages items on a wish list.
	* @return MozuClient
	*/
	public static function addTransactionClient($transaction, $accountId, $responseFields =  null)
	{
		$url = TransactionUrl::addTransactionUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($transaction);
		return $mozuClient;

	}
	
	/**
	* Deletes a transaction from the customer account specified in the request.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $transactionId Unique identifier of the transaction to delete.
	*/
	public static function removeTransactionClient($accountId, $transactionId)
	{
		$url = TransactionUrl::removeTransactionUrl($accountId, $transactionId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

