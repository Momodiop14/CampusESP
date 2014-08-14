<?php 
          
	
			/**
			* definition de la classe PAVILLon
			*/
			class Departement 

			{ 
				
				private $nomDept ;
				private $id;
				
				

				function __construct() //constructeur pour insertion
				     
				     {
					     
			         }

				
				 
				  public static function CreateDept($name)
					  {
					  	 	  
					  	 	 
					  	 	 
					  	 	  $id=Departement::if_exist($name);
					  	 	  if ($id==0) //sil ce nom de departement nexiste pas
					  	 	     {
					  	 	         $req=Base::getBDD()->prepare('insert into departement (nom_departement) values (:name)');
					  	             $req->execute(array('name'=> $name ) );

					  	             $id=Departement::getMax();
					  	               return $id;
					  	 	     }
					  	 	   else
					  	 	   	 return 0 ;//ce departement existe
					  	     
					  	     
					 }

					  

					   public static function getDepts()
					      {
					 	      $req=Base::getBDD()->prepare(' select * from departement ');
					  	      
					  	      $req->execute();
					  	      
					  	      $tab=$req->fetchAll();

					  	      return $tab ;
					      }
					
					      
					  	    
					
	        public static function if_exist($val) //verifier si le tuple existe
				{
	                  
					$req=Base::getBDD()->prepare("select Id_dept from departement where nom_departement=? ");
		           
		            $req->execute( array( $val));
		            

				    
				    $id=$req->fetchAll();
				    
				    if (count($id)==0) 
				           return 0;
				         else
				         	return 1;
				    
					  	                                     
	               
				}

	         public static function getMax() //last id de la table
		         {
		        	 $req=Base::getBDD()->prepare('select max(Id_dept) as max from departement');
			         $req->execute(array());
					 $id=$req->fetchAll();
						  	                                     
		             return (intval($id[0]['max']));
		         }      
				         
				     
			}



		


			