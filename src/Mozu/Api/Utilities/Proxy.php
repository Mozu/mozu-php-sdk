<?php

namespace Mozu\Api\Utilities;

class Proxy {
	private $proxy_host;
	private $proxy_port;
	private static $instance = null;
	
	private function __construct($proxy_host, $proxy_port) {
		$this->proxy_host = $proxy_host;
		$this->proxy_port = $proxy_port;
	}
	
	public static function initialize($proxy_host, $proxy_port) {
		if (!isset($instance)) {
			static::$instance = new Proxy($proxy_host, $proxy_port);
		}
		
		return static::$instance;
	}
	
	public function getHost() {
		return static::$instance->proxy_host;
	} 
	
	public function getPort() {
		return static::$instance->proxy_port;
	}
	
	public static function getInstance() {
		return static::$instance;
	}
}

?>