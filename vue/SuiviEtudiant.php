<!DOCTYPE html>
<html lang="fr">
<head>
<title>Suivi Etudiant</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Intégration du CSS Bootstrap -->
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen"> 
</head>
<body style="background-color: rgb(78,145,194);">

<!-- Intégration de la libraire jQuery -->
<script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
<!-- Intégration de la libraire de composants du Bootstrap -->
<script src="../bootstrap/js/bootstrap.min.js"></script>


<!-- Conteneur principal -->
<div class="container" style="background-color:white;" >
	<?php require_once 'header.php';?>
<ul class="nav nav-tabs">
  <li><a href="index.php?action=indexe">Home</a></li>
  <li class="active"><a href="index.php?action=SuiviEtudiant">Suivi Etudiant</a></li>
  <li><a href="index.php?action=EnregistrerMensualite">Enregistrer Mensualite</a><li>
  <li><a href="index.php?action=Codifier">Codifier</a><li>
  <li><a href="index.php?action=EditerEtudiant">Editer Etudiant</a><li>	
</ul>


<br/> 
<div class="col-xs-4">
  <input type="text" class="form-control" placeholder="Id Etudiant">
</div>
<input type="button" class="btn-primary btn" value="valider"/>

<br/>
<form name="informations">
	 <hr/><br/>
<center><fieldset>
    <div class="panel panel-default"> 
	<table>
		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nom </div> </h4> </td>   <td><h4> Ndiaye </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> prenom </div> </h4> </td>   <td><h4> pape Ibrahima </h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> ne(e) le </div> </h4> </td>   <td><h4> 24/03/1992 </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> a </div> </h4> </td>   <td><h4> DAKAR </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> nationnalite </div> </h4> </td>   <td><h4> SENEGALISE </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> adresse </div> </h4> </td>   <td><h4> Yoff, apcsi n276 </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> formation </div> </h4> </td>   <td><h4> genie informatique </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> niveau </div> </h4> </td>   <td><h4> DUT2 </h4></td>
		</tr>

			<tr>
	<td width="100px"> <h4> <div class="label label-info"> chambre </div> </h4> </td>   <td><h4> 12B </h4></td>
		</tr>



	</table>	
</div>
</fieldset> </center>
<br/><br/>

<table  class="table table-bordered table-striped table-condensed" border="2" align="center">
	<tr>
		<td> JANVIER  </td>
		<td> FEVRIER  </td>
		<td> MARS  </td>
		<td> AVRIL  </td>
		<td> MAI  </td>
		<td> JUIN  </td>
		<td> JUILLET  </td>
		<td> AOUT  </td>
		<td> SEPTEMBRE </td>
		<td> OCTOBRE </td>
		<td> NOVEMBRE </td>
		<td> DECEMBRE </td>

	</tr>	
	<tr>
		<td>  <div class="glyphicon glyphicon-ok">  </div>  </td>
		<td>  <div class="glyphicon glyphicon-ok">  </div>  </td>
		<td>  <div class="glyphicon glyphicon-ok">  </div>  </td>
		<td>  <div class="glyphicon glyphicon-ok">  </div>  </td>
		<td>  <div class="glyphicon glyphicon-ok">  </div>  </td>
		<td>  <div class="glyphicon glyphicon-ok">  </div>  </td>
		<td>    </td>
		<td>    </td>
		<td>    </td>
		<td>    </td>
		<td>    </td>
		<td>    </td>
	</tr>	


    <br/> <br/>
</form>
</div>


</body>
</html>