<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width "  charset='utf-8' />
     	         <script src="js/jquery.js"></script>
               <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
               <script src="Bootstrap/js/bootstrap.js"></script>
               <script src="Bootstrap/js/scripts.js"></script>
               
     </head>

      <script type="text/javascript">
            $(document).ready(function() 
            {
                $('#chambre').hide(); 
                 
                 $('button.rido').mouseenter(function () 

                 {
                     id=$(this).attr('id');
                     $('#'+id).popover("show");
                 });

                  $('button.rido').mouseleave(function () 
                 {
                     id=$(this).attr('id');
                     $('#'+id).popover("hide");
                 });




                   $('button.rido').click(function () 

                   {
                      id=$(this).attr('id');
                      if (id=='affiche_couloir')
                           div='couloir';
                         else
                          if (id='affiche_chambre') 
                               div='chambre';




                     if ($('#'+id+' span').attr('class')=='glyphicon glyphicon-plus') 
                        {
                          $('#'+div).show(1000);
                          $('#'+id+' span').attr('class','glyphicon glyphicon-minus');
                        }

                      else
                        {
                           $('#'+div).hide(1000);
                           $('#'+id+' span').attr('class','glyphicon glyphicon-plus');
                        }
                    }); 

               /* $('#affiche_couloi').click(function () 
                   {
                     if ($('#icon').attr('class')=='glyphicon glyphicon-plus') 
                        {
                          $('#couloir').show(1000);
                          $('#icon').attr('class','glyphicon glyphicon-minus');
                        }

                      else
                        {
                          $('#couloir').hide(1000);
                          $('#icon').attr('class','glyphicon glyphicon-plus');
                        }
                    }); */      

             $('#valider_couloir').click(function () {
               
               array_select=$('#couloir select');

               array_couloir=$('#couloir .code_coul');
               var tab_select=[];

               var tab_couloir=[];
               

               for (var i = 0; i < array_select.length; i++) 
               {
                 tab_select.push(array_select[i].value);
               }
               
               for (var i = 0; i < array_couloir.length; i++) 
               {
               
                     tab_couloir.push(array_couloir[i].innerHTML);
                 }

                 



               

                 $.ajax({
                          url : "index.php?action=set_couloir", // on donne l'URL du fichier de traitement
                          type : "POST", // la requête est de type POST
                          data : "tab_select="+tab_select+"&tab_couloir="+tab_couloir   //  on envoie nos données                

                       });

                 alert("La modification de couloirs est reussie");

                  $('#couloir').slideUp('slow');

             });

       } );
        



      </script>

     <style type="text/css">

         .form-control{width:110px;margin: 3px;}
        
        }

     </style>
  <body>
  	<div class="container">
  	       <?php require_once('menu_admin.php'); ?>
           
                  <div class="modal fade" id="infos">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                         <button type="button" id='close_modal' class="close" datadismiss="modal"><span class='glyphicon glyphicon-remove'></span> </button>
                                         <h4 class="modal-title">Description etape suivante</h4>

                                       </div>
                                        <div class="modal-body">
                                             Maintenant l'etape qui suit consiste a modifier les chambre ne se trouvant pas au bon etage
                                             ou de supprimer les chambres en exces .
                                             Il faut aussi ajouter le genre des habitants des couloirs.

                                        </div>

                                   </div>
                                 </div> 
                   </div>

                     <div class="row">

                            <button id='affiche_couloir' class='btn rido btn' data-toggle="popover" data-placement="top" data-content="afficher/masquer le tableau des couloirs">

                                 <span class='glyphicon glyphicon-minus'></span>
                           </button>
                       </div>
 
                  
                    

                     <div id='couloir' class="row">                           
                         
                              <div class="col-lg-offset-5" >
                                    <caption >Liste des couloirs du <?php echo$nom_pav?></caption>

                               </div>  

                               <div class="row">
                         

                                <div class='col-lg-6 col-lg-offset-3'>
                                
                                  <table  class='table table-striped table-bordered '>
                                    
                                       <thead>
                                                 <th>Code du couloir</th>      
                                                 <th>Position</th>
                                                 <th>Niveau</th> 
                                                 <th>Genre</th>
                                       </thead>

                                        <tbody>
                                              
                                               <?php
                                           
                                            
                                                    foreach ($array_couloir as $key)
                                                     {
                                                        
                                                         echo "<tr >";                                                   

                                                         echo "<td class='code_coul'>".$key['Code_Couloir']."</td>" ;

                                                         echo "<td>".$key['position_couloir']."</td>" ;

                                                         

                                                          $niveau=intval(substr($key['Ref_Etage'], 1));

                                                          switch ($niveau) 
                                                            {
                                                              case 0:
                                                                   echo "<td>Rez de chaussee</td>" ;
                                                              break;
                                                            
                                                             default:
                                                               echo "<td>".$niveau."e etage </td>" ;
                                                              break;
                                                            } 

                                                          echo "<td><select name[]='genre' ><option value=''>NEANT</option>  <option value='H'>Homme</option> <option value='F'>Femme</option> <option value='M'>Mixte</option></select> </td>" ;         
                                                         echo "</tr>";

                                                          
                                                       
                                                       } 

                                              
                                                ?> 

                                    
                                         </tbody>

                                   
                                                    
                                   </table>
                                 </div>
                               </div>


                               <button id="valider_couloir" type='submit' class="btn btn-success col-lg-offset-5 " > 
                                      <span class='glyphicon glyphicon-ok'></span> Terminer

                               </button>
                                
                            
           
                     </div>
                     <br/> <br/>

                     <div class="row">
                           <button id='affiche_chambre'  class='btn btn-info rido' data-toggle="popover" data-placement="top" data-content="afficher/masquer le tableau des chambres">

                          <span  class='glyphicon glyphicon-plus'></span>
                      </button>

                     </div>

                    

                     <div class="row" id="chambre" style='margin-top:60px'>

                         <div class="col-lg-offset-5" >
                                    <caption >Liste des chambres du <?php echo$nom_pav?></caption>

                          </div>


                          <div class="row">

                                 <form method='POST' action='index.php?action=validate_set_chambre'>

                              
                            <div class='col-lg-6 col-lg-offset-3' >
                                  <table id='tableau' class='table table-striped table-bordered'>
                                    <thead>
                                       <tr>
                                          <th >Numero de la chambre</th>
                                          <th >Numero Couloir</th>
                                          <th >Actions</th>
                                       </tr>
                                     </thead>

                                        <tfoot>
                                             <tr>
                                                <th >Numero de la chambre</th>
                                                <th >Numero Couloir</th>
                                                <th >Actions</th>
                                             </tr>
                                     </tfoot>


                                     <tbody>

                                       <?php
                                       
                                        $count=0;
                                        foreach ($liste_chambre as $key)
                                         {
                                             $id=$key['enregistrement_chambre'];

                                             echo "<tr id='ligne_".$id."'>";   

                                             echo "<input name='id_chambre".$count."' type='hidden' value='".$id."'/>";                                               

                                             echo "<td><input type='text' name='chambre".$count."'  class='form-control no_chambre'   value='".$key["Code_chambre"]."'"."/> </td>" ;

                                             echo "<td><input type='text' name='couloir_chambre".$count."' class='form-control'   value='".$key["Ref_Couloir"]."'"."/> </td>" ;
                                             
                                             
                                              
                                              echo "<td>
                                                        
                                                        <span class='btn  icon-delete glyphicon glyphicon-remove ' title='supprimer la ligne choisie'></span>
                                                                                    
                                                    </td>";



                                              
                                              echo "</tr>";

                                             $count++; 
                                           
                                           } 

                                           echo "<input name='count_chamb' type='hidden' value='".$count."'/>";

                                          
                                        ?>




                                     </tbody>

                                    
                                   </table>

                              <button id="button" type='submit' class="btn btn-primary col-lg-offset-5 " > 
                                      <span class='glyphicon glyphiconok'></span> Terminer

                               </button>

                            

                        </div>

                        </form> 
                          
          
                          </div>

                                          
                     </div>

                       
          
                   

          
            <?php require_once 'footer.php';?> 

     </div>

	


  </body>

</html>