<?php

/**
 * @param string $str The string being translated.
 * @param array $replace_pairs The replace_pairs parameter may be used as a substitute for to and from in which case it's an array in the form array('from' => 'to', ...).
 * @return string A copy of str, translating all occurrences of each character in from to the corresponding character in to.
 */
function strtr ($str, array $replace_pairs) {};

/**
 * (PHP 5.1)<br/>
 * Halts the execution of the compiler. This can be useful to embed data in PHP scripts, like the installation files.
 * Byte position of the data start can be determined by the __COMPILER_HALT_OFFSET__ constant
 * which is defined only if there is a __halt_compiler() presented in the file.
 * <p> Note: __halt_compiler() can only be used from the outermost scope.
 * @link http://php.net/manual/en/function.halt-compiler.php
 * @return void
 */
function __halt_compiler(){}

/**
 * (PHP 5.1)<br/>
 * Byte position of the data start, defined only if there is a __halt_compiler() presented in the file.
 * @link http://php.net/manual/en/function.halt-compiler.php
 * @return void
 */
define("__COMPILER_HALT_OFFSET__",0);


/**
 * PHP >= 5.4.0<br/>
 * Convert hex to binary
 * @link http://php.net/manual/en/function.hex2bin.php
 * @param string $data
 * @return string Returns the binary representation of the given data.
 * @see bin2hex(), unpack()
 */
function hex2bin($data) {};

/**
 * special function to finish request and flush all data while continuing to do something time-consuming (video converting, stats processing etc.);
 * @link http://php.net/manual/en/install.fpm.php
 */
function fastcgi_finish_request() {};

/**
 * (PHP 5 >= 5.4.0)
 * Objects implementing JsonSerializable can customize their JSON representation when encoded with json_encode().
 * @link http://docs.php.net/manual/en/class.jsonserializable.php
 */
interface JsonSerializable {
    /**
     * (PHP 5 >= 5.4.0)
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link http://docs.php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed Returns data which can be serialized by json_encode(), which is a value of any type other than a resource.
     */
    function jsonSerialize();
}

/**
 * Get or Set the HTTP response code
 * @param int $response_code [optional] The optional response_code will set the response code.
 * @return int The current response code. By default the return value is int(200).
 */
function http_response_code($response_code) {}