<!DOCTYPE html>
<html lang="fr">
<head>
<title>Codifier</title>
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
<div class="container" style="background-color: white;">
	<?php require_once 'header.php';?>
<ul class="nav nav-tabs">
  <li><a href="index.php?action=indexe">Home</a></li>
  <li><a href="index.php?action=SuiviEtudiant">Suivi Etudiant</a></li>
  <li class="active" ><a href="index.php?action=Codifier">Codifier</a><li>
  <li><a href="index.php?action=EditerEtudiant">Editer Etudiant</a><li>	
</ul>

<br/> 
<br/>

<div class="row">
<div class="col-xs-offset-4 col-xs-8" >


<form name="formulaire" method="POST" action="index.php?action=choixChambre">

	<table>

		<tr>
	<td width="150px"> <h4> <div class="label label-info"> identifiant </div> </h4> </td>   <td><h4> <div class="col-xs-13"><input  type="text" class="form-control" name="identifiant"  required /></div></h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nom </div> </h4> </td>   <td><h4> <input  type="text"  class="form-control" name="nom"  required /></h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> prenom </div> </h4> </td>   <td width="350px"><h4> <input  type="text" class="form-control" name="prenom" required /></h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> sexe </div> </h4> </td>   <td width="350px"><h4> <div class="col-xs-offset-2 col-xs-3"> <input  type="radio" value="H" name="sexe" required />H  <input type="radio" name="sexe" value="F" required />F </div> </h4></td>
		</tr>		

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> ne(e) le </div> </h4> </td>   <td><h4><input  type="date" class="form-control" name="date_naissance" required /></h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nationnalite </div> </h4> </td>   <td><h4><input  type="text" class="form-control" name="nationnalite" required /> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> titulaire </div> </h4> </td>   <td width="350px"> <div class="col-xs-offset-2 col-xs-5"> <h4><input  type="radio" value=1  name="titulaire" required />Oui <input type="radio"  name="titulaire" value=0 required />Non</h4></div></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> a </div> </h4> </td>   <td><h4><input   type="text" class="form-control" name="lieu_naissance" required /> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> adresse </div> </h4> </td>   <td><h4><input  type="text" class="form-control" name="adresse" required /> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> option </div> </h4> </td>   <td><select class="form-control" name="option" /> 
								<?php foreach ($options as $option){ ?>
								 <?php echo '<option value="'.$option['id_Option'].'">'; ?>  <?php echo $option['nom_Option']; ?> </option>
							    <?php } ?>
							</select>
																					   </td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> formation </div> </h4> </td>   <td><select class="form-control" name="formation" /> 
								<?php foreach ($formations as $formation) { ?>
								<?php echo '<option value="'.$formation['Code_Formation'].'" >'.$formation['Code_Formation'].' </option> ';} ?>
								</select>														  		
																						  </td>
		</tr>




	</table>	
<br/>
<div class="col-xs-offset-3 col-xs-4">	<input  type="submit" class="btn btn-warning" value="choix chambre" /> </div>
</form>
<br/><br/>
</div>
</div>
 <?php require_once 'footer.php';?>
</div>

</body>
</html>