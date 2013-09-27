<?php

	namespace Mozu\Api\Urls {
		
		class BaseUrl {
			static function formatUrl($url, $paramName, $value ) {
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
			
			static function endswith($string, $test) {
			    $strlen = strlen($string);
			    $testlen = strlen($test);
			    if ($testlen > $strlen) return false;
			    return substr_compare($string, $test, -$testlen) === 0;
			}
				
		}
		
	}

?>