<?php

Transaqt::register('cart',array(

	'author' => 'Alan Cole <me@alancole.io>',
	'version' => '1.0',
	'support' => 'http://transaqt.io',

	'paths' => array(
		array('cart','CartController@index'),
		array('cart/add','CartController@add'),
		array('cart/update','CartController@update'),
		array('cart/remove','CartController@remove'),
		array('cart/save','CartController@save', array('middle' => 'NOT_GUEST'))
		array('cart/saved','CartController@saved', array('middle' => 'NOT_GUEST'))
	),

	'menu' => array(
		array('label' => 'My Cart','link' => 'cart'),
		array('label' => 'Saved Carts','link' => 'cart/saved', 'middle' => 'NOT_GUEST')
	),

	'views' => array(
		array('view' => 'mini.cart', 'attach' => 'header'),
		array('view' => 'addto.cart', 'attach' => 'product.actions')
	),

	'assets' => array(
		array('type' => 'js','file' => 'minicart.js')
	),

	'events' => array(
		array('cart.added','CartEvents@added'),
		array('cart.removed','CartEvents@removed'),
		array('cart.updated','CartEvents@updated'),
		array('cart.failed','CartEvents@failed'),
		array('cart.finished','CartEvents@finished'),
		array('cart.unfinished','CartEvents@unfinished'),
		array('cart.saved','CartEvents@saved'),
	)

));
