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

	/*
      collect modules
    */

    /*
      enable module
    */

    /*
      disable module
    */

    /*
      install module
    */

    /*
      uninstall module
    */

}
