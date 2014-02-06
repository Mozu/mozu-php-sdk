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
			case "Guzzle\Http\Exception\ServerErrorResponseException":
				//var_dump ($e);
				$resp = $e->getResponse()->getBody ( true );
				$jsonResponse = json_decode ( $resp );
				$message = (get_class($jsonResponse) == "stdClass" ? $jsonResponse->exceptionDetail->message : $e->getResponse()->getReasonPhrase());
				$apiException = new ApiException($message, $e->getResponse()->getStatusCode());
				$header = (string)$e->getResponse()->getHeader("x-vol-correlation");
				
				if ($header != null) {
					$apiException->setCorrelationId($header);
				}
				$apiException->setApiContext($apiContext);
				if ($jsonResponse != null) {
					$apiException->setExceptionDetail($jsonResponse->exceptionDetail);
					$apiException->setItems($jsonResponse->items);
				}
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