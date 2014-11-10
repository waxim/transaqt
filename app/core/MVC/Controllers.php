<?php

namespace Transaqt;

class Controller {

	static $engine;
	static $routes;
	
	static public function init(){
		static::$engine = new \Slim\Slim();
		
		static::$engine->map('(/)(:controller)(/)(:method)(/)(:arguments+)', function ($controller = 'noroute', $method = 'index', $args = array()) {
			\Transaqt\Controller::handle($controller, $method, $args);
		})->via('GET','POST','PUT','PATCH','DELETE');
		
	}
	
	static function dispatch(){
		static::$engine->run();
	}
	
	static function request(){
		$request = new \StdClass;
		$request->method = static::method();
		$request->body = static::body();
		$request->headers = static::headers();
		$request->params = static::params();
		
		return $request;
	}
	
	static function method(){
		return strtolower(static::$engine->request->getMethod());
	}
	
	static function body(){
		return static::$engine->request->getBody();
	}
	
	static function headers(){
		return static::$engine->request->headers;
	}
	
	static function params(){
		return static::$engine->request->params();
	}
	
	static function handle($controller, $action, $args){
		echo "hello $controller@$action";
		//print_r($args);
		//echo static::method();
		
	}

}

