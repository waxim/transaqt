<?php

  require_once('./app/core/Exceptions/Exception.php');
  require_once('./app/core/Exceptions/Unknown.php');
  require_once('./app/core/Exceptions/Routes/NoRoute.php');

  try {

    throw new \Transaqt\Exceptions\Routes\NoRoute();

  } catch(\Transaqt\Exceptions\Unknown $e) {
    $e->handle();
  } catch(\Transaqt\Exceptions\Routes\NoRoute $e){
    $e->handle();
  }
