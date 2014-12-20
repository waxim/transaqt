<?php
namespace Transaqt;

class Views {

  static $engine;

  static public function collect(){
    self::$engine = new \League\Plates\Engine();

    self::$engine->addFolder('Templates', APPPATH . "/templates/");
    return true;
  }

  static public function addViews($name, $path){
    $name = ucfirst($name);
    self::$engine->addFolder($name, $path);

    return true;
  }

  static public function render($name, $data = array()){
    return self::$engine->render($name, $data);
  }

}
