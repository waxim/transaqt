<?php

namespace Transaqt;

class Modules {

    /*
      Our container for all things module.

      Notes:
      This basic idea is that modules will
      build to a giant object of module
      information and include all its files
      at which point the module should be
      called using its namespace

        \ModuleNamespace\Controller::function();
        \ModuleNamespace\Model::function();
        \ModuleNamespace\View::function();

      The module system will take of adding controllers
      models, views, assets, events, installs, uninstalls
      and all modules will have access to the Transaqt::Core()


    */
    protected static $modules = array();

    /*
      collect modules
    */

  	public static function collect(){
    	return [];
  	}
  
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