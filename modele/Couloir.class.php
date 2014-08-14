<?php


  /**
  * 
  */
  class Couloir 
    {
       private $id_couloir;
       private $position_couloir;
       private $genre_couloir;
       private $ref_etage;
       

    
         function __construct($code_couloir,$position,$id_etage,$genre)
          {
              $this->id_couloir=$code_couloir;  
              $this->position_couloir=$position;
              $this->ref_etage=$id_etage;
              $this->genre_couloir=$genre;
            

          }

          public function getId()
          {
              return $this->id_couloir;
          }

          public function createCouloir()
          {
               
               $req=Base::getBDD()->prepare('insert into couloir (Code_Couloir,position_couloir,Ref_Etage,genre_couloir) values (?,?,?,?)');
               $req->execute(array($this->id_couloir,$this->position_couloir,$this->ref_etage,$this->genre_couloir));

            
          }

          public static function setCouloir($code_couloir,$val_genre)

            {

               $count=Base::getBDD()->exec("update couloir set genre_couloir='".$val_genre."' where Code_Couloir='".$code_couloir."'");
              
               if($count>0)
                   echo "OK";

               
            }


             public static function getCouloir($idpav)
                 {

                      $req=Base::getBDD()->prepare(' SELECT Code_Couloir, position_couloir,Ref_Etage 

                        FROM couloir, etage WHERE Ref_Etage = Code_Etage AND Ref_Pavillon=:pav');

                        $req->execute(array(':pav'=>$idpav)); 
                        $lignes=$req->fetchAll();
                      
                        return $lignes;
                
                 }

  }


?>
