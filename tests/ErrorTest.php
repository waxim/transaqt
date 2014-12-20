<?php
require_once('./app/core/Exceptions/Exception.php');
require_once('./app/core/Exceptions/Unknown.php');

class ErrorTests extends \PHPUnit_Framework_TestCase {

	/*
		Test class exists
	*/
	public function testVendor(){
		$this->assertTrue(class_exists('\Transaqt\Exceptions\Factory'));
		$this->assertTrue(class_exists('\Transaqt\Exceptions\Error\Unknown'));
	}

	/*
		Test error type constatnts
	*/
	public function testTypes(){
		$this->assertSame('hidden',\Transaqt\Exceptions\Factory::HIDDEN);
		$this->assertSame('notice',\Transaqt\Exceptions\Factory::NOTICE);
		$this->assertSame('danger',\Transaqt\Exceptions\Factory::DANGER);
		$this->assertSame('warning',\Transaqt\Exceptions\Factory::WARNING);
		$this->assertSame('fatal',\Transaqt\Exceptions\Factory::FATAL);
	}

	/*
		Test we can trigger and catch errors
	*/
	public function testError(){
		try {
			throw new \Transaqt\Exceptions\Error\Unknown;
		} catch(\Transaqt\Exceptions\Error\Unknown $e){
			$this->assertSame($e->getType(),\Transaqt\Exceptions\Factory::FATAL);
		}
	}

}
