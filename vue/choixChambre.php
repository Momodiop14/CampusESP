<!DOCTYPE html>
<html lang="fr">
<head>
<title>Codifier</title>
 <meta name="viewport" content="width=device-width ;text/html;  charset='utf-8' "/>
               <script src="js/jquery.js"></script>
               <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
               <link href="media/css/jquery.dataTables.css" rel="stylesheet">
               <script src="Bootstrap/js/bootstrap.js"></script>
               
               <script src="media/js/jquery.dataTables.js"></script>

               <script type="text/javascript">
                  $(document).ready(function () 

                   {
                      $('#tableau').DataTable(
                                 {"ordering": false });
                   });


               </script>

</head>
<body >


<!-- Conteneur principal -->
<div class="container" >
  <?php require_once 'header.php';?>

<form name="formulaire" method="POST" action="index.php?action=codification" >


  <input type="hidden" name="identifiant" <?php echo 'value= "'.$_REQUEST['identifiant'].'"' ;?> />
  <input type="hidden" name="nom" <?php echo 'value= "'.$_REQUEST['nom'].'"' ;?> />
  <input type="hidden" name="prenom" <?php echo 'value= "'.$_REQUEST['prenom'].'"'; ?> />
  <input type="hidden" name="date_naissance" <?php echo 'value= "'.$_REQUEST['date_naissance'].'"' ; ?> />
  <input type="hidden" name="lieu_naissance" <?php echo 'value= "'.$_REQUEST['lieu_naissance'].'"' ;?> />
  <input type="hidden" name="adresse" <?php echo 'value= "'.$_REQUEST['adresse'].'"' ?> />
  <input type="hidden" name="nationnalite" <?php echo 'value= "'.$_REQUEST['nationnalite'].'"' ;?> />
  <input type="hidden" name="formation" <?php echo 'value= "'.$_REQUEST['formation'].'"' ;?> />
  <input type="hidden" name="option" <?php echo 'value= "'.$_REQUEST['option'].'"' ;?> />
  <input type="hidden" name="titulaire" <?php echo 'value= "'.$_REQUEST['titulaire'].'"' ;?> />
  <input type="hidden" name="sexe" <?php echo 'value= "'.$_REQUEST['sexe'].'"' ;?> />
  
  

     <table id='tableau' cellpadding="0" cellspacing="0" border="0" class=" display">
                   <thead>
                     <tr>
                        <th >Chambre</th>
                        <th >Couloir</th>
                        <th >Etage</th>
                        <th >Pavillon</th>
                        <th >Occupants</th>
                     </tr>
                   </thead>

                      <tfoot>
                           <tr>
                              <th >Chambre</th>
                              <th >Couloir</th>
                              <th >Etage</th>
                              <th >Pavillon</th>
                              <th >Occupants</th>
                           </tr>
                   </tfoot>

                 <tbody>
                    
                        <?php 
                        for ($j=0;$j<count($chambre);$j++)
                        {
                          echo'<tr>';
                             $chambro=$chambre[$j];
                                   
                                    echo'<td> <input type="radio" name="chambre" value="'.$chambro['enregistrement_chambre'].'" required /> '.$chambro['Code_chambre'] ; echo "</td>";
                                    echo'<td>'.$chambro['position_couloir'] ; echo "</td>";
                                    echo'<td>'.$chambro['niveau_Etage'] ; echo "</td>";
                                    echo'<td>'.$chambro['nom_pavillon'] ; echo "</td>";
                                    echo'<td>';
                                                foreach ($occupants[$j] as $occupant) {
                                                   echo $occupant['nom'].'  '.$occupant['prenom'].'  '.$occupant['formation_etudiant'].'  '.$occupant['nom_Option'].' <br/>'; 
                                                }
                                    echo '</td>' ; 
                                  
                          echo'</tr>';
                        }
                         ?>
                     
                </tbody>

      </table>

<div class="row">   <div class="col-xs-offset-4 col-xs-3">   <input type="submit" value="valider" class= "btn btn-primary"/> </div>
<div class="col-xs-3"><a href="index.php?action=Codifier"><span class="glyphicon glyphicon-arrow-left" > RETOUR</span></a> </div>
</div>
    </form>

<?php require_once 'footer.php';?>
</div>

</body>

