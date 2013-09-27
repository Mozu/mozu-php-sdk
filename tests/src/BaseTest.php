<?php
 namespace Mozu\Tests;
 
use Mozu\Api\Security\Authentication;
use Mozu\Api\Security\RefreshInterval;

abstract class BaseTest extends \PHPUnit_Framework_TestCase 
{

	public static $baseUrl = "http://home.mozu.com";

    public static function Auth() {
    	
    	$refreshInterval = new RefreshInterval();
    	$currentTime = time();
    	
    	$refreshInterval->setAccessTokenExpirationInterval($currentTime+5)
    	->setRefreshTokenExpirationInterval($currentTime+20);
    	Authentication::initialize("<AppID>","<Shared Secret>",static::$baseUrl, $refreshInterval);
    }
 }
 
 ?>