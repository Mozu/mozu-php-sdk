<?php

namespace Mozu\Api;

class MozuResult {
    public $correlationId;
    public $body;
    public $etag;
    public $contentType;

    public function json() {
        return JSON_DECODE($this->body);
    }
}

?>