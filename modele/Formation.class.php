<?php


/**
* 
*/
class Formation
  {
	
		function __construct()
			{
			
			}

        
         public function save_formation($nom)
          
           {
           	  #var_dump(" insert into formations Code_Formation values ('".$nom."')");
         	  $query=Base::getBDD()->exec(" insert into formations (Code_Formation) values ('".$nom."')");
           }

 }



?>