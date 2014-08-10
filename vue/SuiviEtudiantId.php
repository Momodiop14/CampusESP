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
<body>




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


<br/>
<form name="informations">
	 <hr/><br/>
<center><fieldset>
	<div>
    <div class="panel panel-default"> 
	<table>
		<tr>
	<td width="100px"> <h4> <div class="label label-info"> identifiant </div> </h4> </td>   <td><h4> <?php echo $identifiant; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nom </div> </h4> </td>   <td><h4> <?php echo $nom; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> prenom </div> </h4> </td>   <td><h4> <?php echo $prenom; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> sexe </div> </h4> </td>   <td><h4> <?php echo $sexe; ?> </h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> ne(e) le </div> </h4> </td>   <td><h4> <?php echo $date; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> a </div> </h4> </td>   <td><h4> <?php echo $lieu; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nationnalite </div> </h4> </td>   <td><h4> <?php echo $nationnalite; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> adresse </div> </h4> </td>   <td><h4> <?php echo $adresse; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> option </div> </h4> </td>   <td><h4> <?php echo $option; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> formation </div> </h4> </td>   <td><h4> <?php echo $formation; ?> </h4></td>
		</tr>

			<tr>
	<td width="100px"> <h4> <div class="label label-info"> chambre </div> </h4> </td>   <td><h4> <?php echo $chambre; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> titulaire </div> </h4> </td>   <td><h4> <?php echo $titulaire; ?> </h4></td>
		</tr>



	</table>	
</div>
</fieldset> </center>
<br/><br/>

<table class="table table-bordered table-striped table-condensed" border="2" align="center">
	
	<tr>
	<?php
	foreach ($tab_paiement as $paiement)
	{
	
			echo'<td> '.$paiement['mois'].'  </td>';		
	
    }
	?>
	</tr>

	<tr>
	<?php	
	
	foreach ($tab_paiement as $paiement)
	{	
		echo'<td>'; 
	    	 if ($paiement['paye']!=false)
	    		echo'<div class="glyphicon glyphicon-ok"> </div>';  
		echo'</td>';
	}	
		
	?>
	</tr>

</table>

    <br/> <br/>
<?php require_once 'footer.php';?>
</div>
</form>
</div>


</body>
</html>