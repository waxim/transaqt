<?php

Transaqt::register('simplemodule',array(

	'author' => 'Alan Cole <me@alancole.io>',
	'version' => '1.0',
	'support' => 'http://transaqt.io',
	'description' => "This module adds an event to the customer subscription trigger."

	'events' => array(
		array('newsletter.subscribe','SimpleModule@Subscribe'),
		//array('newsletter.subscribe','SimpleModule@Subscribe',TRUE), // TRUE - will tell transaqt to override all other events in the queue for this one. This will trigger an event.stopped
	)

));
