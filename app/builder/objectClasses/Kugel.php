<?php

namespace App\builder\objectClasses;

class Kugel{
    
	private $radius=null;
    private $durchmesser=null;
    private $umfang=null;
    private $kugeloberflache=null;
    private $kugelVolumen=null;
    
    function __construct() {}
		
    public function setRadius($radius)
    {
        $this->radius = round($radius, 2);
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
		
	public function setKugelOberflache()
	{
		$flache = 4*pi() * pow ( $this->radius, 2 );
		$this->kugeloberflache = round($flache, 2);
	}
	
	public function getKugelOberflache()
	{
		return $this->kugeloberflache;
	}

	public function setKugelVolumen()
	{
		$formel = (4/3)*pi();
		$volumen = ($formel* pow ( $this->radius, 3 ));
		$this->kugelVolumen = round ($volumen, 2 );
	}
	
	public function getKugelVolumen()
	{
		return $this->kugelVolumen;
	}
	    
}