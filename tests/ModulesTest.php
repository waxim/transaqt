<?php

class ModulesTest extends PHPUnit_Framework_TestCase {

	/*
		Test class exists
	*/
	public function testVendor(){
		$this->assertTrue(class_exists('\Transaqt\Modules'));
	}

	/*
		Test we can register a model
	*/
	public function testRegister(){

		\Transaqt\Modules::register([
			'slug' => 'unittest',
			'name' => 'Unit Testing Modules',
			'version' => '1.0',
			'author' => ['name' => 'Alan Cole', 'email' => 'me@alancole.io'],

			'routes' => ['test' => 'Testing@index'],
			'views' => ['phpunit'],
			'models' => ['phpunit']
			]
		);

		$this->assertTrue(\Transaqt\Modules::exists('unittest'));
	}

	public function testDisableEnable(){

		\Transaqt\Modules::register([
			'slug' => 'unittest',
			'name' => 'Unit Testing Modules',
			'version' => '1.0',
			'author' => ['name' => 'Alan Cole', 'email' => 'me@alancole.io'],

			'routes' => ['test' => 'Testing@index'],
			'views' => ['phpunit'],
			'models' => ['phpunit']
			]
		);

		\Transaqt\Modules::disable('unittest');
		$this->assertTrue(\Transaqt\Modules::disabled('unittest'));

		\Transaqt\Modules::enable('unittest');
		$this->assertTrue(\Transaqt\Modules::enabled('unittest'));
	}

}
