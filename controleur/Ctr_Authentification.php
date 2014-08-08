<?php
               #require_once 'Vue/Vue.php';
               require_once 'modele/User.class.php';

				
				/**
				* 
				*/
				class Ctr_Authentification 
				{

					  public function page_authentification()//affichage  du formulaire d'authentification
					     { 
						     require("vue/Authentification.php");
					     }
                     


					  public function connexion($pseudo,$pwd,$table)//affichage  du formulaire d'authentification
					     { 
				             $user=User::seConnecter($table,$pseudo,$pwd);
				             
				              
                             if ( (isset($user[0]['prenom_'.$table])) && (isset($user[0]['nom_'.$table]) ) )
                             {
                             	session_start();
                                $_SESSION['login']=$pseudo;
                             	$_SESSION['prenom']=$user[0]['prenom_'.$table];
                                $_SESSION['nom']=$user[0]['nom_'.$table];
                                $_SESSION['type_user']=$table;
                                $_SESSION['compt_visit']=1;

                                switch ($table) 
                                 {
                                    
                                    case 'admin':
                                        require 'vue/accueil_admin.php';
                                        break;
                                    
                                    case 'agent':
                                        require 'vue/indexe.php';
                                        break;
                                    case 'guichetier':
                                        require 'vue/guichetier.php' ;   
                                 }
                             	
                             	
                             }	

                             else
                             {  
                             	
                             	$this->page_authentification();
                                echo "<script text='javascript'>";
                                echo "alert('Login ou mot de passe incorrects')";
                                echo "</script>";
                             }
                               	 
                             
                             
                         }



				 }

?>