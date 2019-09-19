<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform;

use Mozu\Api\Clients\Platform\ReferenceDataClient;
use Mozu\Api\ApiContext;


/**
* The Reference resource retrieves collections of standards the Mozu system currently supports. This includes content locales, top-level domains, units of measure, countries, currencies, time zones, and shipping or billing address schemas.
*/
class ReferenceDataResource {

				



	/**
	* 
	*
	* @param string $countryCode The 2-letter country code used to retrieve a specified address schema.
	* @param string $responseFields 
	* @return AddressSchema 
	* @deprecated deprecated since version 1.17
	*/
	public function getAddressSchema($countryCode =  null, $responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getAddressSchemaClient($countryCode, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $countryCode The 2-letter country code used to retrieve a specified address schema.
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAddressSchemaAsync($countryCode =  null, $responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getAddressSchemaClient($countryCode, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return AddressSchemaCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getAddressSchemas($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getAddressSchemasClient($responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getAddressSchemasAsync($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getAddressSchemasClient($responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param int $behaviorId Unique identifier of the behavior.
	* @param string $responseFields 
	* @return Behavior 
	* @deprecated deprecated since version 1.17
	*/
	public function getBehavior($behaviorId, $responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getBehaviorClient($behaviorId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param int $behaviorId Unique identifier of the behavior.
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getBehaviorAsync($behaviorId, $responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getBehaviorClient($behaviorId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param int $categoryId Unique identifier of the behavior category.
	* @param string $responseFields 
	* @return BehaviorCategory 
	* @deprecated deprecated since version 1.17
	*/
	public function getBehaviorCategory($categoryId, $responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getBehaviorCategoryClient($categoryId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param int $categoryId Unique identifier of the behavior category.
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getBehaviorCategoryAsync($categoryId, $responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getBehaviorCategoryClient($categoryId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return BehaviorCategoryCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getBehaviorCategories($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getBehaviorCategoriesClient($responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getBehaviorCategoriesAsync($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getBehaviorCategoriesClient($responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param string $userType The user type associated with the behaviors to retrieve.
	* @return BehaviorCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getBehaviors($userType =  null, $responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getBehaviorsClient($userType, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @param string $userType The user type associated with the behaviors to retrieve.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getBehaviorsAsync($userType =  null, $responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getBehaviorsClient($userType, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return ContentLocaleCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getContentLocales($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getContentLocalesClient($responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getContentLocalesAsync($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getContentLocalesClient($responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return CountryCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCountries($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getCountriesClient($responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCountriesAsync($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getCountriesClient($responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return CountryWithStatesCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCountriesWithStates($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getCountriesWithStatesClient($responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCountriesWithStatesAsync($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getCountriesWithStatesClient($responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return CurrencyCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCurrencies($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getCurrenciesClient($responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getCurrenciesAsync($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getCurrenciesClient($responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return TimeZoneCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getTimeZones($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getTimeZonesClient($responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getTimeZonesAsync($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getTimeZonesClient($responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return TopLevelDomainCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getTopLevelDomains($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getTopLevelDomainsClient($responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getTopLevelDomainsAsync($responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getTopLevelDomainsClient($responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param string $responseFields 
	* @return UnitOfMeasureCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getUnitsOfMeasure($filter =  null, $responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getUnitsOfMeasureClient($filter, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* 
	*
	* @param string $filter 
	* @param string $responseFields 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Mozu\Api\MozuResult. errorFn is passed Mozu\Api\ApiException
	*/
	public function getUnitsOfMeasureAsync($filter =  null, $responseFields =  null)
	{
		$mozuClient = ReferenceDataClient::getUnitsOfMeasureClient($filter, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

