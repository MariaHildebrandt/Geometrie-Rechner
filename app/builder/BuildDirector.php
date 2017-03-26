<?php

namespace App\builder;
use App\builder\AbstractBuilder;

abstract class BuildDirector {
    abstract function __construct(AbstractBuilder $builder_in);
    abstract function buildKreis($radius);
    abstract function buildKugel($radius);
    abstract function buildRechteck($b,$l);
    abstract function buildQuader($b,$l,$h);
    abstract function getObject();
}

