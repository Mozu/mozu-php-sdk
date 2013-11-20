<?php
namespace Mozu\Api\Security;

class RefreshInterval {
	private $accessTokenExpirationInterval;
	private $refreshTokenExpirationInterval;
	
	private $accessTokenExpiration;
	private $refreshTokenExpiration;
	
	public function getAccessTokenExpirationInterval() {
		return $this->accessTokenExpirationInterval;
	}
	public function setAccessTokenExpirationInterval($accessTokenExpirationInterval) {
		$this->accessTokenExpirationInterval = $accessTokenExpirationInterval;
		return $this;
	}
	
	public function getRefreshTokenExpirationInterval() {
		return $this->refreshTokenExpirationInterval;
	}
	public function setRefreshTokenExpirationInterval($refreshTokenExpirationInterval) {
		$this->refreshTokenExpirationInterval = $refreshTokenExpirationInterval;
		return $this;
	}
	
	public function getAccessTokenExpiration() {
		return $this->accessTokenExpiration;
	}
	public function setAccessTokenExpiration($accessTokenExpiration) {
		$this->accessTokenExpiration = $accessTokenExpiration;
		return $this;
	}
	
	public function getRefreshTokenExpiration() {
		return $this->refreshTokenExpiration;
	}
	public function setRefreshTokenExpiration($refreshTokenExpiration) {
		$this->refreshTokenExpiration = $refreshTokenExpiration;
		return $this;
	}
}

?>