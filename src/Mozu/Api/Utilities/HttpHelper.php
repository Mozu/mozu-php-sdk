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
     * getGuzzleConfig
     *
     * Used to return our current Guzzle configuration
     *
     */
    public static function getGuzzleConfig() {
        $proxy = Proxy::getInstance();
        $config = null;
        if (isset($proxy)) $config = array(
            'version' => 'v1.1',
            'curl.options' => array(
                CURLOPT_PROXY => $proxy->getHost() . ":" . $proxy->getPort()
            )
        );
        
        return $config;
    }

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
            case "Guzzle\Http\Exception\BadResponseException":
            case "Guzzle\Http\Exception\ClientErrorResponseException":
            case "Guzzle\Http\Exception\ServerErrorResponseException":
                // var_dump ($e);
                $code = $e->getResponse()->getStatusCode();
                $response = $e->getResponse()->getBody(TRUE);

                $jsonResponse = json_decode($response);
                if (!empty($jsonResponse))
                    $message = $jsonResponse->message;
                else
                    $message = $e->getResponse()->getReasonPhrase();

                $apiException = new ApiException($message, $code);
                $header = (string)$e->getResponse()->getHeader("x-vol-correlation");
                if (!empty($header)) {
                    $apiException->setCorrelationId($header);
                }
                if (!empty($jsonResponse)) {
                    if (isset($jsonResponse->message)) {
                        $message = $jsonResponse->message;
                    }
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