<?php
require_once('./app/core/Config.php');

class ConfigSuiteTest extends PHPUnit_Framework_TestCase {

	var $config_path = '../app/';

	/*
		Test class exists
	*/
	public function testVendor(){
		$this->assertTrue(class_exists('\Transaqt\Config'));
	}

	/*
		Test we have a config file
	*/
	public function testFile(){
		$test = \Transaqt\Config::file('app/','config.json');
		$this->assertTrue($test);
	}

	/*
		Test we can set and get
	*/
	public function testSetGet(){
		\Transaqt\Config::set('phpunit',true);
		$this->assertTrue(\Transaqt\Config::get('phpunit'));
	}

	/*
		Test we can set and get from a file
	*/
	public function testFlatGet(){
		$test = \Transaqt\Config::file('app/','config.json');
		$this->assertEquals(\Transaqt\Config::get('app.unit'),'test');
	}

}
