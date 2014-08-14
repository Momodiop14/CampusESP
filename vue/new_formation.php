<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width"  charset='utf-8'/>
     	       <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.js"></script>
             

             

    </head>
    <body>
  	<div class="container">
  	
  		<?php require_once('menu_admin.php'); 


      
             if (isset($message_error)) 
              
                        
               echo ' <div  class="alert alert-danger alert-dismissible" role="alert">
               <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <strong>'.$message_error.'</strong> </div>' ;



      ?>

      <section class='col-lg-12 col-lg-offset-3'>
           

           <div class=" panel panel-default">
            
             <div class="panel-heading">
              
                 <h3 class=" panel-title"><span class='col-xs-offset-4'> Ajout Formation </span></h3>
             
             </div>
             
             <div class="panel-body">
              
                   <form action='index.php?action=save_formation' method="POST" >
                    
                    <div class="row">

                           <div class="col-lg-offset-2 col-xs-8">
                           
                               <input class='form-control' name="nom_formation" placeholder='Nom Formation ex : DUT1' autocomplete='off' required>
                           
                           </div>    
                  
                   </div>

                                                       
  
                   <button id='valider' type="submit" class="btn btn-primary col-lg-offset-5 " > 
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