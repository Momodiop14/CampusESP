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
					  	 	  
					  	 	  $req=Base::getBDD()->prepare('insert into departement (nom_departement) values (:name)');
					  	      $req->execute(array('name'=>$name));
					  	     
					  	      $req=Base::getBDD()->prepare('select max(Id_dept) as max from departement');
					  	      $req->execute();
					  	      $id=$req->fetchAll();

					  	                                     
					  	      return (intval($id[0]['max']));
					  	      
					  }

					  

					   public static function getDepts()
					      {
					 	      $req=Base::getBDD()->prepare(' select * from departement ');
					  	      
					  	      $req->execute();
					  	      
					  	      $tab=$req->fetchAll();

					  	      return $tab ;
					      }
					
					      
					  	    
					      
				         
				     
			}



		


			