<?php
require_once 'modele/Etudiant.class.php';

class  Ctr_Codifier
{

	private $etudiant;

	public function __construct()
	{
   		$this->etudiant= new Etudiant();
	}

	public function afficherVue()
	{
		require 'vue/Codifier.php';
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