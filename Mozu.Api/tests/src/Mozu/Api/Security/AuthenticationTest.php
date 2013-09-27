<?php

use Mozu\Api\Security\Authentication;
use Guzzle\Http\Client;
use Mozu\Api\Headers;
require_once __DIR__ . '/../../../../../src/Mozu/Api/Security/Authentication.php';

/**
 * Test class for Authentication.
 * Generated by PHPUnit on 2013-09-24 at 15:07:22.
 */
class AuthenticationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Authentication
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = Authentication::initialize("3dfdd89123864b7bbda6a1d500dc1dbb","11d458cdaa8543ac8b1ba1d500dc1dbb","http://mozu-ci.com");
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    
    /**
     * @covers Mozu\Api\Security\Authentication::addAuthHeader
     * @todo Implement testAddAuthHeader().
     */
    public function testAddAuthHeader()
    {
    }

    /**
     * @covers Mozu\Api\Security\Authentication::getAccessToken
     * @todo Implement testGetAccessToken().
     */
    public function testGetAccessToken()
    {
       $this->assertNotNull($this->object->getAccessToken());
    }

    /**
     * @covers Mozu\Api\Security\Authentication::getAuthTicket
     * @todo Implement testGetAuthTicket().
     */
    public function testGetAuthTicket()
    {
        $this->assertNotNull($this->object->getAuthTicket());
        $this->assertNotNull($this->object->getAuthTicket()->AccessToken);
        $this->assertNotNull($this->object->getAuthTicket()->RefreshToken);
        $this->assertNotNull($this->object->getAuthTicket()->AccessTokenExpiration);
        $this->assertNotNull($this->object->getAuthTicket()->RefreshTokenExpiration);
    }
}
?>
