<?php
require_once('./app/core/MVC/Controllers.php');

class ControllerTests extends PHPUnit_Framework_TestCase {
	
	public function testVendor(){
		$this->assertTrue(class_exists('\Transaqt\Controller'));
	}
	
}	