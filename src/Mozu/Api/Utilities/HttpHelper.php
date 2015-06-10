<?php
namespace Mozu\Api\Utilities;

use Mozu\Api\ApiException;
use Mozu\Api\iApiContext;
use Logger;
/**
 * HttpHelper
 *
 * This static class attempts to translate exceptions into something easier for the developer to comprehend
 *
 * <Chris Childress>
 *
 * Jul 24, 2014
 */
class HttpHelper {

    /**
     *
     * @var string $urlScheme
     */
    public static $urlScheme = "http";



    /**
     * checkError
     *
     * This method will attempt to translate error messages from Guzzle
     *
     * @param \Exception $e            
     * @param iApiContext $apiContext            
     * @throws \Mozu\Api\ApiException
     * @throws ApiException
     */
    public static function checkError(\Exception $e, iApiContext $apiContext = null) {
        $log = Logger::getLogger("HttpHelper");

        //var_dump($e);
        switch (get_class($e)) {
            case "GuzzleHttp\Exception\BadResponseException":
            case "GuzzleHttp\Exception\ClientErrorResponseException":
            case "GuzzleHttp\Exception\ServerErrorResponseException":
            case "GuzzleHttp\Exception\ServerException":
            case "GuzzleHttp\Exception\ClientException":
            case "GuzzleHttp\Exception\RequestException":
                $code = $e->getResponse()->getStatusCode();
                $response = $e->getResponse()->getBody(TRUE);
                $jsonResponse = json_decode($response);
                $message = $e->getResponse()->getReasonPhrase();
                $apiException = new ApiException($message, $code);
                $correlation = $e->getResponse()->getHeader("x-vol-correlation");
                if (!empty($correlation)) {
                    $log->info("CorrelationId : ".$correlation[0]);
                    $apiException->setCorrelationId($correlation[0]);
                }
                if (!empty($jsonResponse)) {
                    if (isset($jsonResponse->additionalErrorData)) {
                        $apiException->setAdditionalErrorData($jsonResponse->additionalErrorData);
                    }
                    if (isset($jsonResponse->errorCode)) {
                        $apiException->setErrorCode($jsonResponse->errorCode);
                    }
                    if (isset($jsonResponse->applicationName)) {
                        $apiException->setApplicationName($jsonResponse->applicationName);
                    }
                    if (isset($jsonResponse->items)) {
                        $apiException->setItems($jsonResponse->items);
                    }
                }
                throw $apiException;
                break;
            default:
                throw $e;
        }
    }

    /**
     * getUrl
     *
     * This method builds our current url based on the configured $urlScheme
     *
     * @param string $url            
     * @return string
     */
    public static function getUrl($url) {
        return static::$urlScheme . "://" . $url;
    }
}

?>