<?php 

namespace Mozu\Api\Security;

use Mozu\Api\Contracts\AppDev\AuthTicket;

class AuthTicket extends AuthTicket {
	private $userScope;
	
	public function getUserScope() {
		return $this -> userScope;
	}
	
	public function setUserScope(UserScope $userScope) {
		$this->userScope = $userScope;
	}
	
}

?>