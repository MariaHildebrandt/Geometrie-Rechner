<?php
namespace App\builder;
use App\builder\AbstractBuilder;
use App\builder\BuildDirector;

class Director extends BuildDirector {
    private $builder = NULL;

    public function __construct(AbstractBuilder $builder_in) {
         $this->builder = $builder_in;
    }
    public function buildKugel($radius) {
        $this->builder->setRadius($radius);
  		$this->builder->getRadius();
  		$this->builder->setDurchmesser($radius);
  		$this->builder->getDurchmesser();
  		$this->builder->setUmfang($radius);
  		$this->builder->getUmfang();

  		$this->builder->setKugelOberflache();
  		$this->builder->getKugelOberflache();
		$this->builder->setKugelVolumen();
  		$this->builder->getKugelVolumen();
    }
    public function buildKreis($radius) {
		  $this->builder->setRadius($radius);
		  $this->builder->getRadius();
		  $this->builder->setDurchmesser($radius);
		  $this->builder->getDurchmesser();
		  $this->builder->setUmfang($radius);
		  $this->builder->getUmfang();

		  $this->builder->setFlacheninhalt();
		  $this->builder->getFlacheninhalt();
    }
    public function buildRechteck($b,$l) {
		  $this->builder->setRechteckUmfang($b,$l);
		  $this->builder->getRechteckUmfang();
		  $this->builder->setRechteckFlacheninhalt($b,$l);
		  $this->builder->getRechteckFlacheninhalt();
    }
    public function buildQuader($b,$h,$l) {
		  $this->builder->setQuaderVolumen($b,$h,$l);
		  $this->builder->getQuaderVolumen();
		  $this->builder->setQuaderOberflache($b,$h,$l);
		  $this->builder->getQuaderOberflache();
    }
    public function getObject() {
      return $this->builder->getObject();
    }
}
