<?php

namespace Transaqt;

class Modules {

  protected static $modules = array();

	/*
		Files and folders for modules
	*/
	protected static $path = MODULEPATH;
	protected static $folders = ['controllers','models','controllers/Admin'];

	/*
		Function to include all files needed
	*/
	static public function loadFiles(){

		foreach(glob(self::$path.'/*') as $module){
			if(is_dir($module) && file_exists($module . '/Module.php')){
				foreach(self::$folders as $folder){
					foreach (glob($module . '/' . $folder ."/*.php") as $filename){
						include $filename;
					}
				}

        // Include its config file
        include $module . '/Module.php';

			}
		}



	}

  public static function register(array $module){
    // lets get an register controllers
    if(isset($module['routes'])){
      foreach($module['routes'] as $route){
        \Transaqt\Controller::addRoute($route[0],$route[1]);
      }
    }

    // register views
    if(isset($module['views'])){
      foreach($module['views'] as $view){
        \Transaqt\Views::addViews(ucwords($view), MODULEPATH . '/' . ucwords($view) . '/views/');
      }
    }

    if(!isset($module['enabled'])){ $module['enabled'] = true; }

    // Save our module
    self::$modules[$module['slug']] = $module;

  }

	/*
      collect modules
    */

  	public static function collect(){
    	return [];
  	}

    /*
      enable module
    */
    public static function enable($slug){
      if(self::exists($slug) && !self::enabled($slug)){
        self::$modules[$slug]['enabled'] = true;
      }
    }

    /*
      disable module
    */
    public static function disable($slug){
      if(self::exists($slug) && self::enabled($slug)){
        self::$modules[$slug]['enabled'] = false;
      }
    }

    /*
      test a module exists
    */
    public static function exists($slug){
      if(isset(self::$modules[$slug])){ return true; }
      else { return false; }
    }

    /*
      test a module is enabled
    */
    public static function enabled($slug){
      if(!isset(self::$modules[$slug])){ return false; }

      if(self::$modules[$slug]['enabled'] == true){
        return true;
      } else {
        return false;
      }
    }

}
