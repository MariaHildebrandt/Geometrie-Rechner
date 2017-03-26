<?php

include('AbstractBuilder.php');
include('BuildDirector.php');
include('Director.php');


class QuaderBuilder extends AbstractBuilder {
    private $obj = NULL;
    function __construct() {
    $this->objekt = new Quader();
	}

//Für Quader
    function setQuaderVolumen($b,$h,$l) {
      $this->obj->setQuaderVolumen($b,$h,$l);
    }

    function getQuaderVolumen() {
      $this->obj->getQuaderVolumen();
    }
    function setQuaderOberflache($b,$h,$l) {
      $this->obj->setQuaderOberflache($b,$h,$l);
    }

    function getQuaderOberflache() {
      $this->obj->getQuaderOberflache();
    }



    function getObject() {
      return $this->obj;
    }

}

