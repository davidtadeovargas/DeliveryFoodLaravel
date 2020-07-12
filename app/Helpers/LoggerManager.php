<?php

namespace App\Helpers;

class LoggerManager {
	
	// Hold the class instance.
  	private static $instance = null;
  	


  	// The constructor is private
  	// to prevent initiation with outer code.
	private function __construct(){
	}

	// The object is created from within the class itself
	// only if the class has no instance.
	public static function getInstance()
	{
	    if (self::$instance == null)
	    {
	      self::$instance = new LoggerManager();
	    }
	 
	    return self::$instance;
	 }

	 public function log($text){
	 	$fp = fopen(public_path().'/log.txt', 'a');//opens file in append mode  
		fwrite($fp, date("Y-m-d h:i:sa").": ".$text.PHP_EOL);
		fclose($fp);
	 }
}
