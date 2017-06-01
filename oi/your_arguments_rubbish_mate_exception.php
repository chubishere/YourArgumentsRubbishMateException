<?php

/**
 * hi
 */
namespace oi

class YourArgumentsRubbishMateException extends \Exception {
	// hello
	// you
	// there
	public function __construct($massage = null, $code = 0, Exception $previous = null){
		$this->message = 'Sort it out';
		$this->code = 85;
	}
}
