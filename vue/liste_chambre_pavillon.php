<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width ;text/html;  charset='utf-8' "/>
     	         <script src="js/jquery.js"></script>
               <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
               <link href="media/css/jquery.dataTables.css" rel="stylesheet">
               <script src="Bootstrap/js/bootstrap.js"></script>
               <script src="Bootstrap/js/scripts.js"></script>
               <script src="media/js/jquery.dataTables.js"></script>
              
     </head>

      <script type="text/javascript">
            $(document).ready(function() 
            {
                            
             $('#button').submit(function () {
               
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

             });

       } );
        



      </script>

     <style type="text/css">

         .form-control{width:110px;margin: 3px;}
         table{width: 50%;
         }
         tr{height:20px;
            width:120px;}
        td,th{
             width:70px;
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



           
             <div id='couloir' class="row">
             

                <caption >Liste des couloirs du <?php echo$nom_pav?></caption>

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














           <div class="row" style='margin-top:60px'>
               
             <div class="col-lg-offset-5" style='margin-bottom:20px'>
                <caption >Liste chambre du <?php echo$nom_pav?></caption>

             </div>  
 
           </div>
               
                
             <div class='row'>

                              
               <form method='POST' action='index.php?action=validate'>

                  

                <table id='tableau' cellpadding='0' cellspacing='0' border='0' class='display'>
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

                           echo "<td><input type='text' class='form-control '   value='".$key["Code_chambre"]."'"."/> </td>" ;

                           echo "<td><input type='text' class='form-control'   value='".$key["Ref_Couloir"]."'"."/> </td>" ;
                           
                           
                            
                            echo "<td>
                                      <span class='btn  icon-update glyphicon glyphicon-floppy-save' title='enregistrer la modification'></span>
                                      <span class='btn  icon-delete glyphicon glyphicon-remove ' title='supprimer la ligne choisie'></span>
                                                                  
                                  </td>";



                            
                            echo "</tr>";

                            
                         
                         } 

                        
                      ?>




                   </tbody>

                  
                 </table>

                  <button id="button" type='submit' class="btn btn-primary col-lg-offset-5 " > 
                          <span class='glyphicon glyphiconok'></span> Terminer

                   </button>

               </form> 
              



             </div>







                           
                   
                 
             
         <?php require_once 'footer.php';?>      
                 
      </div>

       


  		



  	


  </body>

</html>