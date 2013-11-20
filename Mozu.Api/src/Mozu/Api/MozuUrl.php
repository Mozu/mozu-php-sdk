<?php

namespace Mozu\Api;

use Mozu\Api\UrlLocation;

class MozuUrl {
	private $url;
	private $location;
	private $verb ;
	
	function __construct($url, $location, $verb) {
		
		$this->url = $url;
		$this->location = $location;
		$this->verb = $verb;
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
	
	public static function formatUrl($url, $paramName, $value ) {
		$url = str_replace("{". $paramName ."}", $value, $url);

		$url = str_replace("{*". $paramName ."}", ($value == null ? "" : $value), $url);

		$removeString = "&" . $paramName . "=";
		if ($value == null and strpos($url,$removeString) != false) {
			$url = str_replace($removeString, "", $url);
		}
						
		$removeString = "" . $paramName . "=";
		if ($value == null and strpos($url,$removeString) != false) {
			$url = str_replace($removeString, "", $url);
		}
				
		$removeString = "/?";
		if ( static::endsWith($url, $removeString)) {
			$url = str_replace($removeString, "", $url);
		}
				
		if ( static::endsWith($url, $removeString . "&")) {
			$url = str_replace($removeString . "&", "", $url);
		}
				
		if ( static::endsWith($url, "&")) {
			$url = str_replace("&", "", $url);
		}
				
		if (strpos($url, "/?&") != false) {
			$url = str_replace("/?&", "/?", $url);
		}
				
		return $url;
	}
			
	private static function endswith($string, $test) {
		$strlen = strlen($string);
		$testlen = strlen($test);
		if ($testlen > $strlen) return false;
			return substr_compare($string, $test, -$testlen) === 0;
	}

}	
	

?>