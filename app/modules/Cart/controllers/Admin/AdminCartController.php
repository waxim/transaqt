<?php

class AdminCartController extends Transaqt_Controller {

	var $is_admin = 1;

	public static class index(){
		Transaqt::view::make('failedcarts');
	}

}
