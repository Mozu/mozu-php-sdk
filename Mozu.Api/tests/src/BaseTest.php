<?php
 namespace Mozu\Tests;
 
use Mozu\Api\Security\Authentication;
use Mozu\Api\Security\RefreshInterval;

abstract class BaseTest extends \PHPUnit_Framework_TestCase 
{

	public static $baseUrl = "http://mozu-ci.com";

    public static function Auth() {
    	
    	$refreshInterval = new RefreshInterval();
    	$currentTime = time();
    	
    	$refreshInterval->setAccessTokenExpirationInterval($currentTime+5)
    	->setRefreshTokenExpirationInterval($currentTime+20);
    	Authentication::initialize("3e1596f42af247c19a67a243010dafc4","00be795bf1cd485e8397a243010dafc4",static::$baseUrl, $refreshInterval);
    }
 }
 
 ?>