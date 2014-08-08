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
 	 		$chambre,
            $titulaire,
            $sexe;

 	public function __construct()
 	{

 	}

 	public function hydrate($identifiant,$nom,$prenom,$date_naissance,$lieu_naissance,$adresse,$nationnalite,$formation,$option,$chambre,$titulaire,$sexe)
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
        $this->titulaire=$titulaire;
        $this->sexe=$sexe;
 	} 		

 	public function getEtudiant($identifiant) 
 	{   $bdd=Base::getBDD();
 		$req=$bdd->prepare('SELECT * from ETUDIANT WHERE identifiant= ?');
 		$req->execute(array($identifiant));
 		$ligne=$req->fetchall();
         
 		if (count($ligne)!=0)
 		{
 		     	$etd=$ligne[0];
 		     
                
                 $this->hydrate($identifiant,$etd['nom'],$etd['prenom'],$etd['date_naissance'],$etd['lieu_naissance'],$etd['adresse'],$etd['nationalite'],$etd['formation_etudiant'],$etd['ooption_etudiant'],$etd['chambre_habite'],$etd['titulaire'],$etd['sexe']);
 		        
                return 'oui';
 		} 
 		else return 'non';

 	}	

    public function getIdentifiant()
    {
        return $this->identifiant;
    }	

    public function getNom()
    {
       return $this->nom ;

    }

    public function getPrenom()
    {
       return $this->prenom;
    }

    public function getDateNaissance()
    {
        return $this->date_naissance;

    }

    public function getLieuNaissance()
    {
       return $this->lieu_naissance;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getFormation()
    {
       return $this->formation;
    }

    public function getNationnalite()
    {
        return $this->nationnalite;
    }

    public function getChambre()
    {
        return $this->chambre;
    }

    public function getOption()
    {
       return $this->option;

    }
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function saveNewEtudiant()
    {
        $bdd=Base::getBDD();
        
          
    	$req=$bdd->prepare("insert into etudiant (identifiant,nom,prenom,date_naissance,lieu_naissance,adresse,nationalite,ooption_etudiant,chambre_habite,formation_etudiant,titulaire,sexe_etudiant) values( ?,?,?,?,?,?,?,?,?,?,?,?)"); 
         
      
          
          
          $req->execute(array(utf8_encode($this->identifiant),$this->nom,$this->prenom,$this->date_naissance,$this->lieu_naissance,$this->adresse,$this->nationnalite,intval($this->option),intval($this->chambre),$this->formation,$this->titulaire,$this->sexe));
    					
      
      // CREATION DES LOYERS POUR L'ETUDIANT EN COURS POUR CHAQUE MOIS   

         $req2=$bdd->prepare('SELECT libelle_mois from mois ');
         $req2->execute();

         $rows=$req2->fetchall();

        if($req->rowCount()!=0)
        {    
         
         foreach ($rows as $row)
         {
           

       $req1=$bdd->prepare('INSERT INTO LOYER (id_etudiant,mois,paye) VALUES (?,?,?) ');
       $req1->execute(array('O'.$this->identifiant,$row['libelle_mois'],false));  


         }
        } 

          var_dump($req->rowCount());
         return $req->rowCount();
        

    }

    public function saveEtudiant($identifiant1)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('UPDATE ETUDIANT set identifiant= ?,nom=?,prenom=?, date_naissance= ?, lieu_naissance=?,
            adresse=?, nationalite=?, ooption_etudiant= ?, chambre_habite= ?, formation_etudiant= ?,titulaire= ?, sexe= ? where identifiant=?');

        $req->execute(array( 'O'.$this->identifiant,
                            $this->nom,
                            $this->prenom,
                            $this->date_naissance,
                            $this->lieu_naissance,
                            $this->adresse,
                            $this->nationnalite,
                            $this->option,
                            $this->chambre,
                            $this->formation,
                            $this->titulaire,
                            $this->sexe,
                            $identifiant1
                            ));
    }

    public function getOptions()
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('SELECT * from ooption');
        $req->execute();

        $rep=$req->fetchall();

        return $rep;

    }

    public function getOptionBase($id)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('SELECT * from ooption WHERE id_Option=? ');
        $req->execute(array($id));
        $rep=$req->fetchall();

        return $rep[0]; 
    }

    public function getFormations()
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('SELECT * from formations');
        $req->execute();

        $rep=$req->fetchall();
        return $rep;
    }


    public function getChambreBase($id)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('SELECT * from chambre WHERE enregistrement_chambre=? ');
        $req->execute(array($id));
        $rep=$req->fetchall();

        return $rep[0]; 
    }

    public function paiement()
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('SELECT mois,paye FROM loyer,mois WHERE mois=libelle_mois and id_etudiant=? order by num_mois;');
        $req->execute(array($this->identifiant));

        $rep=$req->fetchall();
        return $rep;
    }

    public function delete()
    {
        $bdd=Base::getBDD();
    	$req=$bdd->prepare('DELETE FROM ETUDIANT WHERE identifiant= :identifiant');
    	$req->execute(array('identifiant'=>$this->identifiant));
    }

    public function initialiseMois($identifiant1)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('UPDATE loyer set paye=false where id_etudiant=?');
        $req->execute(array($identifiant1));
    }

    public function paieMois($mois,$identifiant1)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('UPDATE loyer set paye=true WHERE id_etudiant=? AND mois=?');
        $req->execute(array($identifiant1,$mois));
    }

    public function creerRecu($tab_mois,$identifiant,$login)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('INSERT INTO recu (date_creation_recu , NoGuichetier) VALUES (now(),?) ');
        $req->execute(array( $login ));

        $req1=$bdd->prepare('SELECT max(No_recu) as id_recu from recu ');
        $req1->execute();
        $rep=$req1->fetchall();

        $rep1=$rep[0];
        

    
        
        foreach ($tab_mois as $mois)
        { 
            $req2=$bdd->prepare("UPDATE loyer set Num_recu=?, paye=true WHERE id_etudiant=? AND mois=? ");
            $req2->execute(array($rep1['id_recu'],'O'.$identifiant,$mois));
        }

         return $rep1['id_recu'];

    }

    public function getChambres($sexe)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare("SELECT Code_chambre,enregistrement_chambre,position_couloir,niveau_Etage,nom_pavillon from chambre ch,etage et, couloir co, pavillon pa 
                                              WHERE
                                    ch.Ref_Couloir=co.Code_Couloir
                                    and co.Ref_etage=et.Code_Etage
                                    and et.Ref_pavillon=pa.idPavillon
                                    and (co.genre_couloir='X' or co.genre_couloir=?) " );
        $req->execute(array($sexe));

        $rep=$req->fetchall();

        

        return $rep;
    }

    public function getOccupants($chambre)
    {
        $bdd=Base::getBDD();
        $req=$bdd->prepare('SELECT nom, prenom, formation_etudiant,nom_Option from etudiant,ooption,chambre where 
                 etudiant.ooption_etudiant=ooption.id_Option and chambre_habite=enregistrement_chambre and Code_chambre=? ');

        $req->execute(array($chambre));
        $rep=$req->fetchall();
       
        
        return $rep;
    }

}
