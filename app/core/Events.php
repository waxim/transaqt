<?php

namespace Transaqt;

class Event {

  public $events = [];

  public function register($name, $event){
    $this->events[$name] = $event;
  }

  public function trigger($name){
    return $this->events[$name]();
  }

}
