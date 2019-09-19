<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\SearchUrl;


/**
* 
*/
class SearchClient {

	/**
	* 
	*
	* @param string $responseFields 
	* @param string $searchTuningRuleCode 
	* @return MozuClient
	*/
	public static function getSearchTuningRuleClient($searchTuningRuleCode, $responseFields =  null)
	{
		$url = SearchUrl::getSearchTuningRuleUrl($responseFields, $searchTuningRuleCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getSearchTuningRulesClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = SearchUrl::getSearchTuningRulesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getSearchTuningRuleSortFieldsClient($responseFields =  null)
	{
		$url = SearchUrl::getSearchTuningRuleSortFieldsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getSettingsClient($responseFields =  null)
	{
		$url = SearchUrl::getSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $localeCode 
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getSynonymDefinitionCollectionClient($localeCode, $responseFields =  null)
	{
		$url = SearchUrl::getSynonymDefinitionCollectionUrl($localeCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getSynonymDefinitionsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = SearchUrl::getSynonymDefinitionsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param int $synonymId 
	* @return MozuClient
	*/
	public static function getSynonymDefinitionClient($synonymId, $responseFields =  null)
	{
		$url = SearchUrl::getSynonymDefinitionUrl($responseFields, $synonymId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param SearchTuningRule $searchTuningRuleIn 
	* @return MozuClient
	*/
	public static function addSearchTuningRuleClient($searchTuningRuleIn, $responseFields =  null)
	{
		$url = SearchUrl::addSearchTuningRuleUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($searchTuningRuleIn);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param SearchTuningRuleSortFields $searchTuningRuleSortFieldsIn 
	* @return MozuClient
	*/
	public static function updateSearchTuningRuleSortFieldsClient($searchTuningRuleSortFieldsIn, $responseFields =  null)
	{
		$url = SearchUrl::updateSearchTuningRuleSortFieldsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($searchTuningRuleSortFieldsIn);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $localeCode 
	* @param string $responseFields 
	* @param SynonymDefinitionCollection $collection 
	* @return MozuClient
	*/
	public static function updateSynonymDefinitionCollectionClient($collection, $localeCode, $responseFields =  null)
	{
		$url = SearchUrl::updateSynonymDefinitionCollectionUrl($localeCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($collection);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param SynonymDefinition $synonymDefinition 
	* @return MozuClient
	*/
	public static function addSynonymDefinitionClient($synonymDefinition, $responseFields =  null)
	{
		$url = SearchUrl::addSynonymDefinitionUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($synonymDefinition);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param string $searchTuningRuleCode 
	* @param SearchTuningRule $searchTuningRuleIn 
	* @return MozuClient
	*/
	public static function updateSearchTuningRuleClient($searchTuningRuleIn, $searchTuningRuleCode, $responseFields =  null)
	{
		$url = SearchUrl::updateSearchTuningRuleUrl($responseFields, $searchTuningRuleCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($searchTuningRuleIn);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param SearchSettings $settings 
	* @return MozuClient
	*/
	public static function updateSettingsClient($settings, $responseFields =  null)
	{
		$url = SearchUrl::updateSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($settings);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $responseFields 
	* @param int $synonymId 
	* @param SynonymDefinition $synonymDefinition 
	* @return MozuClient
	*/
	public static function updateSynonymDefinitionClient($synonymDefinition, $synonymId, $responseFields =  null)
	{
		$url = SearchUrl::updateSynonymDefinitionUrl($responseFields, $synonymId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($synonymDefinition);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $searchTuningRuleCode 
	* @return MozuClient
	*/
	public static function deleteSearchTuningRuleClient($searchTuningRuleCode)
	{
		$url = SearchUrl::deleteSearchTuningRuleUrl($searchTuningRuleCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $synonymId 
	* @return MozuClient
	*/
	public static function deleteSynonymDefinitionClient($synonymId)
	{
		$url = SearchUrl::deleteSynonymDefinitionUrl($synonymId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

