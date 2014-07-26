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
                
		 	}

		   public function affiche_Accueil_agent()
		   {
		   	      require_once 'vue/indexe.php';
		   }
		   public function afficherVueMensualite()
		   {
		   	# code...
		   }

		   public function codifier()
		   {
		   	 require_once 'vue/Codifier.php';
		   	 
		   }

		     public function EditEtudiant()
		      {

		      }
		 
		 public function ajouterEtudiant($identifiant,$nom,$prenom,$date_naissance,$lieu_naissance,$adresse,$nationnalite,$formation,$option,$chambre)
	       {								
		
				$this->etudiant->hydrate($identifiant,$nom,$prenom,$date_naissance,$lieu_naissance,$adresse,$nationnalite,$formation,$option,$chambre);

				$nb_lignes=$this->etudiant->saveNewEtudiant();
		        if ($nb_lignes!=0)
		        {
				echo '<script language="javascript">';
				echo 'alert("etudiant ajoute")';
				echo '</script>';
				}

           }
 }


?>