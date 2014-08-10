<!DOCTYPE html>
<html lang="fr">
<head>
<title>Suivi Etudiant</title>
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
  <li><a href="index.php?action=indexe">Home</a></li>
  <li class="active"><a href="index.php?action=SuiviEtudiant">Suivi Etudiant</a></li>
  <li><a href="index.php?action=Codifier">Codifier</a><li>
  <li><a href="index.php?action=EditerEtudiant">Editer Etudiant</a><li>	
</ul>


<br/> 

<form name="valider_id" method="POST" action="index.php?action=SuiviEtudiantId" >
<div class="col-xs-4">
  <input type="text" name="valid_id" class="form-control" placeholder="Id Etudiant" required />
</div>
<input type="submit" class="btn-primary btn" value="valider"/>

</form>


<br/><br/><br/><br/><br/><br/>
<?php require_once 'footer.php';?>
</div>


</body>
</html>