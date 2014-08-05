<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width, initialscale=1.0" />
      	     <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.js"></script>
               
             
           </head>

           <style type="text/css">
              select{margin-top: 8px;margin-bottom: 5px;}

           </style>

  <body>
  	<div class="container">
  	
  		<?php require_once('menu_admin.php'); ?>

      <section class='col-lg-12 col-lg-offset-3'>
           

           <div class=" panel panel-default">
            
             <div class="panel-heading">
              
                 <h3 class=" panel-title"><span class='col-xs-offset-4'> Ajout Utilisateur </span></h3>
             
             </div>
             
             <div class="panel-body">
              
                   <form id="form_dep" action='index.php?action=save_user' method="POST">
                    
                    <div class="row">

                           <div class="col-xs-10 col-xs-offset-1  ">
                               <input class='form-control ' name="username" placeholder='Pseudonyme' required>
                           </div>
                                         
                   </div> 

                   <div class="row">

                           <div class="col-xs-10 col-xs-offset-1  ">
                               <input class='form-control ' type='password' name="pwd" placeholder='Mot de passe' required>
                           </div>
                                         
                   </div>

                    <div class="row">

                           <div class="col-xs-10 col-xs-offset-1  ">
                               <input class='form-control '  name="prenom" placeholder="Prenom de l'utilisateur" required>
                           </div>
                                         
                   </div>

                    <div class="row">

                           <div class="col-xs-10 col-xs-offset-1  ">
                               <input class='form-control '  name="nom" placeholder="Nom de l'utilisateur" required>
                           </div>
                                         
                   </div>

                   <div class="row">

                           <div class="col-xs-10 col-xs-offset-1  ">
                               <input class='form-control ' type='date' name="date_naissance" placeholder="Date de naissance" required>
                           </div>
                                         
                   </div>

                   <div class="row">

                           <div class="col-xs-10  col-xs-offset-1  ">
                               <label class='col-xs-offset-2' for='genre'>Choix du genre</label>
                               <select class='form-control' id='genre' name='genre'>
                                  <option value='H'>Homme </option>
                                  <option value='F'>Femme</option>


                               </select>
                           </div>
                                         
                   </div>

                    <div class="row">

                           <div class="col-xs-10  col-xs-offset-1">
                               <label class='col-xs-offset-2' for='choix_user'>Choix du type d'utilisateur</label>
                               <select id='choix_user' class='form-control' name='type_user'>
                                  <option value='agent'>Agent</option>
                                  <option value='guichetier'>Guichetier</option>
                               </select>
                               
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