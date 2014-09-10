<?php
 namespace Mozu\Tests;
 
use Mozu\Api\MozuConfig;
use Mozu\Api\Security\AppAuthenticator;
use Mozu\Api\Security\RefreshInterval;
use Mozu\Api\Contracts\AppDev\AppAuthInfo;
use Mozu\Api\Utilities\Proxy;

require_once __DIR__ . '/../../src/Mozu/Api/Security/AppAuthenticator.php';


abstract class BaseTest extends \PHPUnit_Framework_TestCase
{

	public $applicationId;
	public $sharedSecret;
	public $baseUrl;
	public $environment;
	public $tenantId;
	public $emailAddress;
	public $password;
	public $customerUserName;
	public $customerPassword;
	public $siteId;
	
	public function __construct() {
		$this->loadSettings();
		$this->auth();
	}

    public function auth() {
    	
    	//$refreshInterval = new RefreshInterval();
    	//$currentTime = time();
    	
    	//$refreshInterval->setAccessTokenExpirationInterval($currentTime+5)
    	//->setRefreshTokenExpirationInterval($currentTime+20);
    	$appAuthInfo = new AppAuthInfo();
    	$appAuthInfo->sharedSecret = $this->sharedSecret;
    	$appAuthInfo->applicationId = $this->applicationId;

    	try{
	    	AppAuthenticator::initialize($appAuthInfo, null);
    	} catch(\Exception $e) {
    		echo("Exception : code - " . $e->getCode() . " message - " . $e->getMessage() . "\n" );
    		throw $e;
    	}
    }
    
    
    public function loadSettings() {
    	$settings = parse_ini_file("settings.ini", true);
    	
    	$this->environment = $settings["config"]["environment"];
    	$this->applicationId = $settings[$this->environment]["applicationId"];
    	$this->sharedSecret = $settings[$this->environment]["sharedSecret"];
    	$this->baseUrl = $settings[$this->environment]["baseUrl"];
    	$this->emailAddress = $settings[$this->environment]["emailAddress"];
    	$this->password = $settings[$this->environment]["password"];
    	$this->customerUserName = $settings[$this->environment]["customerUserName"];
    	$this->customerPassword = $settings[$this->environment]["customerPassword"];
    	
    	$this->tenantId = intval($settings[$this->environment]["tenantId"]);
    	$this->siteId = intval($settings[$this->environment]["siteId"]);
    	
    	$proxy_host = $settings["config"]["proxy_host"];
    	$proxy_port = $settings["config"]["proxy_port"];

        MozuConfig::setBaseUrl($this->baseUrl);
    	
    	if ($proxy_host && $proxy_port) {
    		Proxy::initialize($proxy_host, $proxy_port);
			}
    }
   
 }
 
 ?>