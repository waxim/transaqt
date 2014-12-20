<?php

namespace Transaqt;

class Controller {

	static $engine;
	static $routes = [];

	static public function init(){
		static::$engine = new \Slim\Slim();

		static::$engine->map('(/)(:controller)(/)(:method)(/)(:arguments+)', function ($controller = 'default', $method = 'index', $args = array()) {
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

	static function route($controller, $action){
		if($action !== "index"){
			if(isset(self::$routes[$controller.'/'.$action])){
				return self::parse(self::$routes[$controller."/".$action]['map']);
			} else {
				return false;
			}
		} else {
			if(isset(self::$routes[$controller])){
				return self::parse(self::$routes[$controller]['map']);
			} else {
				return false;
			}
		}
	}

	static function format($controller, $action){

		$out = new \StdClass;
		$out->controller = ucfirst($controller);
		$out->method = $method;

		return $out;
	}

	static function addRoute($route, $map){
		$data = array('map' => $map);
		self::$routes[$route] = $data;
	}

	static function handle($controller, $action, $args){

		// Test if we have controller
			// TODO
		if($controller == 'default'){
		// If no send to default
			$controller = self::parse(\Transaqt\Config::get('app.routes.default'));
		} else {
			$controller = self::route($controller, $action);
			if(!$controller){
				//echo "hello ".$controller->class;
				$controller = self::parse(\Transaqt\Config::get('app.routes.noroute'));
			}
		}

		call_user_func(array('\\'. __NAMESPACE__ .'\\' . $controller->class, $controller->method));
		//echo "hello $controller@$action";

	}

}
