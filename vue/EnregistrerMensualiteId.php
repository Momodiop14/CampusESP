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
  <input type="text" class="form-control" placeholder="Id Etudiant">
</div>
<input type="submit" class="btn-primary btn" value="valider"/>
   </form> 


<br/>

	 <hr/><br/>
<div class="row">	 
<div class="col-xs-7">

	<table>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> identifiant </div> </h4> </td>   <td><h4> <?php echo $identifiant ; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nom </div> </h4> </td>   <td><h4> <?php echo $nom ; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> prenom </div> </h4> </td>   <td><h4> <?php echo $prenom ; ?> </h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> ne(e) le </div> </h4> </td>   <td><h4> <?php echo $date ; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> a </div> </h4> </td>   <td><h4> <?php echo $lieu ; ?> </h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nationnalite </div> </h4> </td>   <td><h4> <?php echo $nationnalite ; ?> </h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> adresse </div> </h4> </td>   <td><h4> <?php echo $adresse ; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> option </div> </h4> </td>   <td><h4> <?php echo $option ; ?> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> formation </div> </h4> </td>   <td><h4> <?php echo $formation ; ?> </h4></td>
		</tr>

			<tr>
	<td width="100px"> <h4> <div class="label label-info"> chambre </div> </h4> </td>   <td><h4> <?php echo $chambre ; ?> </h4></td>
		</tr>



	</table>	

</div>

<div class="col-sm-5">

	<div class="panel panel-default">
		<table>
		<form name="form_mensualite" method="POST" action="index.php?action=recuMensualite" TARGET=_BLANK >
			<input type="hidden" name="identifiant1" value= <?php echo $_REQUEST['valid_id'] ?>  />
			<?php
			  foreach ($tab_paiement as $paiement) 
			  {
			echo'<tr>';
				echo'<td> <input type="checkbox" name="check[]" value="'.$paiement['mois'].'" ';
						if ($paiement['paye']!=false)  
						echo'disabled="false" /> ';
				echo' </td>';
				echo'<td> '; 
				         if ($paiement['paye']!=false)
				         echo' <p class="text-danger"> ';
				echo $paiement['mois'];

						if ($paiement['paye']!=false)	
				         echo'</p> '; 
				 echo'</td> </tr>';			
			  }
			?>

      
		</table>	<br/>

	<center>	<input type="submit" class="btn-primary btn" value="regler mensualite" />  </center>
	</form>
	</div>	

</div>
</div>
</div>
</div>
</body>
</html>