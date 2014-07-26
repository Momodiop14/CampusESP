<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width, initialscale=1.0" />
     	       <link href="../Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="../js/jquery.js"></script>
             <script src="../Bootstrap/js/bootstrap.js"></script>

             <script type="text/javascript">

             function validation () 
               {
                   if( document.getElementsByTagName('select')[0].value=='Choisir son departement')
                     {
                           alert('Selectionner une option');
                           return false;
                     } 
               }              
             </script>

    </head>
    <body>
  	<div class="container">
  	
  		<?php require_once('menu_admin.php'); ?>

      <section class='col-lg-12 col-lg-offset-3'>
           

           <div class=" panel panel-default">
            
             <div class="panel-heading">
              
                 <h3 class=" panel-title"><span class='col-xs-offset-4'> Ajout Option </span></h3>
             
             </div>
             
             <div class="panel-body">
              
                   <form id="form_opt" method="POST" onsubmit='validation()'>
                    
                    <div class="row">

                           <div class="col-xs-10">
                               <input class='form-control ' autocomplete='off' id="nom_opt" placeholder='Nom Option' required>
                           </div>    
                  
                   </div>

                   
                      <div class="row">

                           <div class="col-xs-10">
                               <select id='choix' required class='form-control'>
                                      <option >Choisir son departement</option>

                               </select>
                           </div>    
                  
                   </div> 

                                    
  
                   <button id='valider' type='validation()' class="btn btn-primary col-lg-offset-4 " > 
                    <span class='glyphicon glyphicon-thumbs-up'></span> valider
                  </button>

                   </form>
  
                   
                 
             </div>

               
                 
           </div>

       </section>


  		</div>



  </body>

</html>