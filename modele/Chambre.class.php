<?php
  /**
  * 
  */
  class Chambre 
  {
  	   private $code_chambre;
  	   private $ref_couloir;
  	
  	  function __construct($id_chambre,$no_couloir)
  	     {
  		     $this->code_chambre=$id_chambre;
  		     $this->ref_couloir=$no_couloir;
  	     }


  	   public function createChambre()
  	     {
  		        $base=Base::getBDD();
  	    			$req=$base->prepare('insert into chambre (Code_chambre,Ref_couloir) values (?,?)');
		      		$req->execute(array($this->code_chambre,$this->ref_couloir)); 
	     }


	   public static function getChambre($pavillon) //methode retournant les chambres d'un pavillon
	       {
	             
  		        $base=Base::getBDD();
			       	$req=$base->prepare('select enregistrement_chambre,Code_chambre,Ref_Couloir from chambre,couloir,etage where Ref_Couloir=Code_Couloir and Ref_Etage=Code_Etage and Ref_Pavillon=:pav');
			       	$req->execute(array(':pav'=>$pavillon)); 
			      	$ligne=$req->fetchAll();
			      	return $ligne;
	       }

      public static function setChambre($id,$chamb,$couloir) //methode retournant les chambres d'un pavillon
         {
               
              $base=Base::getBDD();
              $req=$base->prepare('update chambre set Code_chambre=:chamb and Ref_Couloir=:coul chambre where enregistrement_chambre=:cod');
              $req->execute(array('chamb'=>$chamb,'coul'=>$coul,'cod'=>$id)); 
              return $req->rowCount();
              
         }

     public static function delChambre($id) //methode supprimant une chambre 
         {
                var_dump($id);
              $base=Base::getBDD();
              $req=$base->prepare('delete from chambre where enregistrement_chambre=:cod');
              $req->execute(array('cod'=>$id)); 
              $ligne=$req->rowCount();
              var_dump($ligne);
              
         }

  }

?>