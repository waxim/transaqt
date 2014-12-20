<?php
require_once('./app/core/MVC/Views.php');

class ViewsTests extends PHPUnit_Framework_TestCase {

	/*
		Test class exists
	*/
	public function testVendor(){
		$this->assertTrue(class_exists('\Transaqt\Views'));
	}

	/*
		Test we have a default template
	*/
	public function testFile(){
		$this->assertFileExists('./app/templates/default.php');
	}

}
