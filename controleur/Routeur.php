<?php

		require_once 'Controleur/Ctr_Admin.php';
		require_once 'Controleur/Ctr_Batiment.php';
		require_once 'Controleur/Ctr_Authentification.php';
		require_once 'Controleur/Ctr_Agent.php';
		require_once 'Controleur/Ctr_Scolarite.php';
		require_once 'Controleur/Ctr_Reservation.php';
		require_once 'Controleur/Ctr_Guichetier.php';
		
		class Routeur 
	  {
	  	  private  $ctr_accueil_auth;
          private  $ctr_admin;
          private  $ctr_pav;
          private  $ctr_agent;
          private  $ctr_sco;
          private  $ctr_guichetier;
         
           function __construct() 
		    {
		    	 $this->ctr_accueil_auth=new Ctr_Authentification();
		    	 $this->ctr_admin=new Ctr_Admin();
		    	 $this->ctr_pav=new Ctr_Batiment();
		    	 $this->ctr_agent= new Ctr_Agent();
		    	 $this->ctr_sco=new Ctr_Scolarite();
		    	 $this->ctr_reser=new Ctr_Reservation();
		    	 $this->ctr_guichetier= new Ctr_Guichetier();

		    }


		     public function Redirect ()
		     {
		     	
		     	 if (isset($_SESSION['login'])) 
		     	 
		     	 {

		     	 	switch ($_SESSION['type_user']) 
		     	 	 {
		     	 		
		     	 		case 'admin':
		     	 			      $this->ctr_admin->page_accueil_admin();
		     	 			break;
		     	 		
		     	 		case 'agent':
           	 		 		$this->ctr_agent->afficher_accueil_agent();
		              	 		 		# code...
           	 		 		break;
           	 		 	
           	 		 	 case 'guichetier':
          	 		 		$this->ctr_guichetier->affiher_vue_guichetier();
	              	 		 		# code...
           	 		 		break;
           	 		 	
             	 		           	 		 	
           	 		 	
		     	 	 } 

		     	 }

		     	 else
		     	 	$this->ctr_accueil_auth->page_authentification();

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
					         		      $this->Redirect();

					         	}
					         	break;


					         case 'connecter':
					     	                  {

									            if ( (isset($_REQUEST['login'])) && (isset($_REQUEST['password'])) && (isset($_REQUEST['user'])))
									                 {
									                   	
									                   	 $this->ctr_accueil_auth->connexion($_REQUEST['login'],$_REQUEST['password'],$_REQUEST['user']);
									                 }
									            
                                              } 
					      	 break;



					      	 /*Actions admin*/

					      	  case 'save_parametre'  :
					      	                      {
	                                                     
	                                                  session_start();
										            

										             if ( (isset($_SESSION['login'])) && (isset($_REQUEST['heure_begin'])) && $_SESSION['type_user']=='admin' )
										                 {
										                   	
										                   	 $this->ctr_reser->parametrage_reservation($_REQUEST['date_begin'],$_REQUEST['date_fin'],$_REQUEST['heure_begin'],$_REQUEST['heure_fin']);
										                 }
										              else
										                 								   
	                                                     $this->Redirect();
	                                                     
                                                  }   
					      	 break;


					      	case 'set_couloir':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )) && (isset($_REQUEST['tab_select'])) && (isset($_REQUEST['tab_couloir'])) && $_SESSION['type_user']=='admin'  )
									        
									              	 {
									              	 	 $this->ctr_pav->setCouloir($_REQUEST['tab_couloir'],$_REQUEST['tab_select']);
                                                     }
                                                    else
                                                   	  // il y a aucun parametre,affichage de l'accueil
		           	                                  $this->Redirect();

		           	                             
					      	             }
					      	 
					      	 break;


					      	 case 'new_dept':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )) && $_SESSION['type_user']=='admin')
									        
									              	 {
									              	 	 $this->ctr_sco->page_new_dept();
                                                     }
                                                    else
                                                   	  // il y a aucun parametre,affichage de l'accueil
		           	                                  $this->Redirect();

		           	                             
					      	             }
					      	 
					      	 break;


					      	   case 'save_dept':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] ))  && (isset($_REQUEST['nom_dept'] )) && $_SESSION['type_user']=='admin')
									        
									              	 {
									              	 	 $this->ctr_sco->save_new_dept($_REQUEST['nom_dept'],intval($_REQUEST['nb_option']) );
                                                     }
                                                    else
                                                   	     $this->Redirect();

		           	                             
					      	             }
					      	 
					      	 break;

					      	 case 'new_option':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )) &&( isset($_SESSION['type_user'])=='admin') )
									        
									              	 {
									              	 	 $this->ctr_sco->page_new_option();
                                                     }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                   $this->Redirect();

		           	                             
					      	             }

					      	    break;
					      	 

					      	  case 'create_opt':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] ))  && (isset($_REQUEST['param0'] )) && $_SESSION['type_user']=='admin')
									        
									              	 {
									              	 	 $this->ctr_sco->save_new_opt( $_REQUEST['param0'],$_REQUEST['param1'],$_REQUEST['param2'],$_REQUEST['param3'] ) ;
                                                     }
                                                    else
                                                   	    // il y a aucun parametre,affichage de l'accueil
		           	                                       $this->Redirect();

		           	                             
					      	             }
					      	 
					      	 break;


					      	   case 'new_formation':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )) && $_SESSION['type_user']=='admin' )
									        
									              	 {
									              	 	 $this->ctr_sco->new_formation() ;
                                                     }
                                                    else
                                                    	 
                                                    	 // il y a aucun parametre,affichage de l'accueil
		           	                                     $this->Redirect();

		           	                             
					      	             }
					      	 
					      	 break;
                                      
                               case  'save_formation' :
                                                    {
                                                           session_start();

                                                           if( (isset($_SESSION['login'] ))  && (isset($_REQUEST['nom_formation'] )) && $_SESSION['type_user']=='admin')
									        
												               {
												              	 	 $this->ctr_sco->save_new_formation($_REQUEST['nom_formation'] ) ;
			                                                    }
			                                                    else
			                                                    	if (isset($_SESSION['login']) && $_SESSION['type_user']=='admin') 
			                                                    	     
			                                                    	     $this->ctr_sco->new_formation();
			                                                    	
			                                                    	else
			                                                   	// il y a aucun parametre,affichage de l'accueil
					           	                                $this->Redirect();

                                                    }
                                          break;

                                 /*case  'reserver' :
                                                    {
                                                           session_start();

                                                           if( (isset($_SESSION['login'] ))  && ($_SESSION['type_user']='agent' ) ) 
									        
												                {
												              	 	 $this->ctr_reser->verification();
												                 }
										                                        else
										                                          	if (isset($_SESSION['login'])) 
													                                                    	     
										                                          	     $this->ctr_sco->new_formation();
													                                                    	
     										                                           	else
									                                                   	// il y a aucun parametre,affichage de l'accueil
					           	                                $this->ctr_accueil_auth->page_authentification();

                                                    }
                                          break;
                               
                              case 'Reservation':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )) && ($_SESSION['type_user']=='agent' ) )
									        
									              	 {
									              	 	 $this->ctr_reser->page_reservation();
                                                     }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->Redirect
Redirect();

		           	                             
					      	             }
					      	 
					      	 break;*/
					      	
					      	 	
					      	 case 'add_pav':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )) && $_SESSION['type_user']=='admin')
									        
									              	 {
									              	 	 $this->ctr_pav->page_new_pavillon();
                                                     }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->Redirect();

		           	                             
					      	             }
					      	 
					      	 break;

					      	 case 'new_user':
					      	             {
                                               session_start();

                                                 if( (isset($_SESSION['login'] )) && $_SESSION['type_user']=='admin')
									        
									              	 {
									              	 	 $this->ctr_admin->page_new_user();
                                                     }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->Redirect();

		           	                             
					      	             }
					      	 
					      	 break;

					      	 case 'new_pav':
					      	              {
					      	              	  session_start();

                                             if( (isset($_SESSION['login'] )) &&(isset($_REQUEST['name_pav']))  && $_SESSION['type_user']=='admin')
									              	 {
									              	   $this->ctr_pav->add_pavillon($_REQUEST['name_pav'],$_REQUEST['nbre_etage'],$_REQUEST['nb_chambre_par_etage'],$_REQUEST['niveau']);
                                                     }
                                                                                                
                                                else
                                                   	// il y a aucun parametre,affichage de l'accueil
													$this->Redirect();	           	                                


					      	              }
					      	 	
					      	 	break;

					      	 	case 'save_user':
					      	              {
					      	              	  session_start();

                                             if( (isset($_SESSION['login'] )) &&(isset($_REQUEST['username'])) && $_SESSION['type_user']=='admin')
									              	 {
									              	   $this->ctr_admin->saveUser($_REQUEST['username'],$_REQUEST['pwd'],$_REQUEST['prenom'],$_REQUEST['nom'],$_REQUEST['date_naissance'],$_REQUEST['genre'],$_REQUEST['type_user']);
                                                     }
                                                 else

                                              if( (isset($_SESSION['login'] )) &&(!isset($_REQUEST['name_pav'])) && $_SESSION['type_user']=='admin')
									              	 {
									              	   $this->ctr_admin->page_accueil_admin();
                                                     }

                                                  
                                                  	 else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->Redirect();


					      	              }
					      	 	
					      	 	break;

					      	 	case 'del_chambre':
					      	              {
					      	              	  session_start();

                                             if( (isset($_SESSION['login'] )) &&(isset($_REQUEST['param1'])) && $_SESSION['type_user']=='admin')
									              	 {
									              	   $this->ctr_pav->delete_chambre($_REQUEST['param1']);
                                                     }
                                                 else

                                              if( (isset($_SESSION['login'] )) &&(!isset($_REQUEST['name_pav'])) && $_SESSION['type_user']=='admin')
									              	 {
									              	   $this->ctr_admin->page_accueil_admin();
                                                     }

                                                  
                                                  	 else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->Redirect();


					      	              }
					      	 	
					      	 	break;


					      	 case 'validate_set_chambre':
					      	              {
					      	              	  session_start();

                                             if( (isset($_SESSION['login'] )) &&(isset($_REQUEST['count_chamb'])) && $_SESSION['type_user']=='admin')
									              	 {
									              	   $nb_chambre=intval($_REQUEST['count_chamb']);

									              	  for ($i=0; $i <$nb_chambre ; $i++) 
									              	  { 
                                                        
                                                          if ( isset($_REQUEST["id_chambre".$i]) && isset($_REQUEST["chambre".$i])) 
                                                         
                                                         	     $this->ctr_pav->set_chambre($_REQUEST["id_chambre".$i],$_REQUEST['chambre'.$i]);
									              	  }

									              	  $this->Redirect();
                                                     }
                                                 else

                                                     	// il y a aucun parametre,affichage de l'accueil
		           	                                    $this->Redirect();


					      	              }
					      	 	
					      	 	break;
                        
                             /*Actions AGENT/GUICHETIER*/

					      	    case 'SuiviEtudiant':
					      	 			{
					      	 				session_start();

                                         if (isset($_SESSION['login'])  && $_SESSION['type_user']=='agent'   )
									        
							         	 {


					      	 				$this->ctr_agent->afficher_suivi_etudiant();
					      	 			
					      	 		     }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->Redirect();	
					      	 			}


					      	 break;	

					      	 case 'SuiviEtudiantId':
					      	 			{

					      	 					session_start();

                                         if (isset($_SESSION['login'])  && $_SESSION['type_user']=='agent'   )
									        
							         	 {
							         	 	if(isset($_REQUEST['valid_id']))
							         	 	{
							         	 	$identifiant='O'.$_REQUEST['valid_id'];

					      	 				$this->ctr_agent->afficherSuiviEtudiantId($identifiant);  // FAIRE EN SORTE QUE LES CHAMPS SAFFICHENT DANS LA PAGE
					      	 			    }
					      	 			    else 
					      	 			    	$this->ctr_agent->afficher_suivi_etudiant();
					      	 			 }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->Redirect();
					      	 	    		
					      	 			}
					      	 	# code...
					      	 	break;


					      	 	 case 'SuiviEtudiantIdGuichetier':
					      	 			{

					      	 					session_start();

                                         if (isset($_SESSION['login'])  && $_SESSION['type_user']=='guichetier' )
									        
							         	 {
							         	 	if(isset($_REQUEST['valid_id']))
							         	 	{
							         	 	$identifiant='O'.$_REQUEST['valid_id'];

					      	 				$this->ctr_guichetier->afficherSuiviEtudiantId($identifiant);    // FAIRE EN SORTE QUE LES CHAMPS SAFFICHENT DANS LA PAGE
					      	 			    }
					      	 			    else 
					      	 			    	$this->ctr_guichetier->afficher_suivi_etudiant();
					      	 			 }
                                                    else
                                                   	// il y a aucun parametre,affichage de l'accueil
		           	                                $this->Redirect();
					      	 	    		
					      	 			}
					      	 	# code...
					      	 	break;


					      	 case 'SuiviEtudiant_guichetier':
					      	 			{
					      	 				session_start();
					      	 				if (isset($_SESSION['login']) && $_SESSION['type_user']=='guichetier')
					      	 				{
					      	 					$this->ctr_guichetier->afficher_suivi_etudiant();
					      	 				}
					      	 				else 
					      	 					$this->Redirect();

					      	 			}

					      	 	break;		
					      	  case 'indexe':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login'])  && $_SESSION['type_user']=='agent')
					      	 	{
					      	 		$this->ctr_agent->afficher_accueil_agent();


					      	 		// AUTRES OPERATIONS
					      	 	}

					      	 	else
					      	 	 $this->Redirect();	
					      	 }
					      	 break;

					      	 case 'indexe_guichetier':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login'])  && $_SESSION['type_user']=='guichetier')
					      	 	{
					      	 		$this->ctr_guichetier->afficher_accueil_guichetier();

					      	 	}

					      	 	else
					      	 	 $this->Redirect();	
					      	 }
					      	 break;


					      	  case 'EnregistrerMensualite':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login']) && $_SESSION['type_user']=='guichetier' )
					      	 	{
					      	 		$this->ctr_guichetier->afficher_vue_mensualite();

					      	 	}

					      	 	else
					      	 	 $this->Redirect();	
					      	 }
					      	 break;


					      	   case 'enregistrerMensualiteId':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login']) && $_SESSION['type_user']=='guichetier' )
					      	 	{
					      	 		if (isset($_REQUEST['valid_id']))
					      	 		$this->ctr_guichetier->afficher_vue_mensualite_id($_REQUEST['valid_id']);
					      	 	    else
					      	 	    
					      	 	    	$this->ctr_guichetier->afficher_vue_mensualite();



					      	 		// AUTRES OPERATIONS
					      	 	}

					      	 	else
					      	 	 $this->Redirect();	
					      	 }
					      	 break;


					      	    case 'recuMensualite':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login']) && $_SESSION['type_user']=='guichetier' )
					      	 	{
					      	 		
					      	 		$this->ctr_guichetier->afficherRecuMensualite($_REQUEST['check'],$_REQUEST['identifiant1'],$_SESSION['login']);
					      	 	    



					      	 		// AUTRES OPERATIONS
					      	 	}

					      	 	else
					      	 	 $this->Redirect();	
					      	 }
					      	 break;



					      	  case 'Codifier':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login'])  && $_SESSION['type_user']=='agent')
					      	 	{
					      	 		$this->ctr_agent->codifier();					      

					      	 	}

					      	 	else
					      	 	 $this->Redirect();	
					      	 }
					      	 break;


					      	  case 'EditerEtudiant':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login'])  && $_SESSION['type_user']=='agent')
					      	 	{
					      	 		$this->ctr_agent->editer_etudiant();

					      	 	}

					      	 	else
					      	 	 $this->Redirect();	
					      	 }
					      	 break;


					      	  case 'EditerEtudiantId':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login'])  && $_SESSION['type_user']=='agent' )
					      	 	{
					      	 		if (isset($_REQUEST['valid_id']))
					      	 		$this->ctr_agent->afficherEditEtudiantId('O'.$_REQUEST['valid_id']);
					      	 	    else
					      	 	    $this->ctr_agent->editer_etudiant();	

					      	 	}

					      	 	else
					      	 	 $this->Redirect();

					      	 }
					      	 break;


					      	 case 'codification':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login'])  && $_SESSION['type_user']=='agent')
					      	 	{
					      	 	
					      	 		$this->ctr_agent->codifier();
					      	 		$this->ctr_agent->ajouterEtudiant($_REQUEST['identifiant'],$_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['date_naissance'],$_REQUEST['lieu_naissance'],$_REQUEST['adresse'],$_REQUEST['nationnalite'],$_REQUEST['formation'],$_REQUEST['option'],$_REQUEST['chambre'],$_REQUEST['titulaire'],$_REQUEST['sexe']);
					      	 	}
					      	 	else
					      	 		$this->Redirect();

					      	 	
					      	 }
					      	 break;

					      	 case 'sauvegarderEtudiant':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login'])  && $_SESSION['type_user']=='agent')
					      	 	{
					      	 		$this->ctr_agent->editer_etudiant();

					      	 		if (isset($_REQUEST['check']))
					      	 		{
					      	 		
					      	 		$this->ctr_agent->mensualite($_REQUEST['check'],$_REQUEST['identifiant1']);
					      	 		$this->ctr_agent->sauvegarderEtudiant($_REQUEST['identifiant1'],$_REQUEST['identifiant'],$_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['date_naissance'],$_REQUEST['lieu_naissance'],$_REQUEST['adresse'],$_REQUEST['nationnalite'],$_REQUEST['formation'],$_REQUEST['option'],$_REQUEST['chambre'],$_REQUEST['titulaire'],$_REQUEST['sexe']);
					      	 		}
					      	 		else 
					      	 			$this->ctr_agent->initMois($_REQUEST['identifiant1']);
					      	 	}
					      	 	else
					      	 		$this->Redirect();
					      	 }
					      	 break;

					      	 case 'choixChambre':
					      	 {
					      	 	session_start();
					      	 	if (isset($_SESSION['login'])  && $_SESSION['type_user']=='agent')
					      	 	{
					      	 		$this->ctr_agent->choixChambre($_REQUEST['sexe']);
					      	 		
					      	 	}
					      	 	else
					      	 		$this->Redirect();
					      	 }
					      	 break;
					      }
					     

			      }
                   else  
		           	    { 
		           	    	session_start();
		           	    	$this->Redirect();
                        }		            
		           	     
                 

         }
         
      }

  ?>