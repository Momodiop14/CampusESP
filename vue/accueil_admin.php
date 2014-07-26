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
              echo'<div class="alert alert-success" role="alert">Votre session est ouverte avec succes !!!</div>';
              $_SESSION['compt_visit']++;
            }

           

     ?>
  </div>

	 
    


  	</div>
    


  </body>

</html>