<?php

  require_once 'modele/Parametrage.class.php';
/**
* 
*/
class Ctr_Reservation
{
	 private $param;
		function __construct()
			{
				$this->param=new Parametre();
			}



	    public function page_reservation()
	     {
	    	require_once 'vue/parametrage_reservation.php';
	     }


	    public function parametrage_reservation($date_begin,$date_fin,$heure_begin,$heure_fin)
	     {
	    	if ( ( strtotime($date_fin)>strtotime($date_begin) ) 

	    		   || ( strtotime($date_fin)==strtotime($date_begin) && strtotime($heure_fin)>strtotime($heure_begin))            
               ) 
	    	  
	    	  
	    		{
	    			$this->param->parametrer_reservation($date_begin,$date_fin,$heure_begin,$heure_fin);
                     require_once 'vue/accueil_admin.php';
	    		}
	    	  else
	    	      {
                     $error=true;
                     require_once 'vue/parametrage_reservation.php';

	    	      }

	      }

         public function verification()
          {
         	     $date=date("y-m-d");// recuperer la date que l'internaute a voulu se connecter
										                             
	             $time=date('H:i');// recuperer l'heure que l'internaute a voulu se connecter
				
				 $params=Parametre::getParam();
										                             
										                              

				if ( ( (strtotime($date) >strtotime($params[0]['date_debut']) ) 

				     && (strtotime($date) < strtotime($params[0]['date_fin'])) ) 

				     || (strtotime($date)==strtotime($params[0]['date_debut']) 

				     && strtotime($time)>= strtotime($params[0]['heure_debut']) ) 

				     || (strtotime($date)==strtotime($params[0]['date_fin']) 

				     && strtotime($time)< strtotime($params[0]['heure_fin']) ) 
				   )

				    require_once 'vue/new_reservation';

				  else

				     {
				     	$error=true;
				     	require_once 'vue/indexe.php'; 
                        
				     }         


	     }
}


?>