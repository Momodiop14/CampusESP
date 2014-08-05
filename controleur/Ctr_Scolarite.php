<?php            require_once('modele/Departement.class.php');
                 require_once('modele/Opt.class.php');
                 require_once('modele/Formation.class.php');
				

				/**
				* 
				*/
				class Ctr_Scolarite
				{
					private $dept;
					private $opt;

						function __construct() 
						{
							$this->dept=new Departement();
							$this->opt=new Option();
							$this->form=new Formation();
						}
					

				    public function save_new_dept($name,$nb_option)
					  {
					  	$nbr=0;
					  	$nbr=$this->dept->CreateDept($name);
					  	if ($nbr!=0) 
					  	  {
					  	      $ajout=true;
					  	      require_once 'vue/validation_option.php';
					  	  }
					  	 else
					  	 {
					  	     $ajout=false;
					  	     require_once 'vue/new_departement.php';
					  	 }

					  }
                      
                      public function page_new_option()

	                     {
	                     	 $array_dept=Departement::getDepts();
	                      	require_once 'vue/new_option.php';
	                     }

					  public function save_new_opt($no_dept,$nom_opt,$dut,$ing)

					     {
					     	 $count=$this->opt->save_option($no_dept,$nom_opt);
					     	 
					     	 if ($dut!='NULL') 
					     	   {
					     	  	  $this->opt->save_opt_form($dut,$count);
					     	   } 
                             
					     	 if ($ing!='NEANT') 
					     	    $this->opt->save_opt_form($ing,$count);
					     	 
					             	    	
					     }  	


					   public function save_new_formation($formation)
					       {
      

                               $this->form->save_formation($formation);
                               $succes=true;

                               require_once 'vue/accueil_admin.php';

                           }    


				
				    public function page_new_dept()
				      {
					      require_once 'vue/new_departement.php';
				     }


				     public function new_formation()
				      { 

					      require_once 'vue/new_formation.php';
				     }
 

			    }

?>