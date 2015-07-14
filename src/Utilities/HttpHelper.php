<?php
namespace Mozu\Api\Utilities;

use Mozu\Api\ApiException;
use Mozu\Api\iApiContext;

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
                $apiException = null;

                if (!empty($jsonResponse)) {
                    if (isset($jsonResponse->message))
                        $apiException = new ApiException($jsonResponse->message, $code);
                    else
                        $apiException = new ApiException($e->getResponse()->getReasonPhrase().", inspect Mozu\Api\ApiException->items property for more details", $code);
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
                } else {
                    $apiException = new ApiException($e->getResponse()->getReasonPhrase(), $code);
                }
                $correlation = $e->getResponse()->getHeader("x-vol-correlation");
                if (!empty($correlation)) {
                    $apiException->setCorrelationId($correlation[0]);
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