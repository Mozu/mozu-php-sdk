<?php
 namespace Mozu\Tests;

use Logger;
use Mozu\Api\MozuConfig;
use Mozu\Api\Security\AppAuthenticator;
use Mozu\Api\Contracts\AppDev\AppAuthInfo;

require_once __DIR__ .'/../../src/Mozu/Api/Security/AppAuthenticator.php';


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
    private $log;
	public function __construct() {
        Logger::configure('../../../loggerconfig.xml');
        $this->log = Logger::getLogger('BaseTest');
		$this->loadSettings();
		$this->auth();
	}


    public function auth() {


    	$appAuthInfo = new AppAuthInfo();
    	$appAuthInfo->sharedSecret = $this->sharedSecret;
    	$appAuthInfo->applicationId = $this->applicationId;
    	
    	try {
            MozuConfig::$baseAppAuthUrl = $this->baseUrl;
            $this->log->info("Base Auth Url : ".MozuConfig::$baseAppAuthUrl);
            $this->log->info('Authenticating...');
            AppAuthenticator::initialize($appAuthInfo);
            $this->log->info('Authentication done...');
            $appAuthenticator = AppAuthenticator::getInstance();
            $this->log->info("Access Token : " .$appAuthenticator->getAccessToken());
    	} catch(\Exception $e) {
           	$this->log->error("Exception : code - " . $e->getCode() . ", message - " . $e->getMessage(). ", correlationid - " . $e->getCorrelationId() );
    		throw $e;
    	}
    }
    
    public function printError($e) {
        //var_dump($e);
        $this->log->error("Exception : code - " . $e->getCode() . ", message - " . $e->getMessage(). ", correlationid - " . $e->getCorrelationId() );
    }

    public function loadSettings() {

        $this->log->info('loading config file');
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

        $this->log->info("AppId: ".$this->applicationId);
        $this->log->info("TenantId: ".$this->tenantId);

    }
   
 }
 
 ?>