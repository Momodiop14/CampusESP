<?php

  /**
  * 
  */
  class Etage 
    {
    	 private $id_etage;
    	 private $pavillon;
    	 private $niveau_etage;

  	
  	     function __construct($code_etage,$nom_pavillon,$niveau)
  	      {
  	        	$this->id_etage=$code_etage;	
  	        	$this->pavillon=$nom_pavillon;
  	        	$this->niveau_etage=$niveau;
  	      }

  	      public function createEtage()
  	      {
  	      	 $base=Base::getBDD();
					   $req=$base->prepare('insert into etage (Code_Etage,Ref_pavillon,niveau_Etage) values (?,?,?)');
					   $req->execute(array($this->id_etage,$this->pavillon,intval($this->niveau_etage) ) );

               

  	      	
  	      }
  }


?>