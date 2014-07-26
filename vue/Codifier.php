<!DOCTYPE html>
<html lang="fr">
<head>
<title>Codifier</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Intégration du CSS Bootstrap -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen"> 


</head>
<body style="background-color: rgb(78,145,194);">

<!-- Intégration de la libraire jQuery -->
<script src="js/jquery.js"></script>
<!-- Intégration de la libraire de composants du Bootstrap -->
<script src="bootstrap/js/bootstrap.min.js"></script>


<!-- Conteneur principal -->
<div class="container" style="background-color: white;">
	<?php require_once 'menu_agent.php';?>

<div class="col-xs-offset-4 col-xs-8" >
<div class="panel panel-default"> 

<form name="formulaire" method="POST" action="index.php?action=codification">

	<table>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> identifiant </div> </h4> </td>   <td><h4> <input type="text" class="form-control" name="identifiant"  /></h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nom </div> </h4> </td>   <td><h4> <input type="text"  class="form-control" name="nom"  /></h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> prenom </div> </h4> </td>   <td><h4> <input type="text" class="form-control" name="prenom" /></h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> ne(e) le </div> </h4> </td>   <td><h4><input type="text" class="form-control" name="date_naissance" /></h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nationnalite </div> </h4> </td>   <td><h4><input type="text" class="form-control" name="nationnalite" /> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> a </div> </h4> </td>   <td><h4><input type="text" class="form-control" name="lieu_naissance" /> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> adresse </div> </h4> </td>   <td><h4><input type="text" class="form-control" name="adresse" /> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> option </div> </h4> </td>   <td><h4><input type="text" class="form-control" name="option" /> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> formation </div> </h4> </td>   <td><h4><input type="text" class="form-control" name="formation" /> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> chambre </div> </h4> </td>   <td><h4><input type="text" class="form-control" name="chambre" /> </h4></td>
		</tr>



	</table>	

<center>	<input type="submit" value="valider" class="btn btn-primary"/> </center>
</form>
</div>

</div>
</div>

</body>
</html>