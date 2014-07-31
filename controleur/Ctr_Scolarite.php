<?php            require_once('modele/Departement.class.php');
                 #require_once('modele/Opt.class.php');
                 #require_once('modele/Formation.class.php');
				

				/**
				* 
				*/
				class Ctr_Scolarite
				{
					private $dept;

						function __construct() {
							$this->dept=new Departement();
						}
					

				    public function save_new_dept($name,$nb_option)
					  {
					  	$nbr=$this->dept->CreateDept($name);
					  	if ($nbr==1) 
					  	  {
					  	      $ajout=true;
					  	      require_once 'vue/new_option.php';
					  	  }
					  	 else
					  	 {
					  	    $ajout=false;
					  	     require_once 'vue/new_departement.php';
					  	 }

					  }  	    


				
				    public function page_new_dept()
				      {
					      require_once 'vue/new_departement.php';
				     }
 

			    }

?>