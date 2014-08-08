<!DOCTYPE html>
<html lang="fr">
<head>
<title>Editer Etudiant</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <li><a href="index.php?action=SuiviEtudiant">Suivi Etudiant</a></li>
  <li><a href="index.php?action=Codifier">Codifier</a><li>
  <li class="active"><a href="index.php?action=EditerEtudiant">Editer Etudiant</a><li>	
</ul>

<br/> 
<form name="identification" method="POST" action="index.php?action=EditerEtudiantId">
<div class="col-xs-4">
  <input type="text" class="form-control" placeholder="Id Etudiant" name="valid_id" required/>
</div>
<input type="submit" class="btn-primary btn" value="valider"/>
</form>
<br/>

	 <hr/><br/>


<form name="formulaire" method="POST" action="index.php?action=sauvegarderEtudiant">
<div class="row">	 
<div class="col-xs-9">
<div class="panel panel-default"> 
<input type="hidden" name="identifiant1" value= <?php echo $_REQUEST['valid_id'] ?>  />

	<table>
		<tr>
	<td width="100px"> <h4> <div class="label label-info"> identifiant </div> </h4> </td>   <td><h4> <input type="text" class="form-control" name="identifiant" <?php echo'value= "'.$identifiant.'"' ; ?> /></h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nom </div> </h4> </td>   <td><h4> <input type="text" class="form-control" name="nom" <?php echo'value= "'.$nom.'"' ; ?> /></h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> prenom </div> </h4> </td>   <td><h4> <input type="text" class="form-control" name="prenom" <?php echo'value= "'.$prenom.'"' ; ?> /></h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> sexe </div> </h4> </td>   <td> <div class="col-xs-offset-3"> <h4>  <input type="radio"  name="sexe" value="H" <?php if ($sexe=='H') echo 'checked="true" '; ?> required/> H
                                                                                          <input type="radio"  name="sexe" value="F" <?php if ($sexe=='F') echo 'checked="true" '; ?> required/> F </h4>  </div></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> ne(e) le </div> </h4> </td>   <td><h4><input type="date" class="form-control" name="date_naissance" <?php echo'value= "'.$date.'"' ; ?> /></h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nationnalite </div> </h4> </td>   <td><h4><input type="text" class="form-control" name="nationnalite" <?php echo'value= "'.$nationnalite.'"' ; ?> /> </h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> a </div> </h4> </td>   <td><h4><input type="text" class="form-control" name="lieu_naissance" <?php echo'value= "'.$lieu.'"' ; ?> /> </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> adresse </div> </h4> </td>   <td><h4><input type="text" class="form-control" name="adresse" <?php echo'value= "'.$adresse.'"' ; ?> /> </h4></td>
		</tr>

		<tr>
	<td width="120px"> <h4> <div class="label label-info"> option </div> </h4> </td>   <td width="300px"><select class="form-control" name="option" <?php echo'value= "'.$option.'"' ; ?> /> 
																					   
																					   <?php foreach ($options as $optionO) { ?>
							                              	<?php echo '<option value="'.$optionO['id_Option'].'"';  

							                              	if ($optionO['nom_Option']==$option)
							                              		echo 'selected="selected"';


							                              	echo '>'.$optionO['nom_Option'].' </option> ';} ?>  
				                                                                        				</select>

																					   </td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> formation </div> </h4> </td>   <td> <select name="formation" class="form-control" <?php echo'value= '.$formation ; ?> /> 
																						  
																						  <?php foreach ($formations as $formationF) { ?>
								                            <?php echo '<option value="'.$formationF['Code_Formation'].'"';

								                            if ($formationF['Code_Formation']==$formation) 
								                            	echo 'selected="selected"';



								                            echo '>'.$formationF['Code_Formation'].' </option> ';} ?>
							                                                                    	   </select>

																						  </td>
		</tr>

			<tr>
	<td width="100px"> <h4> <div class="label label-info"> chambre </div> </h4> </td>   <td><h4><input type="text" name="chambre" class="form-control" <?php echo'value= '.$chambre ; ?> /> </h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> titulaire </div> </h4> </td>   <td> <div class="col-xs-offset-3"><h4><input type="radio"  name="titulaire" value="1" <?php if ($titulaire==1) echo 'checked="true" '; ?> required/> Oui
                                                                                               <input type="radio"  name="titulaire" value="0" <?php if ($titulaire==0) echo 'checked="true" '; ?> required/> Non</h4></div></td>
		</tr>



	</table>	
</div>
</div>

<div class="col-sm-3">

	<div class="panel panel-default">
		<table>
			<?php
			  foreach ($tab_paiement as $paiement) 
			  {
			echo'<tr>';
				echo'<td> <input type="checkbox" name="check[]" value="'.$paiement['mois'].'" ';
						if ($paiement['paye']!=false)  
						echo'checked="true"';
				echo' /> </td>';
				echo'<td>'.$paiement['mois'].'</td> </tr>';			
			  }
			?>

		</table>	

	</div>	

</div>


</div>
<br/> <br/>
  <div class="row">
  
<div class="col-xs-4"></div>
  <div class="col-xs-3"><input type="submit" class="btn-primary btn" value="valider"/> </div>
  <div class="col-xs-1"> <a href="index.php?action=supprimerEtudiant"><input type="button" class="btn btn-danger" value="supprimer l'etudiant"/> </a> </div>

  </div>

</form>

  <br/><br/>
</div>
<br/>
<?php require_once 'footer.php';?>
</div>
</body>
</html>