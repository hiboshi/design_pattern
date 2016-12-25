<?php
class Singleton {
	function __construct()
	{
		echo "test";
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