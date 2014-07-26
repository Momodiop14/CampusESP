<!DOCTYPE html>
<html lang="fr">
<head>
<title>Enregitrer Mensualite</title>
<!-- On ouvre la fenêtre à la largeur de l'écran -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Intégration du CSS Bootstrap -->
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen"> 


<body style="background-color: rgb(78,145,194);" Onload= "checker();" >

<!-- Intégration de la libraire jQuery -->
<script src="../bootstrap/js/jquery-1.8.3.min.js"></script>
<!-- Intégration de la libraire de composants du Bootstrap -->
<script src="../bootstrap/js/bootstrap.min.js"></script>


<!-- Conteneur principal -->
<div class="container" style="background-color: white">
	<?php require_once 'header.php';?>
<ul class="nav nav-tabs">
  <li><a href="index.php?action=indexe">Home</a></li>
  <li><a href="index.php?action=SuiviEtudiant">Suivi Etudiant</a></li>
  <li class="active"><a href="index.php?action=EnregistrerMensualite">Enregistrer Mensualite</a><li>
  <li><a href="index.php?action=Codifier">Codifier</a><li>
  <li><a href="index.php?action=EditerEtudiant">Editer Etudiant</a><li>	
</ul>


<br/> 
<div class="col-xs-4">
  <input type="text" class="form-control" placeholder="Id Etudiant">
</div>
<input type="button" class="btn-primary btn" value="valider"/>

<br/>

	 <hr/><br/>
<div class="row">	 
<div class="col-xs-6">
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
	<td width="100px"> <h4> <div class="label label-info"> nationnalite </div> </h4> </td>   <td><h4> SENEGALAISE </h4></td>
		</tr>


		<tr>
	<td width="100px"> <h4> <div class="label label-info"> adresse </div> </h4> </td>   <td><h4> Yoff, apcsi n276 </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> option </div> </h4> </td>   <td><h4> genie informatique </h4></td>
		</tr>

		<tr>
	<td width="100px"> <h4> <div class="label label-info"> formation </div> </h4> </td>   <td><h4> DUT2 </h4></td>
		</tr>

			<tr>
	<td width="100px"> <h4> <div class="label label-info"> chambre </div> </h4> </td>   <td><h4> 12B </h4></td>
		</tr>



	</table>	
</div>
</div>

<div class="col-sm-5">

	<div class="panel panel-default">
		<table>
			<tr>
				<td> <input type="checkbox" checked="true" disabled="false" /> </td>
				<td> JANVIER </td>
			</tr>
			<tr>
				<td> <input type="checkbox" checked="true" disabled="false" /> </td>
				<td> FEVRIER </td>
			</tr>	
			<tr>
				<td> <input type="checkbox" checked="true" disabled="false" /> </td>
				<td> MARS </td>
			</tr>
			<tr>
				<td> <input type="checkbox" /> </td>
				<td> AVRIL </td>
			</tr>
			<tr>
				<td> <input type="checkbox" /> </td>
				<td> MAI </td>
			</tr>
			<tr>
				<td> <input type="checkbox" /> </td>
				<td> JUIN </td>
			</tr>
			<tr>
				<td> <input type="checkbox" /> </td>
				<td> JUILLET </td>
			</tr>
			<tr>
				<td> <input type="checkbox" /> </td>
				<td> AOUT </td>
			</tr>
			<tr>
				<td> <input type="checkbox" /> </td>
				<td> SEPTEMBRE </td>
			</tr>
			<tr>
				<td> <input type="checkbox" /> </td>
				<td> OCTOBRE </td>
			</tr>
			<tr>
				<td> <input type="checkbox" /> </td>
				<td> NOVEMBRE </td>
			</tr>
			<tr>
				<td> <input type="checkbox" /> </td>
				<td> DECEMBRE </td>
			</tr>
		</table>	

		<input type="button" class="btn-primary btn" value="valider" />
	</div>	

</div>


</div>
</div>
</body>
</html>