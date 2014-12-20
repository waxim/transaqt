<?php

namespace Transaqt\Exceptions\Routes;

class NoRoute extends \Transaqt\Exceptions\Factory {

  public function __construct(){
    parent::__construct();

    $this->type = \Transaqt\Exceptions\Factory::HIDDEN;
    $this->message = "Sorry, the route you request could not be found.";

  }

}
