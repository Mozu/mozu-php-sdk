<?php
/**
 * Created by PhpStorm.
 * User: sanjay_mandadi
 * Date: 9/10/14
 * Time: 12:36 AM
 */

namespace Mozu\Api;

class MozuConfig {
    static $baseUrl = "https://home.mozu.com";

    public static function getBaseUrl() {
        return self::$baseUrl;
    }

    public static function setBaseUrl($baseUrl) {
        self::$baseUrl = $baseUrl;
    }
}
?>