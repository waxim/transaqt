<?php
require_once('./app/core/Exceptions/Exception.php');
require_once('./app/core/Exceptions/Unknown.php');

class ErrorTests extends PHPUnit_Framework_TestCase {

	/*
		Test class exists
	*/
	public function testVendor(){
		$this->assertTrue(class_exists('\Transaqt\Exceptions\Factory'));
		$this->assertTrue(class_exists('\Transaqt\Exceptions\Error\Unknown'));
	}

	/*
		Test we can trigger and catch errors
	*/
	public function testError(){
		try {
			new \Transaqt\Exceptions\Error\Unknown;
		} catch(\Transaqt\Exceptions\Error\Unknown $e){
			$this->assetSame($e->getType(),\Transaqt\Exceptions\Factory::FATAL);
		}
	}

}
