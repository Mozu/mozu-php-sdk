<?php
namespace Mozu\Api;

use Mozu\Api\iApiContext;

class ApiException extends \RuntimeException {
	public $correlationId;
	public $apiContext;
	public $exceptionDetail;
	public $items;
	
	public function __construct($message,  $code) {
		return parent::__construct($message, $code);
	}
	
}

?>