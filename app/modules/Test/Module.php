<?php

  \Transaqt\Modules::register(
    [
      'slug' => 'test',
      'name' => 'Test Module',
      'version' => '1.0',
      'author' => ['name' => 'Alan Cole', 'email' => 'me@alancole.io'],

      'routes' =>
        ['test' => 'Test@testing'],

      'views' =>
        ['test'],
    ]
  );

?>
