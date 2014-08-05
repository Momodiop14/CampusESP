<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width, initialscale=1.0" />
     	     <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.js"></script>
                         
             
           </head>




  <body>
  	<div class="container">
  	
  		<?php require_once('menu_admin.php'); 


         if (isset($ajout) &&($ajout==false)) 
         {
           echo '<div class="alert alert-warning alert-dismissible" role="alert">
           <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>Ajout non reussie!</strong>Il se peut que le departement ait deja ete ajoute
           </div>';
         }

         else
         {


         }
?>

      <section class='col-lg-12 col-lg-offset-3'>
           

           <div class=" panel panel-default">
            
             <div class="panel-heading">
              
                 <h3 class=" panel-title"><span class='col-xs-offset-4'> Ajout Departement </span></h3>
             
             </div>
             
             <div class="panel-body">
              
                   <form id="form_dep" action='index.php?action=save_dept' method="POST">
                    
                    <div class="row">

                           <div class="col-xs-12">
                               <input class='form-control ' name="nom_dept" placeholder='Nom Departement' required>
                           </div>
                           <div class="col-xs-12">
                               <input class='form-control 'type='number' min='1' max='8' name="nb_option" placeholder="Nombre d'option du departement" required>
                           </div>
                    
                                            
                   </div> 

                                    
  
                   <button id="valider" type="submit" class="btn btn-primary col-lg-offset-4 " > 
                    <span class='glyphicon glyphicon-thumbs-up'></span> valider
                  </button>

                   </form>
  
                   
                 
             </div>

               
                 
           </div>

       </section>

         <?php require_once 'footer.php';?>
  		</div>



  


  </body>

</html>