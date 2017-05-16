<?php

namespace oi

class YourArgumentsRubbishMateException extends \Exception {
	public function __construct($message = null, $code = 0, Exception $previous = null){
		$this->message = 'Sort it out';
		$this->code = 415;
	}
}
