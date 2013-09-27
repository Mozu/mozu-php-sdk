<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Settings\SiteShippingSettingsClient;
use Mozu\Api\Resources\BaseResource;
use Mozu\Api\ApiContext;

/**
* Use the shipping subresource to manage settings for the site shipping information, such as origin address information, carrier shipping methods, shipping rate providers, and regions available for shipping.
*/
class SiteShippingSettingsResource extends BaseResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of the shipping settings configured for a site.
	*
	* @return SiteShippingSettings 
	*/
	public function getSiteShippingSettings()
	{
		$mozuClient = SiteShippingSettingsClient::getSiteShippingSettingsClient();
		$mozuClient = parent::SetContext($this->apiContext, $mozuClient,TRUE);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

