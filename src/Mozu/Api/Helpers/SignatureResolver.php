<?php
namespace Mozu\Api\Helpers;

class SignatureResolver {
  /*
   * Returns an array of types from any argument list
   * @args array of arguments
   * @return array<string>
   */
  public static function resolve(array $args) {
    $resolved = array();

    foreach ($args as $arg) {
      $resolved[] = gettype($arg);
    }
    return $resolved;
  }
}
?>