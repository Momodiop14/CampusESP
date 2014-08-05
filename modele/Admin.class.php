<?php
   require_once 'modele/User.class.php';
   require_once 'modele/Base.class.php';


  /**
  * 
  */
  class Admin extends User
  {
  	private $utilisateur;
  	
  	function __construct()
  	{
  		
  	}

  	public function AddUser($login,$pass,$prename,$name,$dateNaissance,$sexe,$table)

  	{
       $this->utilisateur=new User($login,$pass,$prename,$name,$dateNaissance,$sexe); //on instancie l'objet user
  	   $bdd=Base::getBDD();
       $req=$bdd->prepare("insert into ".$table." (Login_".$table.",Mot_pass_".$table.",prenom_".$table.",nom_".$table.",date_naissance_".$table.",sexe_".$table.") values (?,?,?,?,?,?)");
       $req->execute(array($this->utilisateur->login,sha1($this->utilisateur->password),$this->utilisateur->prenom,$this->utilisateur->nom,$this->utilisateur->date_naissance,$this->utilisateur->genre));

     
  	}
  }


?>