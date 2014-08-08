<!DOCTYPE html>
<html lang="fr">
<head>
<title>Enregitrer Mensualite</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Intégration du CSS Bootstrap -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen"> 
<!-- Intégration de la libraire jQuery -->
<script src="js/jquery.js"></script>
<!-- Intégration de la libraire de composants du Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>


<body  Onload= "checker();" >




<!-- Conteneur principal -->
<div class="container" >
	<?php require_once 'header.php';?>
<ul class="nav nav-tabs">
  <li><a href="index.php?action=indexe_guichetier">Home</a></li>
  <li><a href="index.php?action=SuiviEtudiant_guichetier">Suivi Etudiant</a></li>
  <li class="active"><a href="index.php?action=EnregistrerMensualite">Enregistrer Mensualite</a><li>
</ul>


<br/> 
<div class="col-xs-4">
	<form name="formulaire" method="POST" action="index.php?action=enregistrerMensualiteId">
  <input type="text" class="form-control" name="valid_id" placeholder="Id Etudiant">
</div>
<input type="submit" class="btn-primary btn" value="valider"/>
   </form> 


<br/>

	 <hr/><br/>

</div>
<?php require_once 'footer.php';?>
</div>
</body>
</html>