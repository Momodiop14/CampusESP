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

  	public function AddUser($login,$pass,$prename,$name,$sexe,$table)

  	{
       $this->utilisateur=new User($login,$pass,$prename,$name,$sexe); //on instancie l'objet user
  	   $bdd=Base::getBDD();
       $req=$bdd->prepare("insert into ".$table." (Login_".$table.",Mot_pass_".$table.",prenom_".$table.",nom_".$table.",sexe_".$table.") values (?,?,?,?,?)");
       $req->execute(array(htmlspecialchars($this->utilisateur->login),sha1($this->utilisateur->password),htmlspecialchars($this->utilisateur->prenom),htmlspecialchars($this->utilisateur->nom),$this->utilisateur->genre));

     
  	}

    public static function getUsers($table)
    {
         $bdd=Base::getBDD();
         
         $req=$bdd->prepare("select * from ".$table);
         $req->execute();
         $rows=$req->fetchAll();
         if (count($rows)>0) 
           {
              #var_dump($rows);
              return $rows;

           }
                        
     }
    
     public static function setUser($table)
       {
         $bdd=Base::getBDD();
         
         $req=$bdd->prepare("select * from ".$table);
         $req->execute();
         $rows=$req->fetchAll();
         if (count($rows)>0) 
           {
              #var_dump($rows);
              return $rows;

           }
                        
       }
        public static function delUser($table)
       {
         $bdd=Base::getBDD();
         
         $req=$bdd->prepare("select * from ".$table);
         $req->execute();
         $rows=$req->fetchAll();
         if (count($rows)>0) 
           {
              #var_dump($rows);
              return $rows;

           }
                        
       }


  }


?>