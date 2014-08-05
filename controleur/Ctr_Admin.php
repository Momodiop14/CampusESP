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

                     public function saveUser($login,$pass,$prename,$name,$dateNaissance,$sexe,$user_type)
                     {
                     	

                     	$this->admin->AddUser($login,$pass,$prename,$name,$dateNaissance,$sexe,$user_type);
                      $succes=true;

                      require_once 'vue/accueil_admin.php';

                     
                     }
                               	 
                             
                             
                         



				 }

?>