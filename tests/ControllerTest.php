<?php
require_once('./app/core/MVC/Controllers.php');

class ControllerTests extends PHPUnit_Framework_TestCase {

	/*
		Test class exists
	*/
	public function testVendor(){
		$this->assertTrue(class_exists('\Transaqt\Controller'));
	}

	/*
		Test a GET request
	*/

	/*
		Test a POST request
	*/



}
