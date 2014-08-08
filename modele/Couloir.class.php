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
               $req=Base::getBDD()->prepare("update couloir set genre_couloir=? where Code_Couloir=?");
               $req->execute(array($val_genre,$code_couloir));

               
            }
  }


?>
