<?php
namespace Mozu\Api\Utilities;

use Mozu\Api\Utilities\Proxy;

class HttpHelper {

	public static $urlScheme = "http";
	
	public static function getGuzzleConfig() {
		$proxy = Proxy::getInstance();
		$config = null;
		if (isset($proxy))
			$config = array('version' => 'v1.1','curl.options' => array(CURLOPT_PROXY => $proxy->getHost() . ":" . $proxy->getPort()));
		
		return $config;
	}
	
	public static function checkError(\Exception $e) {
		echo (get_class($e));
		switch(get_class($e)) {
			case "Guzzle\Http\Exception\BadResponseException":
			case "Guzzle\Http\Exception\ClientErrorResponseException":
				$jsonResp = $e->getResponse()->getBody ( true );
				throw new \Exception(json_decode ( $jsonResp )->exceptionDetail->message, $e->getResponse()->getStatusCode());
				break;
			default:
				throw $e;
		}
	}
	
	public static function getUrl($url) {
		return static::$urlScheme."://".$url;
	}
}

?>