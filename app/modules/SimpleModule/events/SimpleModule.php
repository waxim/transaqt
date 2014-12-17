<?php

class SimpleModuleEvents extends \Transaqt\Event\Action {

  static public class subscribe($object){
    // Simple web hook
    Transaqt::curl::post("http://api.example.com/subscription",array('name' => $object->data->name, 'email_address' => $object->data->email));
  }

}
