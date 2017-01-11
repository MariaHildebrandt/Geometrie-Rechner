<?php

class Rechteck 
{
	private $rechteckFlacheninhalt = NULL;
	private $breite = NULL;
    private $lange = NULL;
    private $rechteckUmfang = NULL;
	
	function __construct() {}
	
	 public function setRechteckUmfang($b,$l)
    {
      $result= 2*$b + 2*$l;
      $this->rechteckUmfang= round($result,2);
    }
    function getRechteckUmfang()
	{
		return $this->rechteckUmfang;
	}
	
    public function setRechteckFlacheninhalt($b,$l)
    {
      $inhalt= $b*$l;
      $this->rechteckFlacheninhalt= round($inhalt,2);
    }
	
    function getRechteckFlacheninhalt()
	{
		return $this->rechteckFlacheninhalt;
	}
}