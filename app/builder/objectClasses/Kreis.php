<?php
namespace App\builder\objectClasses;

class Kreis{
    
    private $radius=null;
    private $durchmesser=null;
    private $umfang=null;
    private $kreisFlacheninhalt=null;
    
    
    function __construct() {}
    
    public function setRadius($radius)
    {
        $this->radius = round($radius,2);
    }
        
    public function getRadius()
    {
        return $this->radius;
    }
        
    public function setDurchmesser($radius)
    {
        $this->durchmesser = round($radius*2, 2);
    }
        
    public function getDurchmesser()
    {
        return $this->durchmesser;
    }
        
    public function setUmfang($radius)
    {
        $this->umfang = round(2*pi()*$radius, 2);
    }
        
    public function getUmfang()
    {
        return $this->umfang;
    }
        
    public function setFlacheninhalt()
    {
        $flache = pi() * pow($this->radius, 2);
        $this->flacheninhalt = round($flache, 2);
    }
        
    public function getFlacheninhalt()
    {
        return $this->flacheninhalt;
    }
        
}