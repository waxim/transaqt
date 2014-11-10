<?php

namespace Transaqt;

class Core {

    protected static $attrs = array();
	
    public static function __callstatic($method, $params) {
        if(gettype(self::$attrs[$method]) == "object") {
            return call_user_func_array(self::$attrs[$method], $params);
        } else {
            throw new Exception("Method not defined.");
        }
        return;
    }
	
    public static function set($key, $value) {
        self::$attrs[$key] = $value;
        return $value;
    }
	
    public static function get($key) {
        return isset(self::$attrs[$key]) ? self::$attrs[$key] : new stdClass;
    }
	
	public static function load($name, $callback){
		static::set($name, $callback);
	}
	
	// load models
	
	// load views
	
	// load controllers
	
	// load modules

}