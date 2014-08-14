<?php
                    
			/**
			* definition de la classe PAVILLon
			*/
			 class User

			{ 
				
				protected $login ;
				protected $password;
				protected $prenom;
				protected $nom;
				protected $genre;
		
				

				function __construct($pseudo,$pwd,$surname,$name,$sexe) //constructeur pour insertion
				     
				     {
                        $this->login=$pseudo;
                        $this->password=$pwd;
                        $this->prenom=$surname;
                        $this->nom=$name;
                        $this->genre=$sexe;
                        	    
			         }


                 /* Debut Setter*/
                  
                   public function setPassword($value)
				 
				   {
				 	   $this->password=$value;
				   }

                 public static function seConnecter($nom_table,$pseudo,$pwd) //redifinition de la methode de connexion
		 	
		 	   {
		 		$base=Base::getBDD();
		 		 
		 		$req=$base->prepare('SELECT prenom_'.$nom_table.',nom_'.$nom_table.' FROM  '.$nom_table.'  WHERE  Login_'.$nom_table.'=:login and Mot_pass_'.$nom_table.'=:pwd');
		 		$req->execute(array(  

		 			             'login'=> $pseudo,

		 			             'pwd'=>sha1(($pwd)) 
		 			             )



		 			);


		 		$row=$req->fetchAll();

                

                if (count($row)==1) //il y a correspondance
                  {
                  	     return $row;
                  }
				  
				  
				

				  /*Fin Setter*/
				 
				      

				   			         
				 
			}

		 }	


		


		


			