<?php
/**
* 
*/

 class Option
	{
		
		function __construct()
		  {
			
		  }


		public function save_option($dept,$opt)

		  {  
			
		    $base=Base::getBDD();
		    $query=$base->prepare("insert into ooption (nom_Option,Num_dep) values (?,?)");
		    $query->execute(array($opt,intval($dept) ) );
           
             if ($query->rowCount()==1)
           
                  return $base->lastInsertId();

         }


       public function save_opt_form($formation,$no_opt)
          {
          	 $base=Base::getBDD();

             if ($formation=='DUT')
             	   $i=2;
             	 else
             	 	$i=3;
             
             for ($k=1; $k<=$i ; $k++) 
             { 
             	
		             $query=$base->prepare("insert into formation_option (No_Option,Ref_formation) values (?,?)");
		             $query->execute(array(intval($no_opt),$formation.$k)  );
             }
             

          	 
       
          }
	}




?>