<?php

Transaqt::register('cart',array(

	'author' => 'Alan Cole <me@alancole.io>',
	'version' => '1.0',
	'support' => 'http://transaqt.io',
	
	'paths' => array(
		array('cart','CartController@index'),
		array('cart/add','CartController@add'),
		array('cart/update','CartController@update'),
		array('cart/remove','CartController@remove')
	),
	
	'menu' => array(
		array('label' => 'My Cart','link' => 'cart')
	),
	
	'views' => array(
		array('view' => 'mini.cart', 'attach' => 'header')
	),
	
	'assets' => array(
		array('type' => 'js','file' => 'minicart.js')
	)
	
));