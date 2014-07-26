<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width, initialscale=1.0" />
     	       <link href="../Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="../js/jquery.js"></script>
             <script src="../Bootstrap/js/bootstrap.js"></script>

             

    </head>
    <body>
  	<div class="container">
  	
  		<?php require_once('menu_admin.php'); ?>

      <section class='col-lg-12 col-lg-offset-3'>
           

           <div class=" panel panel-default">
            
             <div class="panel-heading">
              
                 <h3 class=" panel-title"><span class='col-xs-offset-4'> Ajout Formation </span></h3>
             
             </div>
             
             <div class="panel-body">
              
                   <form id="formation" method="POST" onsubmit='validation_formation()'>
                    
                    <div class="row">

                           <div class="col-xs-10">
                               <input class='form-control' id="nom_dept" placeholder='Nom Formation' required>
                           </div>    
                  
                   </div>

                   <div class='row'>
                            
                             <h3 class='col-xs-offset-2'>Options Disponibles</h3>
                                                                                     
                     </div> 


                      <div class="row">

                           <div class="col-xs-3 col-xs-offset-3">
                               <label for='nom_opt' >Telecom</label>
                           </div> 

                           <div class="col-xs-offset-1">
                               <input type='checkbox' id="nom_opt" placeholder='Nom Formation' required>
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



  </body>

</html>