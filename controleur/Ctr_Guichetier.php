<?php
require_once 'modele/Etudiant.class.php';


 /**
 * 
 */
 class Ctr_Guichetier
 {
 	
 	        private $etudiant;
		 
		 	function __construct()
		 	{
		 		$this->etudiant=new Etudiant() ;
		 	}

		 	public function afficher_accueil_guichetier()
		 	{
		 		require_once 'vue/guichetier.php';
		 	}

		 	 public function afficher_vue_mensualite()
		   {
		   	 require_once 'vue/EnregistrerMensualite.php';
		   }

		   	public function afficher_suivi_etudiant()
		 	{
                require_once 'vue/SuiviEtudiant_guichetier.php';
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


		 		
		 		  require_once 'vue/SuiviEtudiantGuichetier.php';
		 		
		 	    }
		 	    else
		 	    {
		 	    	require_once 'vue/SuiviEtudiant_guichetier.php';

		 	    echo '<script language="javascript">';
		 		echo 'alert("identifiant: invalide");';
		 		echo '</script>';	
		 	    }
		 	}

		 	public function afficher_vue_mensualite_id($identifiant)
		 	{
		 		$var=$this->etudiant->getEtudiant('O'.$identifiant);

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


		 		
		 		  require_once 'vue/EnregistrerMensualiteId.php';
		 		
		 	    }
		 	    else
		 	    {
		 	    	require_once 'vue/EnregistrerMensualite.php';

		 	    echo '<script language="javascript">';
		 		echo 'alert("identifiant: invalide");';
		 		echo '</script>';	
		 	    }
		 	}

		 	public function afficherRecuMensualite($tab_mois,$identifiant,$login)
		 	{
		 		$num_recu=$this->etudiant->creerRecu($tab_mois,$identifiant,$login);

		 		
		 		$var=$this->etudiant->getEtudiant('O'.$identifiant);

		 		if ($var=='oui')
		 		{
		 		  $identifiant=substr($this->etudiant->getIdentifiant(),1);	
		 		  $nom=$this->etudiant->getNom();
		 		  $prenom=$this->etudiant->getPrenom();
		 		  $date=$this->etudiant->getDateNaissance();

		 		  $formation=$this->etudiant->getFormation();
		 		  
		 		  $tab_paiement=$this->etudiant->paiement();

		 		require_once 'vue/recuMensualite.php';
                }
		 	}

 }		   