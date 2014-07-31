<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width, initialscale=1.0" />
     	     <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.js"></script>
                         
             
           </head>




  <body>
  	<div class="container">
      <?php require_once('menu_admin.php'); ?>
  	
      <section class='col-lg-12 col-lg-offset-3'>
           

           <div class=" panel panel-default">
            
             <div class="panel-heading">
              
                 <h3 class=" panel-title"><span class='col-xs-offset-4'> Parametrage Reservation </span></h3>
             
             </div>
             
             <div class="panel-body">
              
                   <form id="form_dep" action='index.php?action=save_parametre' method="POST">
                    
                    <div class="row">

                           <div class="col-xs-6">
                               <label  class="col-xs-offset-2" for='begin_date'>Date de debut</label>
                               <input id='begin_date' class='form-control ' type='date' name="date_begin"  required>
                            </div>  
                           <div class="col-xs-6">
                                 <label  class="col-xs-offset-2" for='begin_time'>heure de debut</label>
                                 <input class='form-control ' id='begin_time' type='time' name="heure_begin" placeholder='heure de debut' required>
                           </div>
                           
                    
                                            
                   </div> 

                    <div class="row">

                           <div class="col-xs-6">
                                <label  class="col-xs-offset-2" for='end_date'>Date de fin</label>
                               <input class='form-control ' id='end_date' type='date' name="date_fin" placeholder='Date de debut' required>
                               
                           </div>
                               
                           <div class="col-xs-6">
                               <label  class="col-xs-offset-2" for='end_time'>Heure de fin</label>  
                               <input class='form-control ' id='end_time' type='time' name="heure_fin" placeholder='heure de fin debut' required>
                           </div>
                    
                                            
                   </div>

                                    
  
                   <button id="valider" type="submit" class="btn btn-primary col-lg-offset-4 " > 
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