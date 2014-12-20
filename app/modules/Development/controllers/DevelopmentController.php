<?php

namespace Transaqt;

class DevelopmentController extends \Transaqt\Controller {

	public static function holding(){
		echo \Transaqt\Views::render('Development::holding');
	}


}
