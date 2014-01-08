<?php
namespace Mozu\Api\Utilities;

use Mozu\Api\Utilities\Proxy;
use Mozu\Api\ApiException;
use Mozu\Api\iApiContext;

class HttpHelper {

	public static $urlScheme = "http";
	
	public static function getGuzzleConfig() {
		$proxy = Proxy::getInstance();
		$config = null;
		if (isset($proxy))
			$config = array('version' => 'v1.1','curl.options' => array(CURLOPT_PROXY => $proxy->getHost() . ":" . $proxy->getPort()));
		
		return $config;
	}
	
	public static function checkError(\Exception $e, iApiContext $apiContext = null) {
		switch(get_class($e)) {
			case "Guzzle\Http\Exception\BadResponseException":
			case "Guzzle\Http\Exception\ClientErrorResponseException":
				$resp = $e->getResponse()->getBody ( true );
				$jsonResponse = json_decode ( $resp );
				$message = (get_class($jsonResponse) == "stdClass" ? $jsonResponse->exceptionDetail->message : $resp);
				$apiException = new ApiException($message, $e->getResponse()->getStatusCode());
				$apiException->correlationId =  $e->getResponse()->getHeader("x-vol-correlation")->toArray()[0];
				$apiException->apiContext = $apiContext;
				$apiException->exceptionDetail = $jsonResponse->exceptionDetail;
				$apiException->items = $jsonResponse->items;
				var_dump($apiException);
				throw $apiException;
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