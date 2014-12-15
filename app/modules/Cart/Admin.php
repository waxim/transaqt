<?php

Transaqt::admin::register('cart',array(

	'author' => 'Alan Cole <me@alancole.io>',
	'version' => '1.0',
	'support' => 'http://transaqt.io',

	'paths' => array(
		array('failedcarts','AdminCartController@index')
	),

	'menu' => array(
		array('label' => 'Abandoned Carts','link' => 'failedcarts')
	)

));
