<?php
 namespace Mozu\Tests;
 
use Mozu\Api\Security\AppAuthenticator;
use Mozu\Api\Security\RefreshInterval;
use Mozu\Api\Contracts\AppDev\AppAuthInfo;
require_once __DIR__ . '/../../src/Mozu/Api/Security/AppAuthenticator.php';

abstract class BaseTest extends \PHPUnit_Framework_TestCase 
{

	public static $baseUrl = "https://home.mozu.com";

    public static function Auth() {
    	
    	$refreshInterval = new RefreshInterval();
    	$currentTime = time();
    	
    	$refreshInterval->setAccessTokenExpirationInterval($currentTime+5)
    	->setRefreshTokenExpirationInterval($currentTime+20);
    	$appAuthInfo = new AppAuthInfo();
    	$appAuthInfo->sharedSecret = "[shared secret]";
    	$appAuthInfo->applicationId = "[App id]";
    	
    	AppAuthenticator::initialize($appAuthInfo,static::$baseUrl, $refreshInterval);
    }
    
   
 }
 
 ?>