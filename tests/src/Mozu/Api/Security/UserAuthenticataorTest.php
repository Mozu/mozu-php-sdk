<?php
use Mozu\Api\Security\AppAuthenticator;
use Guzzle\Http\Client;
use Mozu\Api\Headers;
use Mozu\Api\Contracts\AppDev\AppAuthInfo;
use Mozu\Tests\BaseTest;
use Mozu\Api\Security\UserAuthenticator;
use Mozu\Api\Contracts\Core\UserAuthInfo;
use Mozu\Api\Security\AuthenticationScope;
use Mozu\Api\Security\AuthenticationProfile;
require_once __DIR__ . '/../../../../../src/Mozu/Api/Security/AppAuthenticator.php';
require_once __DIR__ . '/../../../BaseTest.php';

class UserAuthenticatorTest  extends BaseTest
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
    public function testTenantAdminLogin()
    {
    	$userAuthInfo = new UserAuthInfo();
    	$userAuthInfo->emailAddress = $this->emailAddress;
    	$userAuthInfo->password = $this->password;
    	
    	$authenticationProfile = UserAuthenticator::authenticate($userAuthInfo, AuthenticationScope::TENANT,$this->tenantId);
    	var_dump($authenticationProfile);
    	$this->assertNotNull($authenticationProfile->authTicket);
    	$this->assertNotNull($authenticationProfile->authorizedScopes);
    	$this->assertSame($this->tenantId, $authenticationProfile->activeScope->id);
    	
    	$newId = $authenticationProfile->authorizedScopes[1]->id;
    	$authenticationProfile = UserAuthenticator::refreshUserAuthTicket($authenticationProfile->authTicket,$newId);
    	$this->assertSame($newId, $authenticationProfile->activeScope->id);
    	
    }

    public function testDeveloperLogin() {
    	$userAuthInfo = new UserAuthInfo();
    	$userAuthInfo->emailAddress = $this->emailAddress;
    	$userAuthInfo->password = $this->password;
    	 
    	$authenticationProfile = UserAuthenticator::authenticate($userAuthInfo, AuthenticationScope::DEVELOEPR);
    	var_dump($authenticationProfile);
    	$this->assertNotNull($authenticationProfile->authTicket);
    	$this->assertNotNull($authenticationProfile->authorizedScopes);
    	 
    }

}

?>