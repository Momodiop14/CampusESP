<?php
	
			/**
			* definition de la classe PAVILLon
			*/
			class Departement 

			{ 
				
				private $nomPavillon ;
				private $niveau_resident;
				

				function __construct() //constructeur pour insertion
				     
				     {
					     
			         }

				
				 
				  public function CreateDept($pavillon)
					  {
					  	 	  $req=$pdo->prepare('insert into pavillon (nom pavillon,niveau_etude_resident) values (?,?)');
					  	      $req->execute(array($pavillon->nom_pavillon,$pavillon->niveau_etude_resident));
					  }

					   public function UpdatePavillon($value='')
					  {
					  	
					  }

					   public static function DeletePavillon($nom_pav)
					      {
					  	     $req=$pdo->prepare('delete from pavillon where nom pavillon=:name_pav');
					  	 	 $req->execute(array(
					  	 	 	                   'name_pav'=>$nom_pav;
					  	 	 	                 )

					  	 	               );
					      }
				         
				       public static function getPavillon($name_pav)
					  {
					  	      $req=$pdo->prepare('select niveau_etude_resident from pavillon where values nom_pavillon=:name_pav');
					  	      
					  	       $req->execute(array(
					  	 	 	                   'name_pav'=>$name_pav;
					  	 	 	                 )

					  	 	               );
					  }
			}



		


			