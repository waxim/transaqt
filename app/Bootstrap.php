<?php

/*
  Set some constants 
*/

  define('APPPATH',__DIR__);
  define('MODULEPATH', APPPATH . '/modules');
  define('VARPATH', APPPATH . '/var');
  define('CORE', APPPATH . '/core');

  define('ENV','production');

/*
  Include transaqt
*/
  require_once(CORE . '/' . 'Transaqt.php');
  require_once(CORE . '/' . 'Config.php');

  /*
  Set an error handler
*/
  $whoops = new \Whoops\Run;
  $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
  $whoops->register();

/*
  Config
*/
  \Transaqt\Config::file(APPPATH,'config.json');
  
/*
  Core Auto-Loader
*/
  \Transaqt\Core::init();

  
/*
  Module Auto-Loader
*/
  \Transaqt\Modules::collect();

/*
  Begin transaqt
*/

  \Transaqt\Controller::dispatch();