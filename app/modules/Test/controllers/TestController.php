<?php

namespace Transaqt;

class TestController extends \Transaqt\Controller {

	public static function testing(){
		echo \Transaqt\Views::render('Test::test');
	}


}
