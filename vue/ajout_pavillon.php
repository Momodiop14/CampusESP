<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width, initialscale=1.0" />
     	       <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.js"></script>
             <script src="Bootstrap/js/scripts.js"></script>

             <style type="text/css">
              section
              {
                margin-top: 5%;  
              }
             </style>
             

            
            
            
     </head>
  <body>
  	    
        <div class="container">
  		
           <?php require_once('menu_admin.php') ;?>

           
           
           <section class='col-xs-12 col-xs-offset-3'>
           

           <div class=" panel panel-default">
            
             <div class="panel-heading">
              
                 <h3 class="col-xs-offset-5 panel-title">Ajout Pavillon </h3>
             
             </div>
             
             <div class="panel-body">
              
                   <form method='POST' action='index.php?action=new_pav'>

                    <input class='form-control ' autocomplete='off' name='name_pav' required placeholder='Nom Pavillon'>
                    <input class='form-control ' type='number' min='1' max ='4'  autocomplete='off' name='nbre_etage' required  placeholder="Nombre d'etages">
                    <input class='form-control ' type='number' min='1' autocomplete='off' name='nb_chambre_par_etage' required  placeholder="Nombre de chambres par etages">
                    <label for="niveau" class='col-xs-offset-3'>Selectionner niveau etudes residents</label>
                    <select name="niveau" class='form-control'>
                       
                       <option>Tout Niveau</option>
                       <option>1e Annee</option>
                       <option>2e Annee</option>
                       <option>3e Annee</option>
                       <option>4e Annee</option>
                       <option>5e Annee</option>
                    </select>
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