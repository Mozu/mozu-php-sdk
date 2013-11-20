<?php
 namespace Mozu\Tests;
 
use Mozu\Api\Security\AppAuthenticator;
use Mozu\Api\Security\RefreshInterval;
use Mozu\Api\Contracts\AppDev\AppAuthInfo;

abstract class BaseTest extends \PHPUnit_Framework_TestCase 
{

	public static $baseUrl = "http://home.mozu-ci.volusion.com";

    public static function Auth() {
    	
    	$refreshInterval = new RefreshInterval();
    	$currentTime = time();
    	
    	$refreshInterval->setAccessTokenExpirationInterval($currentTime+5)
    	->setRefreshTokenExpirationInterval($currentTime+20);
    	$appAuthInfo = new AppAuthInfo();
    	$appAuthInfo = $appAuthInfo->setsharedSecret("00be795bf1cd485e8397a243010dafc4")->setapplicationId("3e1596f42af247c19a67a243010dafc4");
    	
    	AppAuthenticator::initialize($appAuthInfo,static::$baseUrl, $refreshInterval);
    }
 }
 
 ?>