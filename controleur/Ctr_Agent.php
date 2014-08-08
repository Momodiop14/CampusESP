<?php
require_once 'modele/Etudiant.class.php';


 /**
 * 
 */
 class Ctr_Agent
 {
 	
 	        private $etudiant;
		 
		 	function __construct()
		 	{
		 		$this->etudiant=new Etudiant() ;
		 	}


		 	public function afficher_suivi_etudiant()
		 	{
                require_once 'vue/SuiviEtudiant.php';
		 	}
		 	public function afficherSuiviEtudiantId($identifiant)
		 	{   
		 		$var=$this->etudiant->getEtudiant($identifiant);

		 		if ($var=='oui')
		 		{

		 		  $identifiant=substr($this->etudiant->getIdentifiant(),1);	
		 		  $nom=$this->etudiant->getNom();
		 		  $prenom=$this->etudiant->getPrenom();
		 		  $date=$this->etudiant->getDateNaissance();
		 		  $lieu=$this->etudiant->getLieuNaissance();
		 		  $adresse=$this->etudiant->getAdresse();
		 		  $formation=$this->etudiant->getFormation();
		 		  $nationnalite=$this->etudiant->getNationnalite();
		 		  $option1=$this->etudiant->getOption();
		 		  $option2=$this->etudiant->getOptionBase($option1);
		 		  $option=$option2['nom_Option'];
		 		  $chambre1=$this->etudiant->getChambre();
		 		  $chambre2=$this->etudiant->getChambreBase($chambre1);
		 		  $chambre=$chambre2['Code_chambre'];
		 		  $tab_paiement=$this->etudiant->paiement();
		 		  $titulaire=$this->etudiant->getTitulaire();
		 		  $sexe=$this->etudiant->getSexe();
		 		
		 		  require_once 'vue/SuiviEtudiantId.php';
		 		
		 	    }
		 	    else
		 	    {
		 	    	require_once 'vue/SuiviEtudiant.php';

		 	    echo '<script language="javascript">';
		 		echo 'alert("identifiant: invalide");';
		 		echo '</script>';	
		 	    }
		 	}


		 	


		 	public function afficherEditEtudiantId($identifiant)
		 	{   
		 		$var=$this->etudiant->getEtudiant($identifiant);

		 		if ($var=='oui')
		 		{

		 		  $options=$this->etudiant->getOptions();
		          $formations=$this->etudiant->getFormations();

		          $identifiant=substr($this->etudiant->getIdentifiant(),1);
		 		  $nom=$this->etudiant->getNom();
		 		  $prenom=$this->etudiant->getPrenom();
		 		  $date=$this->etudiant->getDateNaissance();
		 		  $lieu=$this->etudiant->getLieuNaissance();
		 		  $adresse=$this->etudiant->getAdresse();
		 		  $formation=$this->etudiant->getFormation();
		 		  $nationnalite=$this->etudiant->getNationnalite();
		 		  $option1=$this->etudiant->getOption();
		 		  $option2=$this->etudiant->getOptionBase($option1);
		 		  $option=$option2['nom_Option'];
		 		  $chambre1=$this->etudiant->getChambre();
		 		  $chambre2=$this->etudiant->getChambreBase($chambre1);
		 		  $chambre=$chambre2['Code_chambre'];
		 		  $tab_paiement=$this->etudiant->paiement();
		 		  $sexe=$this->etudiant->getSexe();
		 		  $titulaire=$this->etudiant->getTitulaire();

		 		  require_once 'vue/EditerEtudiantId.php';
		 		
		 	    }
		 	    else
		 	    {
		 	    	require_once 'vue/EditerEtudiant.php';

		 	    echo '<script language="javascript">';
		 		echo 'alert("identifiant invalide");';
		 		echo '</script>';	
		 	    }
		 	}

		   public function afficher_accueil_agent()
		   {
		   	      require_once 'vue/indexe.php';
		   }

		   public function affiche_vue_mensualite()
		   {
		   	 require_once 'EnregistrerMensualite.php';
		   }

		   public function codifier()
		   {

		   	 $options=$this->etudiant->getOptions();
		   	 $formations=$this->etudiant->getFormations();
		   	 require_once 'vue/Codifier.php';
		   	 
		   }

		     public function editer_etudiant()
		      {
		      	require_once 'vue/EditerEtudiant.php';
		      }
		 
		 public function ajouterEtudiant($identifiant,$nom,$prenom,$date_naissance,$lieu_naissance,$adresse,$nationnalite,$formation,$option,$chambre,$titulaire,$sexe)
	       {								
		
				$this->etudiant->hydrate($identifiant,$nom,$prenom,$date_naissance,$lieu_naissance,$adresse,$nationnalite,$formation,$option,$chambre,$titulaire,$sexe);

				$nb_lignes=$this->etudiant->saveNewEtudiant();
		        if ($nb_lignes!=0)
		        {
				echo '<script language="javascript">';
				echo 'alert("etudiant ajoute")';
				echo '</script>';
			    }


           }


           public function sauvegarderEtudiant($identifiant1,$identifiant,$nom,$prenom,$date_naissance,$lieu_naissance,$adresse,$nationnalite,$formation,$option,$chambre,$titulaire,$sexe)
			{
				$this->etudiant->hydrate($identifiant,$nom,$prenom,$date_naissance,$lieu_naissance,$adresse,$nationnalite,$formation,$option,$chambre,$titulaire,$sexe);
				$this->etudiant->saveEtudiant('O'.$identifiant1);
				

					
			}

			public function mensualite($checks,$identifiant1)
			{
				$this->etudiant->initialiseMois('O'.$identifiant1);
					foreach ($checks as $mois)
					{
						$this->etudiant->paieMois($mois,'O'.$identifiant1);
					}
			}

			public function initMois($identifiant)
			{
				$this->etudiant->initialiseMois('O'.$identifiant);
			}


			public function choixChambre($sexe)
			{
				
				$chambres=$this->etudiant->getChambres($sexe);
			
				foreach ($chambres as $chambree) 
				{
					$chambre[]=$chambree;
					$occupants[]=$this->etudiant->getOccupants($chambree['Code_chambre']);
					
				}
				
				
				require_once 'vue/choixChambre.php';
			}

         
         
         	  
 }


?>