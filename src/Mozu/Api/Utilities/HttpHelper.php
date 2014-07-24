<?php
namespace Mozu\Api\Utilities;

use Mozu\Api\Utilities\Proxy;
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
     * @return Ambigous <NULL, multitype:string multitype:string >
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
            
            // Commenting out because Mozu hasn't built logic for this yet. Now this case will default instead of calling Guzzle\Http\Exception\ServerErrorResponseException
            // case "Guzzle\Http\Exception\BadResponseException":
            
            case "Guzzle\Http\Exception\ClientErrorResponseException":
                $message = $e->getResponse()->getReasonPhrase();
                $code = $e->getResponse()->getStatusCode();
                $response = $e->getResponse(TRUE);
                $jsonResponse = json_decode($response);
                if (empty($message) || empty($code)) {
                    throw $e;
                }
                $apiException = new ApiException($message, $code);
                $header = (string)$e->getResponse()->getHeader("x-vol-correlation");
                if (!empty($header)) {
                    $apiException->setCorrelationId($header);
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
            
            case "Guzzle\Http\Exception\ServerErrorResponseException":
                // var_dump ($e);
                $code = $e->getResponse()->getStatusCode();
                $response = $e->getResponse()->getBody(TRUE);
                $jsonResponse = json_decode($response);
                $message = $e->getResponse()->getReasonPhrase();
                $apiException = new ApiException($message, $e->getResponse()->getStatusCode());
                $header = (string)$e->getResponse()->getHeader("x-vol-correlation");
                if (!empty($header)) {
                    $apiException->setCorrelationId($header);
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