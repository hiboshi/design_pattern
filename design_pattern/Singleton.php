<?php

/**
 * Class Singleton
 */

class Singleton {
	private function __construct()
	{
	}

	private static $_instance;

	public static function init(){
		if ( !isset(self::$_instance) ) {
			return self::$_instance = new self();
		} else {
			return self::$_instance;
		}
	}
}

Singleton::init();
