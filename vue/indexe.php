<!DOCTYPE html>
<html lang="fr">
<head>
<title>accueil agent</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
             <meta name="viewport" content="width=device-width" />
     	     <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.min.js"></script>
             <script src="Bootstrap/js/scripts.js"></script>
</head>
<body style="background-color: rgb(78,145,194);">

<!-- Intégration de la libraire jQuery -->
<script src="js/jquery.js"></script>
<!-- Intégration de la libraire de composants du Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>


<!-- Conteneur principal -->
<div class="container" style="background-color: white;" >
	<?php require_once 'menu_agent.php';
        if (isset($error)) 
        {
        	echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>La periode de la reservation est pas encore ouverte  </strong> </div>';
        }


	?>
	
vous avez ajoute un nouvel etudiant(e): samba fall
<hr/>
vous avez reconfigure le pavillon b
<hr/>
vous avez enregistre une mensualite: samba fall
<hr/>
vous avez consulte le suivi de l'etudiant(e): awa ndiaye
<hr/> 



</div>
</body>
</html>