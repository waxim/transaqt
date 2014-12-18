<?php

namespace Transaqt\Exceptions\Error;

class Unknown extends \Transaqt\Exceptions\Factory {

  public function __construct(){
    parent::__construct();

    $this->type = \Transaqt\Exceptions\Factory::FATAL;
    $this->message = "There was an unknown error";
  }

}
