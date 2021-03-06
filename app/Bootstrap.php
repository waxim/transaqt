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
  require_once(CORE . '/' . 'MVC/Controllers.php');
  require_once(CORE . '/' . 'MVC/Views.php');
  require_once(CORE . '/' . 'Modules.php');

/*
  ToDo: Make a module loader, for now manually include
*/
  //require_once(MODULEPATH .'/System/controllers/SystemController.php');
  \Transaqt\Views::collect();
  \Transaqt\Modules::loadFiles();

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
  //\Transaqt\Core::init();


/*
  Module Auto-Loader
*/
  //\Transaqt\Modules::collect();

/*
  Begin transaqt
*/

  \Transaqt\Controller::init();

  \Transaqt\Controller::dispatch();
