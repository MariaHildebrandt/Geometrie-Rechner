<?php

class Quader 
{
    private $quaderoberflache = NULL;
    private $breite = NULL;
    private $lange = NULL;
    private $hohe = NULL;

    function __construct() {
    }

    public function setQuaderVolumen($breite,$lange,$hohe)
    {
      $volumen = $breite*$lange*$hohe;
      $this->quaderVolumen = round ($volumen, 2 );
    }
	
    public function getQuaderVolumen()
	{
		return $this->quaderVolumen;
	}
	
    public function setQuaderOberflache($breite,$lange,$hohe)
    {
      $result1= $breite*$lange;
      $result2= $lange*$hohe;
      $result3= $breite*$hohe;
      $gesamt = 2*$result1 + 2*$result2 + 2*$result3;
      $this->quaderOberflache = round ($gesamt, 2 );
    }
	
    public function getQuaderOberflache()
	{
		return $this->quaderOberflache;
	}

}