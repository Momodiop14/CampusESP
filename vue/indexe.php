<!DOCTYPE html>
<html lang="fr">
<head>
<title>Indexe</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset='utf-8'>
<!-- Intégration du CSS Bootstrap -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen"> 
<!-- Intégration de la libraire jQuery -->
<script src="js/jquery.js"></script>
<!-- Intégration de la libraire de composants du Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body >



<!-- Conteneur principal -->
<div class="container"  >
	<?php require_once 'header.php';?>
	
<ul class="nav nav-tabs">
  <li class="active"><a href="#">Home</a></li>
  <li><a href="index.php?action=SuiviEtudiant">Suivi Etudiant</a></li>
  <li><a href="index.php?action=Codifier">Codifier</a><li>
  <li><a href="index.php?action=EditerEtudiant">Editer Etudiant</a><li>	
</ul>


vous avez ajoute un nouvel etudiant(e): samba fall
<hr/>
vous avez reconfigure le pavillon b
<hr/>
vous avez enregistre une mensualite: samba fall
<hr/>
vous avez consulte le suivi de l'etudiant(e): awa ndiaye
<hr/> 


<?php require_once 'footer.php';?>
</div>

</body>
</html>