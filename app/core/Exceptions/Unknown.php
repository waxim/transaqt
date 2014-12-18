<?php

namespace Transaqt\Exceptions;

class Unknown extends \Transaqt\Exceptions\Factory {

  public function __construct(){
    parent::__construct();
    
    $this->type = \Transaqt\Exceptions\Factory::WARNING;
    $this->message = "There was an unknown error";
  }

}
