<?php
                 require_once 'modele/Admin.class.php';
                 

				
				/**
				* 
				*/
				class Ctr_Admin
				{
                     private $admin;
                     

                     function __construct() {
                     	$this->admin = new Admin();
                     	                     }
					  
                      public function page_accueil_admin()
                      {
                          require_once 'vue/accueil_admin.php';
                      }
                      
                     public function page_new_user()
                     {
                     	 require_once 'vue/new_user.php';
                     	
                     }

                     public function create_password($nb_cars) //fonction qui genere aleatoirement un mot de passe
                     {
                          if ( (is_numeric($nb_cars)) && ($nb_cars > 0) &&(! is_null($nb_cars))) 
                             {
                                  $mdp = '';
                                  $cars_ok = 'abcdefghijklmnopqrstuvwxyz1234567890';
                                  // Initialise le générateur si nécessaire.
                                  srand(((int)((double)microtime()*1000003)) );
                                  
                                  for ($i = 0; $i <$nb_cars; $i++) 
                                  {
                                    $nb_aleatoire = rand(0, (strlen($cars_ok) -1));
                                    
                                    
                                    $mdp[] = $cars_ok[$nb_aleatoire]; //on concantene le nbe aleatoire au mot de passe

                                  }
                                  $password=implode("", $mdp);
                                  
                                  return $password;
                            }

                     }

                     public function saveUser($login,$prename,$name,$sexe,$user_type)
                     {
                     	$pass=$this->create_password(6);
                      
                      if (strlen($pass)==6) 
                         {
                             $this->admin->AddUser($login,$pass,$prename,$name,$sexe,$user_type);
                             $succes=true;
                             require_once 'vue/accueil_admin.php';
                         }
                     	
                      
                      

                     
                     }

                     public function gererUser()

                     {
                         $array_agent=Admin::getUsers('agent');//on recuperes les lignes de la table agents
                         
                         $array_guichetier=Admin::getUsers('guichetier');//on recuperes les lignes de la table agents
                         require_once 'vue/gestion_user.php';
                     }
                       

                             
                             
                         



				 }

?>