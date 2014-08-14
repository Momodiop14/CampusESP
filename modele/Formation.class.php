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





         
            public static function if_exist($val) //verifier si le tuple existe
              {
                   
                    $req=Base::getBDD()->prepare("select Code_Formation from formations where Code_Formation =?");
                  
                    $req->execute(array($val));
                  
                    $tab=$req->fetchAll();

                          
                          
                    
                      if (count($tab)==0) 
                         $exist=false;
                        else
                          $exist=true;
                         
                          return $exist;
                    
                      
                                                   
                 
               }
 }



?>