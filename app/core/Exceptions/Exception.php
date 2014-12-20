<?php

namespace Transaqt\Exceptions;

class Factory extends \Exception {

  /*
    Set our error levels
  */
  const HIDDEN = 'hidden';
  const NOTICE = 'notice';
  const WARNING = 'warning';
  const DANGER = 'danger';
  const FATAL = 'fatal';

  /*
    Error type holder
  */
  var $type;

  /*
    Get Type
  */
  public function getType(){
    return $this->type;
  }

  /*
    Handle the error
  */
  public function handle(){
    switch($this->type){
      case "fatal":
        die($this->message);
      case "hidden":
        // be silent
      case "notice":
        // log the error to our debug as a notice
      case "danger":
        // Top the running of our script with a danger message
      case "warning":
        // Attempt to warn our users
      default:
        // log that we got here as we shouldn't have.
    }
  }

}
