<?php

class Etudiant
{
	private $identifiant,
			$nom,
 	 		$prenom,
 	 		$date_naissance,
 	 		$lieu_naissance,
 	 		$adresse,
 	 		$nationnalite,
 	 		$formation,
 	 		$option,
 	 		$chambre;

 	public function __construct()
 	{

 	}

 	public function hydrate($identifiant,$nom,$prenom,$date_naissance,$lieu_naissance,$adresse,$nationnalite,$formation,$option,$chambre)
 	{
        $this->identifiant=$identifiant;
 		$this->nom=$nom;
 		$this->prenom=$prenom;
 		$this->date_naissance=$date_naissance;
 		$this->lieu_naissance=$lieu_naissance;
 		$this->adresse=$adresse;
 		$this->nationnalite=$nationnalite;
 		$this->formation=$formation;
 		$this->option=$option;
        $this->chambre=$chambre;
 	} 		

 	public static function getEtudiant($identifiant) 
 	{   $bdd=Base::getBDD();
 		$req=$bdd->prepare('SELECT * from ETUDIANT WHERE identifiant= :id');
 		$req->execute(array('id'=>$identifiant));
 		$ligne=$req->fetchall();
         
 		if (count($ligne==1))
 		{
 			$etd=$ligne[0];
 			$etudiant= new Etudiant();
            
            $etudiant->hydrate($identifiant,$etd['nom'],$etd['prenom'],$etd['date_naissance'],$etd['lieu_naissance'],$etd['adresse'],$etd['nationnalite'],$etd['formation'],$etd['option'],$etd['chambre']);
 		
            return $etudiant;
 		} 
 		else return false;

 	}		

    public function setNom($identifiant,$nom)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('UPDATE from etudiant set nom= :nom WHERE identifiant= :id');
        $req->execute(array('nom'=>$nom,
                            'id'=>$identifiant));

    }

    public function setPrenom($identifiant,$prenom)
    {
        $bdd=Base::getBDD();
    	$req=$bdd->prepare('UPDATE from etudiant set prenom= :prenom WHERE identifiant= :id');
        $req->execute(array('pren=nom'=>$prenom,
                            'id'=>$identifiant));

    }

    public function setDateNaissance($identifiant,$date_naissance)
    {
        $bdd=Base::getBDD();
    	$req=$bdd->prepare('UPDATE from etudiant set date_naissance= :date_naissance WHERE identifiant= :id');
        $req->execute(array('date_naissance'=>$date_naissance,
                            'id'=>$identifiant));

    }

    public function setLieuNaissance($identifiant,$lieu_naissance)
    {
        $bdd=Base::getBDD();
    	$req=$bdd->prepare('UPDATE from etudiant set nom= :lieu_naissance WHERE identifiant= :id');
        $req->execute(array('nom'=>$lieu_naissance,
                            'id'=>$identifiant));

    }

    public function setAdresse($identifiant,$adresse)
    {
        $bdd=Base::getBDD();
    	$req=$bdd->prepare('UPDATE from etudiant set adresse= :adresse WHERE identifiant= :id');
        $req->execute(array('adresse'=>$adresse,
                            'id'=>$identifiant));

    }

    public function setFormation($identifiant,$formation)
    {
        $bdd=Base::getBDD();
    	$req=$bdd->prepare('UPDATE from etudiant set formation= :formation WHERE identifiant= :id');
        $req->execute(array('formation'=>$formation,
                            'id'=>$identifiant));

    }

    public function setNationnalite($identifiant,$nationnalite)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('UPDATE from etudiant set nationnalite= :nationnalite WHERE identifiant= :id');
        $req->execute(array('nationnalite'=>$nationnalite,
                            'id'=>$identifiant));

    }

    public function setChambre($identifiant,$chambre)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('UPDATE from etudiant set chambre= :chambre WHERE identifiant= :id');
        $req->execute(array('nom'=>$chambre,
                            'id'=>$identifiant));

    }

    public function setOption($identifiant,$option)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('UPDATE from etudiant set ooption= :option WHERE identifiant= :id');
        $req->execute(array('option'=>$option,
                            'id'=>$identifiant));

    }
    public function recherche($tableau)
       {

      }

    public function saveNewEtudiant()
    {
        $bdd=Base::getBDD();
        
          
    	$req=$bdd->prepare("insert into etudiant (identifiant,nom,prenom,date_naissance,lieu_naissance,adresse,nationalite,ooption_etudiant,chambre_habite,formation_etudiant) values( ?,?,?,?,?,?,?,?,?,?)"); 
         
        #echo 'INSERT INTO ETUDIANT (identifiant,nom,prenom,date_naissance,lieu_naissance,adresse,nationalite,
        #ooption_etudiant,chambre_habite,formation_etudiant)  
        #VALUES( "'.$this->identifiant.'","'.$this->nom.'","
         #                   '.$this->prenom.'","'.$this->date_naissance.'","'.$this->lieu_naissance.'","'.$this->adresse.'","'.$this->nationnalite.'","'.$this->option.'","'.$this->chambre.'","'.$this->formation.'"); ';
           #var_dump($this->identifiant);
          
          
          
          $req->execute(array('"'.$this->identifiant.'"',$this->nom,$this->prenom,$this->date_naissance,$this->lieu_naissance,$this->adresse,$this->nationnalite,intval($this->option),intval($this->chambre),$this->formation));
    					

        /* $req=$bdd->prepare('select * from etudiant');
                
          $req->execute(); 

         $row=$req->fetchall();
         var_dump($row);*/
         
         

        

    }

    public function saveEtudiant()
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('UPDATE ETUDIANT set identifiant= :identifiant,nom=:nom,prenom=:prenom, date_naissance= :date_naissance, lieu_naissance=:lieu_naissance
            adresse=:adresse, nationnalite=:nationnalite, ooption_etudiant= :option, chambre_habite= :chambre formation_etudiant= :formation where identifiant=:identifiant');

        $req->execute(array('identifiant'=> $etudiant->identifiant,
                            'nom'=>$this->nom,
                            'prenom'=>$this->prenom,
                            'date_naissance'=>$this->date_naissance,
                            'lieu_naissance'=>$this->lieu_naissance,
                            'adresse'=>$this->adresse,
                            'nationnalite'=>$this->nationnalite,
                            'option'=>$this->option,
                            'chambre'=>$this->chambre,
                            'formation'=>$this->formation));
    }

    public function __destruct()
    {
        $bdd=Base::getBDD();
    	$req=$bdd->prepare('DELETE FROM ETUDIANT WHERE identifiant= :identifiant');
    	$req->execute(array('identifiant'=>$this->identifiant));
    }
}


// RECHERHER ETUDIANT PAR NOM PRENOM

// UNE FONCTION SET GENERALE

