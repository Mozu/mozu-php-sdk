<?php 

namespace Mozu\Api\Security;

use Mozu\Api\Contracts\AppDev\AuthTicket;

class UserAuthTicket extends AuthTicket {
	public $authenticationScope;
	public $siteId;
	public $tenantId;
	 
}

?>