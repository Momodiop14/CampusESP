<?php
			require_once 'modele/Base.class.php';
			

			/**
			* definition de la class PAVILLon
			*/
			class Pavillon 

			{ 
				
				private $nomPavillon ;
				private $niveau_resident;
				
				

				function __construct($name_pav,$niveau) //constructeur pour insertion
				     
				     {   
				     	 $this->nomPavillon=$name_pav;
					     $this->niveau_resident=$niveau;    
					     
			         }

									
				/* CRUD PAVILLON*/

					  
					  public function CreatePavillon ()
					  
					      {

					     	  
					  	 	  $req=Base::getBDD()->prepare('insert into pavillon (nom_pavillon,niveau_etude_resident) values (?,?)');
					  	      $req->execute(array(utf8_encode($this->nomPavillon),$this->niveau_resident));

					  	      $id=Pavillon::getMax();

					  	      return $id;

					      }

					  

					  public static function getCouloir($idpav)
					       {

					       	   	$req=Base::getBDD()->prepare(' SELECT Code_Couloir, position_couloir,Ref_Etage 

					       	   		FROM couloir, etage WHERE Ref_Etage = Code_Etage AND Ref_Pavillon=:pav');

			                 	$req->execute(array(':pav'=>$idpav)); 
			                	$lignes=$req->fetchAll();
			                
			                	return $lignes;
					    	
					       }

					   public function DeletePavillon($nom_pav)
					      {
					  	     $req=$pdo->prepare('delete from pavillon where nom pavillon=:name_pav');
					  	 	 $req->execute(array(
					  	 	 	                   'name_pav'=>$nom_pav
					  	 	 	                 )

					  	 	               );
					      }
				         
				       public static function getPavillon($name_pav)
					  {
					  	      $req=$pdo->prepare('select niveau_etude_resident from pavillon where values nom_pavillon=:name_pav');
					  	      
					  	       $req->execute(array(
					  	 	 	                   'name_pav'=>$name_pav
					  	 	 	                 )

					  	 	               );
					  }
                       
                      public static function getPavillons()
					     {
					  	      $req=Base::getBDD()->prepare('select nom_pavillon from pavillon ');
					  	      
					  	      $req->execute(array());
					  	      $lignes=$req->fetchAll();
			                
			                	return $lignes;
					     }


	          public static function if_exist($val) //verifier si le tuple existe
				{
	                 
					$req=Base::getBDD()->prepare("select idPavillon from pavillon where nom_pavillon =?");
				
					$req->execute(array($val));
				
					$tab=$req->fetchAll();

		            
		            
				  
				    if (count($tab)==0) 
				    	 $exist=false;
				    	else
				    		$exist=true;
				       
				        return $exist;
				  
				    
					  	                                     
	               
				}

             

              public static function getMax() //last id de la table
		         {
		        	 $req=Base::getBDD()->prepare('select max(idPavillon) as max from pavillon');
			         $req->execute(array());
					 $id=$req->fetchAll();
						  	                                     
		             return (intval($id[0]['max']));
		         }




	



			}


			?>


			