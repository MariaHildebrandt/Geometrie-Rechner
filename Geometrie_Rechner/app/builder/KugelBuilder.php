<?php

namespace App\builder;
use App\builder\AbstractBuilder;
use App\builder\objectClasses\Kugel;


class KugelBuilder extends AbstractBuilder {
    
    private $kugel;
    
    function __construct() {
        $this->kugel = new Kugel();
    }
    
    function setRadius($radius) {
        $this->kugel->setRadius($radius);
    }
    function getRadius() {
        $this->kugel->getRadius();
    }
    function setDurchmesser($radius) {
        $this->kugel->setDurchmesser($radius);
    }
    function getDurchmesser() {
        $this->kugel->getDurchmesser();
    }
    function setUmfang($radius) {
        $this->kugel->setUmfang($radius);
    }
    function getUmfang() {
        $this->kugel->getUmfang();
    }

    function setKugelOberflache() {
        $this->kugel->setKugelOberflache();
    }
    function getKugelOberflache() {
        $this->kugel->getKugelOberflache();
    }
    function setKugelVolumen(){
        $this->kugel->setKugelVolumen();
    }
    function getKugelVolumen() {
        $this->kugel->getKugelVolumen();
    }

    function getObject() {
        return $this->kugel;
    }

}

