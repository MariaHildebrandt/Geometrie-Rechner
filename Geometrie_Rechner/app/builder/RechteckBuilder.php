<?php

include('AbstractBuilder.php');
include('BuildDirector.php');
include('Director.php');


class RechteckBuilder extends AbstractBuilder {
	private $objekt = NULL;
	
    function __construct(){
		$this->objekt = new Rechteck();
    }
	
	function setRechteckUmfang($b,$l) {
      $this->obj->setRechteckUmfang($b,$l);
    }
    function getRechteckUmfang() {
      $this->obj->getRechteckUmfang();
    }
    function setRechteckFlacheninhalt($b,$l){
      $this->obj->setRechteckFlacheninhalt($b,$l);
    }
    function getRechteckFlacheninhalt() {
      $this->obj->getRechteckFlacheninhalt();
    }
	 function getObject() {
      return $this->obj;
    }

}
