<?php

		require_once 'Controleur/Ctr_Admin.php';
		require_once 'Controleur/Ctr_Batiment.php';
		require_once 'Controleur/Ctr_Authentification.php';
		require_once 'Controleur/Ctr_Agent.php';
		require_once 'Controleur/Ctr_Scolarite.php';
		require_once 'Controleur/Ctr_Reservation.php';
		
		class Routeur 
	  {
	  	  private  $ctr_accueil_auth;
          private  $ctr_admin;
          private  $ctr_pav;
          private  $ctr_agent;
          private $ctr_sco;
         
           function __construct() 
		    {
		    	 $this->ctr_accueil_auth=new Ctr_Authentification();
		    	 $this->ctr_admin=new Ctr_Admin();
		    	 $this->ctr_pav=new Ctr_Batiment();
		    	 $this->ctr_agent= new Ctr_Agent();
		    	 $this->ctr_sco=new Ctr_Scolarite();
		    	  $this->ctr_reser=new Ctr_Reservation();

		    }
		  
		  // Traite une requête entrante
		  public function routerRequete() 
		  {
		    
			      if (isset($_REQUEST['action']) ) 
			      {
					     switch ($_REQUEST['action']) 

					     {
					         case 'logout':
					         	{
					         		session_start();
					         		session_destroy();
					         		      $this->ctr_accueil_auth->page_authentification();

					         	}
					         	break;


					         case 'connecter':
					     	                  {

									            if ( (isset($_REQUEST['login'])) && (isset($_REQUEST['password'])) && (isset($_REQUEST['user'])))
									                 {
									                   	
									                   	 $this->ctr_accueil_auth->connexion($_REQUEST['login'],$_REQUEST['password'],$_REQUEST['user']);
									                 }
									            else
									              {
									              	 session_start();
									              	 
									              	 if ( isset($_SESSION['login']) )									              	 
									              	 	 $this->ctr_admin->page_accueil_admin();
                                                       else
                                                        $this->ctr_accueil_auth->page_authentification();
                                                   }
                                              } 
					      	 break;



					      	 /*Actions admin*/

					      	  case 'save_parametre'  :
					      	                      {
	                                                     session_start();
										            if ( (isset($_SESSION['login'])) && (isset($_REQUEST['heure_begin'])) )
										                 {
										                   	
										                   	 $this->ctr_reser->parametrage_reservation($_REQUEST['date_begin'],$_REQUEST['date_fin'],$_REQUEST['heure_begin'],$_REQUEST['heure_fin']);
										                 }
										            else
										              {
										              	 session_start();
										              	 
										              	 if ( isset($_SESSION['login']) )									              	 
										              	 	 $this->ctr_admin->page_accueil_admin();
	                                                       else
	                                                        $this->ctr_accueil_auth->page_authentification();
	                                                   }
                                                  }   
					      	 break;


					      	 case 'new_dept':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )))
									        
									              	 {
									              	 	 $this->ctr_sco->page_new_dept();
                                                     }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();

		           	                             
					      	             }
					      	 
					      	 break;

					      	   case 'save_dept':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] ))  && (isset($_REQUEST['nom_dept'] )))
									        
									              	 {
									              	 	 $this->ctr_sco->save_new_dept($_REQUEST['nom_dept'],intval($_REQUEST['nb_option']) );
                                                     }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();

		           	                             
					      	             }
					      	 
					      	 break;

                               
                              case 'Reservation':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )) )
									        
									              	 {
									              	 	 $this->ctr_reser->page_reservation();
                                                     }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();

		           	                             
					      	             }
					      	 
					      	 break;
					      	
					      	 	
					      	 case 'add_pav':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )))
									        
									              	 {
									              	 	 $this->ctr_pav->page_new_pavillon();
                                                     }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();

		           	                             
					      	             }
					      	 
					      	 break;

					      	 case 'new_user':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )))
									        
									              	 {
									              	 	 $this->ctr_admin->page_new_user();
                                                     }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();

		           	                             
					      	             }
					      	 
					      	 break;

					      	 case 'new_pav':
					      	              {
					      	              	  session_start();

                                             if( (isset($_SESSION['login'] )) &&(isset($_REQUEST['name_pav'])) )
									              	 {
									              	   $this->ctr_pav->add_pavillon($_REQUEST['name_pav'],$_REQUEST['nbre_etage'],$_REQUEST['nb_chambre_par_etage'],$_REQUEST['niveau']);
                                                     }
                                                 else

                                              if( (isset($_SESSION['login'] )) &&(!isset($_REQUEST['name_pav'])) )
									              	 {
									              	   $this->ctr_admin->page_accueil_admin();
                                                     }

                                                  
                                                  	 else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();


					      	              }
					      	 	
					      	 	break;

					      	 	case 'save_user':
					      	              {
					      	              	  session_start();

                                             if( (isset($_SESSION['login'] )) &&(isset($_REQUEST['username'])) )
									              	 {
									              	   $this->ctr_admin->saveUser($_REQUEST['username'],$_REQUEST['pwd'],$_REQUEST['prenom'],$_REQUEST['nom'],$_REQUEST['date_naissance'],$_REQUEST['genre'],$_REQUEST['type_user']);
                                                     }
                                                 else

                                              if( (isset($_SESSION['login'] )) &&(!isset($_REQUEST['name_pav'])) )
									              	 {
									              	   $this->ctr_admin->page_accueil_admin();
                                                     }

                                                  
                                                  	 else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();


					      	              }
					      	 	
					      	 	break;

					      	 	case 'del_chambre':
					      	              {
					      	              	  session_start();

                                             if( (isset($_SESSION['login'] )) &&(isset($_REQUEST['param1'])) )
									              	 {
									              	   $this->ctr_pav->delete_chambre($_REQUEST['param1']);
                                                     }
                                                 else

                                              if( (isset($_SESSION['login'] )) &&(!isset($_REQUEST['name_pav'])) )
									              	 {
									              	   $this->ctr_admin->page_accueil_admin();
                                                     }

                                                  
                                                  	 else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();


					      	              }
					      	 	
					      	 	break;


					      	 		case 'set_chambre':
					      	              {
					      	              	  session_start();

                                             if( (isset($_SESSION['login'] )) &&(isset($_REQUEST['param0'])) &&(isset($_REQUEST['param1'])) &&(isset($_REQUEST['param2'])) )
									              	 {
									              	   $this->ctr_pav->set_chambre($_REQUEST['param0'],$_REQUEST['param1'],$_REQUEST['param2']);
                                                     }
                                                 else

                                              if( (isset($_SESSION['login'] )) &&(!isset($_REQUEST['name_pav'])) )
									              	 {
									              	   $this->ctr_admin->page_accueil_admin();
                                                     }

                                                  
                                                  	 else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();


					      	              }
					      	 	
					      	 	break;


					      	 case 'validate':
					      	              {
					      	              	  session_start();

                                             if( (isset($_SESSION['login'] )) &&(isset($_REQUEST['name_pav'])) )
									              	 {
									              	   $this->ctr_pav->add_pavillon($_REQUEST['name_pav'],$_REQUEST['nbre_etage'],$_REQUEST['nb_chambre_par_etage'],$_REQUEST['niveau']);
                                                     }
                                                 else

                                              if( (isset($_SESSION['login'] )) &&(!isset($_REQUEST['name_pav'])) )
									              	 {
									              	   $this->ctr_admin->page_accueil_admin();
                                                     }

                                                  
                                                  	 else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();


					      	              }
					      	 	
					      	 	break;
                        
                             /*Actions AGENT/GUICHETIER*/

					      	  case 'SuiviEtudiant':
					      	 			{
					      	 				session_start();

                                         if (isset($_SESSION['login'] ))
									        
							         	 {


					      	 				$this->ctr_agent->afficher_suivi_etudiant();
					      	 				//if (isset($_REQUEST['identifiant']))
					      	 			//	{
					      	 		//			$this->ctr_suivi_etudiant->afficherEtudiant();  // FAIRE EN SORTE QUE LES CHAMPS SAFFICHENT DANS LA PAGE
					      	 		//		}
					      	 			   }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->ctr_accueil_auth->page_authentification();	
					      	 			}

					      	 break;	


					      	  case 'indexe':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login']))
					      	 	{
					      	 		$this->ctr_agent->affiche_Accueil_guichetier();


					      	 		// AUTRES OPERATIONS
					      	 	}

					      	 	else
					      	 	 $this->ctr_accueil_auth->page_authentification();	
					      	 }
					      	 break;


					      	  case 'EnregistrerMensualite':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login']))
					      	 	{
					      	 		$this->ctr_agent->afficherVueMensualite();


					      	 		// AUTRES OPERATIONS
					      	 	}

					      	 	else
					      	 	 $this->ctr_accueil_auth->page_authentification();	
					      	 }
					      	 break;

					      	  case 'Codifier':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login']))
					      	 	{
					      	 		$this->ctr_agent->Codifier();


					      	 		// AUTRES OPERATIONS
					      	 	}

					      	 	else
					      	 	 $this->ctr_accueil_auth->page_authentification();	
					      	 }
					      	 break;


					      	  case 'EditerEtudiant':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login']))
					      	 	{
					      	 		$this->ctr_agent->EditEtudiant();


					      	 		// AUTRES OPERATIONS
					      	 	}

					      	 	else
					      	 	 $this->ctr_accueil_auth->page_authentification();	
					      	 }
					      	 break;


					      	 case 'codification':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login']) && isset($_REQUEST['identifiant']))
					      	 	{
					      	 	    	$this->ctr_agent->ajouterEtudiant($_REQUEST['identifiant'],$_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['date_naissance'],$_REQUEST['lieu_naissance'],$_REQUEST['adresse'],$_REQUEST['nationnalite'],$_REQUEST['formation'],$_REQUEST['option'],$_REQUEST['chambre']);
					      	 	}
					      	 	else
					      	 		$this->ctr_accueil_auth->page_authentification();

					      	 }
					      	 break;
					      }
			      }

		           else  
		           	    
		           	     {  // il y a aucun parametre,affichage de l'accueil

		           	         session_start();
									              	 
						     if( (isset($_SESSION['login'] )) &&(isset($_SESSION['type_user'])) )

						     	 {
						     	 	 switch ($_SESSION['type_user'])
						     	 	  {
						     	 	 	case 'admin':
						     	 	 		 $this->ctr_admin->page_accueil_admin();
						     	 	 		break;
						     	 	 	case 'agent':
						     	 	 		 $this->ctr_admin->page_accueil_admin();
						     	 	 		break;
						     	 	 	/*case 'guichetier':
						     	 	 		 $this->ctr_admin->page_accueil_admin();
						     	 	 		break;
						     	 	 	*/
						     	 	 	
						     	 	 }
						     	 	

						     	 }
									              	 
								     
								else                                                          	 
		           	                $this->ctr_accueil_auth->page_authentification();
                         }
                 
                     
         }
         
      }

  






?>