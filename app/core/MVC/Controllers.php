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

	static function parse($string){
		$parts = explode("@",$string);
		if(isset($parts[0]) && isset($parts[1])){

			$controller = new \StdClass;
			$controller->class = $parts[0]."Controller";
			$controller->method = $parts[1];

			return $controller;

		} else { return false; }
	}

	static function handle($controller, $action, $args){

		// Test if we have controller
			// TODO

		// If no send to default
		$controller = self::parse(\Transaqt\Config::get('app.routes.default'));
		//echo "hello ".$controller->class;
		call_user_func(array('\\'. __NAMESPACE__ .'\\' . $controller->class, $controller->method));
		//echo "hello $controller@$action";

	}

}
