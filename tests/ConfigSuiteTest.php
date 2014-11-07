<?php
require_once('./app/core/Config.php');

class ConfigSuiteTest extends PHPUnit_Framework_TestCase {
	
	var $config_path = '../app/';
	
	
	public function testVendor(){
		$this->assertTrue(class_exists('\Transaqt\Config'));
	}
	
	public function testFile(){
		$test = \Transaqt\Config::file('app/','config.json');
		$this->assertTrue($test);
	}
	
	public function testSetGet(){
		\Transaqt\Config::set('phpunit',true);
		$this->assertTrue(\Transaqt\Config::get('phpunit'));
	}
	
	public function testFlatGet(){
		$test = \Transaqt\Config::file('app/','config.json');
		$this->assertEquals(\Transaqt\Config::get('app.unit'),'test');
	}
	
}