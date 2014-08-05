<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width" />
     	       <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.min.js"></script>
             <script src="Bootstrap/js/scripts.js"></script>
             

  <body>
  	<div class="container">
  	
  		

<div class='row '>

    <?php 

           require_once 'menu_admin.php' ;
           
           if ($_SESSION['compt_visit']==1) //on visite pour la premiere fois la page
            {
              echo '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Ouverture de session reussie!!!! Bienvenue </strong> </div>';
              $_SESSION['compt_visit']++;
            }
          else
            if (isset($succes)) 

             {
              echo '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Votre derniere operation a ete effectuee avec succes!!!!  </strong> </div>';

           
             }
             

     ?>
  </div>

	 
    

     <?php require_once 'footer.php';?>
  	</div>
    


  </body>

</html>