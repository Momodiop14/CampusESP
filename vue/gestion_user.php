<!doctype html>
<html>

     <head>
             <meta name="viewport" content="width=device-width" charset='utf-8'/>
               <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.js"></script>
             <script src="media/js/jquery.dataTables.js"></script>
             <link href="media/css/jquery.dataTables.css" rel="stylesheet"> 
             
             <script text="javascript">

                $(document).ready(function()        

                  { $('#tableau').DataTable();

                        $('button.icon-save,button.icon-delete').mouseenter(function () 

                           {
                              
                              $(this).popover("show");
                           });

                        $('button.icon-save,button.icon-delete').mouseleave(function () 
                       {
                           
                           $(this).popover("hide");
                       });


                        $('#tableau tbody').on( 'click', 'tr', function () {
                              $(this).toggleClass('selected');
                          } );
                       
                        $('.icon-delete').click( function () { //fonction supprimant les users selected

                           if (confirm('Voulez vous vraiment supprimer  ?')) 

                               {
                                  
                                    $("#tableau tr.selected").each( function () 

                                        {
                                           login=$(this).children('td:eq(0)').text();
                                           type_agent=$(this).children('td:eq(4)').text();
                                           
                                           
                                            $.ajax({
                                            url : "index.php?action=del_user", // on donne l'URL du fichier de traitement
                                            type : "POST", // la requête est de type POST
                                            data : "login="+login+"&user="+type_agent   //  on envoie nos données                

                                         });
                                            
                                         
                                       });        
                        

                                     // table.row($(this).parents('tr')).remove().draw();
                                  

                                  

                               }                           
 
                            
                        } );

                 });
             
             </script>

                          

    </head>

    <body>

           <div class="container">
               
                  <?php require_once('menu_admin.php'); ?>


                      <div class="row">

                             <div class="col-lg-10 col-xs-offset-1">
                                
                                         
                                            
                               <table id='tableau' cellpadding='0' cellspacing='0' border='0' class='display  '>
                                  
                                  <thead>
                                     <tr>
                                        <th >Pseudonyme</th>
                                        <th >Prenom utilisateur</th>
                                        <th >Nom utilisateur</th>
                                        <th >Genre utilisateur</th>
                                        <th >Type utilisateur</th>
                                     </tr>
                                   </thead>

                                   <tfoot>
                                      <tr>
                                         <th >Pseudonyme</th>
                                         <th >Prenom utilisateur</th>
                                         <th >Nom utilisateur</th>
                                         <th >Genre utilisateur</th>
                                         <th >Type utilisateur</th>
                                         
                                     </tr>
                                           
                                   </tfoot>


                                   <tbody>
                                       
                                     <?php
                                     
                                      
                                      for ($i=0; $i <count($array_agent) ; $i++) 

                                         {  
                                                                                                         

                                           echo "<tr>";                                                   

                                           echo "<td>".$array_agent[$i]['Login_agent']."</td>" ;

                                           echo "<td><input type='text' class='form-control' value='".$array_agent[$i]['prenom_agent']."' /></td>" ;
                                           
                                           echo "<td><input type='text' class='form-control' value='".$array_agent[$i]['nom_agent']."' /></td>" ;
                                           
                                           if ($array_agent[$i]['sexe_agent']=='H')
                                                  $sexe_alter='F';
                                                elseif ($array_agent[$i]['sexe_agent']=='F') 
                                                 {
                                                    $sexe_alter='H';
                                                 } 
                                               
                                             
                                               

                                           echo "<td><select ><option value='".$array_agent[$i]['sexe_agent']."'>".$array_agent[$i]['sexe_agent']."</option>  <option value='".$sexe_alter."'>".$sexe_alter."</option>  </select> </td>" ;  

                                           echo "<td>agent</td>" ;
                                           
                                           echo "</tr>";
                                            
                                         
                                         } 



                                         for ($i=0; $i <count($array_guichetier) ; $i++)
                                          {                                                               

                                           echo "<tr>";                                                   

                                           echo "<td>".$array_guichetier[$i]['Login_guichetier']."</td>" ;

                                           echo "<td><input type='text' class='form-control' value='".$array_guichetier[$i]['prenom_guichetier']."' /> </td>" ;
                                           
                                           echo "<td><input type='text' class='form-control' value='".$array_guichetier[$i]['nom_guichetier']."' /></td>" ;
                                           
                                           if ($array_guichetier[$i]['sexe_guichetier']=='H')
                                                  $sexe_alter='F';
                                                elseif ($array_guichetier[$i]['sexe_guichetier']=='F') 
                                                 {
                                                    $sexe_alter='H';
                                                 } 
                                               
                                             
                                               

                                           echo "<td><select ><option value='".$array_guichetier[$i]['sexe_guichetier']."'>".$array_guichetier[$i]['sexe_guichetier']."</option>  <option value='".$sexe_alter."'>".$sexe_alter."</option>  </select> </td>" ;  

                                           echo "<td>guichetier</td>" ;
                                           
                                          

                                            
                                            echo "</tr>";

                                            
                                         
                                         } 

                                        
                                      ?>




                                   </tbody>

                                  
                             </table>
                            
                        </div>
                    </div>

                     <div class="row">
                              <div class='col-lg-offset-5'>
                                 <button class='icon-save btn btn-info ' data-toggle="popover" data-placement="top" data-content="valider la modification des utilisateurs cochés  ">Terminer modification </button>
                                 <button class='icon-delete btn btn-danger' data-toggle="popover" data-placement="top" data-content="supprimer les utilisateurs cochés ">Supprimer </button>  
  

                             </div>
                                     
                         
                       </div> 

 


                  <?php require_once 'footer.php';?> 



           </div>


    </body>



</html>