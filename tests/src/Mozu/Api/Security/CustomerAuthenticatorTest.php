<?php

use Mozu\Tests\BaseTest;
use Mozu\Api\Security\CustomerAuthenticator;
use Mozu\Api\Security\CustomerAuthenticationProfile;
use Mozu\Api\Contracts\Customer\CustomerUserAuthInfo;

require_once __DIR__ . '/../../../BaseTest.php';

class CustomerAuthenticatorTest extends BaseTest
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
		$userAuthInfo = new CustomerUserAuthInfo();
		$userAuthInfo->username = $this->customerUserName;
		$userAuthInfo->password = $this->customerPassword;
		 
		$authenticationProfile = CustomerAuthenticator::authenticate($userAuthInfo,$this->tenantId, $this->siteId);
		var_dump($authenticationProfile);
		$this->assertNotNull($authenticationProfile->authTicket);
	}
}

?>