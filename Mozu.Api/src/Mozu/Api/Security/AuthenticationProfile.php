<?php 
namespace Mozu\Api\Security;

use Mozu\Api\Security\Scope;
use Mozu\Api\Contracts\Core\UserProfile;
use Mozu\Api\Security\UserAuthTicket;

class AuthenticationProfile {
	public $authTicket;
	public $authorizedScopes;
	public $activeScope;
	public $user;
}

?>