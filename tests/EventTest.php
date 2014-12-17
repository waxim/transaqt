<?php
require_once('./app/core/Events.php');

class EventTests extends PHPUnit_Framework_TestCase {

	/*
		Test class exists
	*/
	public function testVendor(){
		$this->assertTrue(class_exists('\Transaqt\Event'));
	}

	/*
		Test we can make and trigger events
	*/
	public function testTrigger(){
		$sample = new \Transaqt\Event();
		$sample->register('test.event',function(){ return true; });
		$this->assertTrue($sample->trigger('test.event'));
	}

}
