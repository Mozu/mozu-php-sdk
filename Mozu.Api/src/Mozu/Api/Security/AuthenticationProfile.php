<?php 
namespace Mozu\Api\Security;

use Mozu\Api\Security\Scope;
use Mozu\Api\Contracts\Core\UserProfile;
use Mozu\Api\Security\AuthTicket;

class AuthenticationProfile {
	private $authTicket;
	private $authorizedScopes;
	private $activeScope;
	private $user;
	
	public function getAuthTicket() {
		return $this->authTicket;
	}
	
	public function setAuthTicket(AuthTicket $authTicket) {
		$this->authTicket = authTicket;
	}
	
	public function getAuthorizedScopes() {
		return $this->authorizedScopes;
	}
	
	public function setAuthorizedScopes(Array $authorizedScopes) {
		$this->authorizedScopes = authorizedScopes;
	}
	
	public function getActiveScope() {
		return $this->activeScope;
	}
	
	public function setActiveScope(Scope $scope) {
		$this->activeScope = $scope;
	}
	
	public function getUser() {
		return $this->user;
	}
	
	public function setUser(UserProfile $userProfile) {
		$this->user = $userProfile;
	}
}

?>