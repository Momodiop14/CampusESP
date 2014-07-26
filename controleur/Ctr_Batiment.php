<?php
				require_once('modele/Pavillon.class.php');
				require_once('modele/Etage.class.php');
				require_once('modele/Couloir.class.php');
				require_once('modele/Chambre.class.php');

				/**
				* 
				*/
				class Ctr_Batiment
				{
					private $pavillon;
					private $etage;
					private $couloir ;
					private $chambre;
					
					
					public function add_pavillon ($nom_pav,$nb_etage,$nb_chambre_par_etage,$level)
					  {
						   $this->pavillon=new Pavillon($nom_pav,$level);
						   $this->pavillon->CreatePavillon();
						   $symbole_pav=explode(' ', $nom_pav);
						   
						   $no_chambre=1;
						   
						   if ( (intval($nb_chambre_par_etage) %2) !=0) 
                                  $nb_chambre_par_etage=intval($nb_chambre_par_etage)+1;

						   	 for ($i=0; $i<intval($nb_etage) ; $i++) //boucle pour invoque la methode de creation d'etage
						   {     

						   	     $this->etage=new Etage($symbole_pav[1].$i,$nom_pav,$i);//on cree l'objet etage
						   	     $this->etage->createEtage();//on invoque la methode d'insertion a la base donnee

						   	     for ($j=0; $j<2 ; $j++) //boucle parcourant la creation de couloir
						   	     { 
						   	     	 if ($j==0) 

						   	     	  $this->couloir=new Couloir($symbole_pav[1].$i."-DR","Droite",$symbole_pav[1].$i,"");//couloir droite
						   	     	  else
						   	     	  	$this->couloir=new Couloir($symbole_pav[1].$i."-GC","Gauche",$symbole_pav[1].$i,"");//couloir gauche

						   	     	  $this->couloir->createCouloir();

						   	     	  for ($k=0; $k<($nb_chambre_par_etage/2); $k++) //creer les chambres du couloir
						   	     	  { 
						   	     	  	   $this->chambre=new Chambre($no_chambre.$symbole_pav[1],$this->couloir->getId());
						   	     	  	   $this->chambre->createChambre();
						   	     	  	   $no_chambre++;
						   	     	  }

						   	     	 
						   	     }

						   	         
						   }

						             $liste_chambre=Chambre::getChambre($nom_pav);
						   	     	 require_once 'vue/liste_chambre_pavillon.php';


					  }

					  public function delete_chambre($id)
					  {
					  	  $recup_id=explode("_", $id);
					  	  Chambre::delChambre(intval($recup_id[1]));
					  }

					   public function set_chambre($id,$chambre,$couloir)
					  {
					  	  $recup_id=explode("_", $id);
					  	  $ligne=Chambre::delChambre(intval($recup_id[1]),$chambre,$couloir);
					  	  if ($ligne==1) 
					  	      {
					  	         echo "<script text='javascript'>";
					  	         echo "alert('Modification effectuee avec succes')";
					  	         echo "</script>";
					  	      }
					  	      else
					  	      	{
					  	         echo "<script text='javascript'>";
					  	         echo "alert('Modification echouee')";
					  	         echo "</script>";
					  	      }
					  }
					  	    


					  





				    public function page_new_pavillon()
				      {
					      require_once 'vue/ajout_pavillon.php';
				     }
 

			    }

?>