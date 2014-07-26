<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width, initialscale=1.0" />
     	     <link href="../Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="../js/jquery.js"></script>
             <script src="../Bootstrap/js/bootstrap.js"></script>
             <script src="../js/new_departement.js"></script>
            
             
           </head>

  <body>
  	<div class="container">
  	
  		<?php require_once('menu_admin.php'); ?>

      <section class='col-lg-12 col-lg-offset-3'>
           

           <div class=" panel panel-default">
            
             <div class="panel-heading">
              
                 <h3 class=" panel-title"><span class='col-xs-offset-4'> Ajout Departement </span></h3>
             
             </div>
             
             <div class="panel-body">
              
                   <form id="form_dep" action='' method="POST">
                    
                    <div class="row">

                           <div class="col-xs-10">
                               <input class='form-control ' id="nom_dept" placeholder='Nom Departement' required>
                           </div>
                    
                           <div>
                            
                             <a ><span id="valideNumber" title="Ajouter option" class="col-sm-pull-1 glyphicon glyphicon-plus "</span>  </a> 
                            </div>
                  
                   </div> 

                                    
  
                   <button id='valider' type="submit" class="btn btn-primary col-lg-offset-4 " > 
                    <span class='glyphicon glyphicon-thumbs-up'></span> valider
                  </button>

                   </form>
  
                   
                 
             </div>

               
                 
           </div>

       </section>


  		</div>



  	</div>


  </body>

</html>