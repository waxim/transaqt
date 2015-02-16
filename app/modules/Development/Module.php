<?php

  \Transaqt\Modules::register(
    [
      'slug' => 'development',
      'name' => 'Development Module',
      'version' => '1.0',
      'author' => ['name' => 'Alan Cole', 'email' => 'me@alancole.io'],

      'routes' =>
        ['development' => 'Development@holding'],

      'views' =>
        ['development'],

      'models' =>
        ['dev'],

      'assets' =>
        [
          ['file' => 'app.css', 'type' => 'css', 'minify' => 1, 'sort_order' => 1],
          ['file' => 'app.js', 'type' => 'js', 'minify' => 1, 'sort_order' => 1]
        ]
    ]
  );

?>
