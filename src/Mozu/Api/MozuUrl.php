<?php

namespace Mozu\Api;


class MozuUrl {
	private $url;
	private $location;
	private $verb;
	private $useSSL;
	
	function __construct($url, $location, $verb, $useSSL) {
		
		$this->url = strtolower($url);
		$this->location = $location;
		$this->verb = $verb;
		$this->useSSL = $useSSL;
	}
	
	public function getUrl() {
		return $this->url;
	}
	
	public function getLocation() {
		return $this->location;
	}
	
	public function getVerb() {
		return $this->verb;
	}
	
	public function isSSLRequired() {
		return $this->useSSL;
	}
	
	public function formatUrl($paramName, $value ) {
		$paramName = strtolower($paramName);
		
		//echo $this->url . "\n";
		$this->url = str_replace("{". $paramName ."}",  ($value == null ? "" : $value), $this->url);
		//echo $this->url . "\n";
		$this->url = str_replace("{*". $paramName ."}", ($value == null ? "" : $value), $this->url);
		//echo $this->url . "\n";
		
		$removeString = "&" . $paramName . "=";
		
		if ($value == null and static::endswith($this->url,$removeString) != false) {
			$this->url = str_replace($removeString, "", $this->url);
		}
		//echo $this->url . "\n";
		$removeString =  $paramName . "=&";
		if ($value == null and strpos($this->url,$removeString) != false) {
			$this->url = str_replace($removeString, "", $this->url);
		}
		//echo $this->url . "\n";
		
		$removeString = "?" . $paramName . "=";
		if ($value == null and static::endsWith($this->url,$removeString)) {
			$this->url = str_replace($removeString, "", $this->url);
		}
		//echo $this->url . "\n";
		$removeString = "/?";
		if ( static::endsWith($this->url, $removeString)) {
			$this->url = str_replace($removeString, "", $this->url);
		}
		//echo $this->url . "\n";
		if ( static::endsWith($this->url, $removeString . "&")) {
			$this->url = str_replace($removeString . "&", "", $this->url);
		}
		//echo $this->url . "\n";
		if ( static::endsWith($this->url, "&")) {
			$this->url = str_replace("&", "", $this->url);
		}
		//echo $this->url . "\n";
		if (strpos($this->url, "/?&") != false) {
			$this->url = str_replace("/?&", "/?", $this->url);
		}
		//echo $this->url . "\n";
		return $this;
	}
			
	private static function endswith($string, $test) {
		$strlen = strlen($string);
		$testlen = strlen($test);
		if ($testlen > $strlen) return false;
			return substr_compare($string, $test, -$testlen) === 0;
	}

}	
	

?>