<?php
namespace Mozu\Tests\Security;

use Mozu\Api\Contracts\Core\UserAuthInfo;
use Mozu\Api\Security\AuthenticationScope;
use Mozu\Api\Security\UserAuthenticator;
use Mozu\Tests\BaseTest;

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
        try {
            $userAuthInfo = new UserAuthInfo();
            $userAuthInfo->emailAddress = $this->emailAddress;
            $userAuthInfo->password = $this->password;

            $authenticationProfile = UserAuthenticator::authenticate($userAuthInfo, AuthenticationScope::TENANT, $this->tenantId);
            var_dump($authenticationProfile);
            $this->assertNotNull($authenticationProfile->authTicket);
            $this->assertNotNull($authenticationProfile->authorizedScopes);
            $this->assertSame($this->tenantId, $authenticationProfile->activeScope->id);

            $newId = $authenticationProfile->authorizedScopes[1]->id;
            $authenticationProfile = UserAuthenticator::refreshUserAuthTicket($authenticationProfile->authTicket, $newId);
            $this->assertSame($newId, $authenticationProfile->activeScope->id);
        } catch (Exception $e) {
            parent::printError($e);
            $this->fail($e->getMessage());
        }
    }

    public function testDeveloperLogin() {
        try {
            $userAuthInfo = new UserAuthInfo();
            $userAuthInfo->emailAddress = $this->emailAddress;
            $userAuthInfo->password = $this->password;

            $authenticationProfile = UserAuthenticator::authenticate($userAuthInfo, AuthenticationScope::DEVELOEPR);
            $this->assertNotNull($authenticationProfile->authTicket);
            $this->assertNotNull($authenticationProfile->authorizedScopes);

            UserAuthenticator::logout($authenticationProfile->authTicket);

        } catch(Exception $e) {
            parent::printError($e);
            $this->fail($e->getMessage());
        }
    }

}

?>