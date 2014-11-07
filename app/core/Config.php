<?php

namespace Transaqt;

class Config {
	
	static $configs = [];
	
	public static function set($name, $value){
		static::$configs[$name] = $value;
	}
	
	public static function get($key){
		return isset(static::$configs[$key]) ? static::$configs[$key] : null;
	}
	
	public static function file($dir, $file){
		$tmp = \Herrera\Wise\Wise::create($dir);
		static::$configs = array_merge(static::$configs, $tmp->loadFlat($file));
		return true;
	}
	
}