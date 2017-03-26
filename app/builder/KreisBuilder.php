<?php


namespace App\builder;
use App\builder\AbstractBuilder;
use App\builder\objectClasses\Kreis;


class KreisBuilder extends AbstractBuilder {
    private $kreis;
	
    function __construct(){
		$this->kreis = new Kreis();
    }

    function setRadius($radius) {
        $this->kreis->setRadius($radius);
    }
    function getRadius() {
        $this->kreis->getRadius();
    }
    function setDurchmesser($radius) {
        $this->kreis->setDurchmesser($radius);
    }
    function getDurchmesser() {
        $this->kreis->getDurchmesser();
    }
    function setUmfang($radius) {
        $this->kreis->setUmfang($radius);
    }
    function getUmfang() {
        $this->kreis->getUmfang();
    }
    function setFlacheninhalt() {
        $this->kreis->setFlacheninhalt();
    }
    function getFlacheninhalt() {
        $this->kreis->getFlacheninhalt();
    }

    function getObject() {
        return $this->kreis;
    }

}

