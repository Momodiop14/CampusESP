<!DOCTYPE html>
<html lang="fr">
  <head>
		<title>Suivi Etudiant</title>
		<!-- On ouvre la fenêtre à la largeur de l'écran -->
		
		<!-- Intégration de la libraire jQuery -->
		<script src="bootstrap/js/jquery.js"></script>
		<!-- Intégration du CSS Bootstrap -->
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" > 
		
		<!-- Intégration de la libraire de composants du Bootstrap -->
		<script src="Bootstrap/js/bootstrap.min.js"></script> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset='utf-8'>
		
         
	     

       


   </head>
   
   <body onload="window.print()" style="background-image:url(media/images/coud.jpg);">
<div class="col-xs-offset-4 col-xs-offset-8"><img scr="media/images/coud.jpg"/></div>


  <!-- Conteneur principal -->
		<div class="container"  >
				<br/><br/> <br/>
				<div class="row">   <div class="col-xs-offset-4"> <img src="img/logo_esp.jpg">  </div>   </div>

				<center><h1>  RECU N <?php echo $num_recu ?>  <h1></center>
				<br/><br/>

						<table id='tab' class="table table-bordered table-striped">
						  <tbody>
							<tr>
						         <td>
						         	<h3>ID ETUDIANT </h3>
						         </td>  
						         <td>
						         	<h4><?php echo $identifiant ?></h4>
						         </td> 
							</tr>

							<tr>
			           			<td>
			           				<h3>NOM </h3> 
			           			</td>  
			           			
			           			<td>
			           				<h4><?php echo $nom ?></h4> 
			           			</td>
							</tr>

							<tr>
						         <td>
						         	<h3>PRENOM </h3> 
						         	</td>  

						          <td>
						          	<h4><?php echo $prenom ?></h4>
						          </td> 
							</tr>

							<tr>
						
							     <td>
							     	 <h3>mois pay&eacute;s </h3> 

							      </td>  

							      <td>

								      	 <h4><?php 

												foreach ($tab_mois as $mois)
													echo $mois.'<br/> ' ;
										 ?></h4> 
							     </td>
						  	</tr>

						  	<tr>
						          <td>
						          	  <h3>A PAYER </h3>
						          </td>  
						          <td>
						          	<h4>  <?php   $payeNet=count($tab_mois)*3000; echo $payeNet ?></h4>

						          </td>
							</tr>

						  </tbody>

					    </table>
					   
				
				<center> Delivre par <?php echo $_SESSION['login'];  ?></center>	
				</center>	<br/><br/><br/>
				<div class="row">	<div class="col-xs-offset-8 col-xs-3"><u> CACHET </u></div> </div>
 
		</div>
    </body>
</html>
