<?php

namespace Transaqt;

class SystemController extends \Transaqt\Controller {

	public static function welcome(){
		/*
			ToDo: Make some view code using plates
		*/
		$html = file_get_contents(MODULEPATH."/System/views/welcome.php");
		echo $html;
	}


}
