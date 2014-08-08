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
            
              $req=Base::getBDD()->prepare('insert into chambre (Code_chambre,Ref_couloir) values (?,?)');
              $req->execute(array($this->code_chambre,$this->ref_couloir)); 
       }


     public static function getChambre($pavillon) //methode retournant les chambres d'un pavillon
         {
               
              
              $req=Base::getBDD()->prepare('select enregistrement_chambre,Code_chambre,Ref_Couloir from chambre,couloir,etage where Ref_Couloir=Code_Couloir and Ref_Etage=Code_Etage and Ref_Pavillon=:pav');
              $req->execute(array(':pav'=>$pavillon)); 
              $ligne=$req->fetchAll();
              return $ligne;
         }

      public static function setChambre($id,$chamb) //methode retournant les chambres d'un pavillon
         {
                 
              
              $count=Base::getBDD()->exec("update chambre set Code_chambre='".$chamb."' where enregistrement_chambre=".$id);
             
                           
         }

      public static function setCouloir($id,$chamb) //methode retournant les chambres d'un pavillon
         {
                 
              
              $query=Base::getBDD()->exec("update chambre set Code_chambre='".$chamb."' where enregistrement_chambre=".$id);
              #$query->execute(array($chamb,$id));
              #$count=$query->rowCount(); 
              return $count;
              
         }

     public static function delChambre($id) //methode supprimant une chambre 
         {
             
            
              $req=Base::getBDD()->prepare('delete from chambre where enregistrement_chambre=:cod');
              $req->execute(array('cod'=>$id)); 
              $ligne=$req->rowCount();
              
              
         }

  }

?>