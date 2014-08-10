<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width" charset='utf-8'/>
               <script src="js/jquery.js"></script>
               <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
               <link href="media/css/jquery.dataTables.css" rel="stylesheet">
               <script src="Bootstrap/js/bootstrap.js"></script>
               <script src="media/js/jquery.dataTables.js"></script>

               <script type="text/javascript">
                
                function getRequete ()
                   {
                      if (window.XMLHttpRequest) // Mozilla, Safari, ...
                         Request = new XMLHttpRequest();
                    else 
                        if (window.ActiveXObject) // IE
                              Request = new ActiveXObject("Microsoft.XMLHTTP");

                     return Request;
                    
                   }
               
                $(document).ready(function () 
                {
                    var count=parseInt( $('#option_count').val() );
                                      
                      $('#infos').modal('show');


                      $('#button').attr('disabled','true');

                                     
                    
                    $('button#close_modal').click(function ()
                     {
                          $('#infos').modal('hide');
                     });

                     var table = $('#tableau').DataTable({"ordering": false});
                 
                       
                         $('#tableau tbody').on( 'click', 'span.icon-delete', function () 
                         {
                            if (confirm('Voulez vous vraiment supprimer cette ligne ?'))                              

                                     table.row($(this).parents('tr')).remove().draw();
                                    
                         } );

                       


                       $('#tableau tbody').on( 'click', 'span.icon-save', function () 
                           {
                              if (confirm('Voulez vous vraiment valider cette ligne ?')) 
                              {
                                  var id = encodeURIComponent( $(this).parents('tr').attr('id') );
                                  if ($('#'+id+' td input:eq(0)').val()!='')
                                   {
                                      param1=$('#'+id+' td input:eq(0)').val();
                                      param3=$('#'+id+' td select').val();
                                  
                                      if ($('#'+id+' td input:eq(1)').is(':checked')) 
                                              param2='DUT';   
                                         else
                                          param2='NULL';
                                
                                        

                                         httpRequest=getRequete();
                                         httpRequest.open("POST",'index.php?action=create_opt');
                                         httpRequest.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                         corps="param0="+encodeURIComponent($("#Num").val())+"&param1="+encodeURIComponent(param1)+"&param2="+encodeURIComponent(param2)
                                         +"&param3="+encodeURIComponent(param3);
                                         httpRequest.send(corps);
                                  
                                     
                              
                                       $('#'+id+' td input:eq(0)').attr('disabled','true');
                                       $('#'+id+' td select').attr('disabled','true');
                                       $('#'+id+' td input:eq(1)').attr('disabled','true');
                                       $('#'+id+' td span.icon-save').attr('disabled','true');
                                       count--;      

                                                         
  
                                   }

                                   else
                                    alert("Veuillez saisire le nom de l'option s'il vou plait !!!");
                               }

                              

                           });
                 
                      
                 

                      

                    
                });

               </script>
              
     </head>

     <style type="text/css">

         .form-control{width:190px;margin: 3px;}
         #tableau{width: 70%;
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
                           Maintenant l'etape qui suit consiste saisir le nom des options du departement et des cycles de formations disponibles 

                      </div>

                </div>
              </div> 
         </div>

           <div class="row">
               
             <div class="col-lg-offset-5" style='margin-bottom:20px'>
                

             </div>  
 
           </div>
               
                
             <div class='row'>

                              
               <form method='POST'  action='index.php'>

               <?php echo'<input id="Num" type="hidden" value="'.$nbr.'" />' ?> ;

                <?php echo'<input id="option_count" type="hidden" value="'.$nb_option.'" />' ?> ;

                
               

                <table id='tableau' cellpadding='0' cellspacing='0' border='0' class='display'>
                  <thead>
                     <tr>
                        <th >Nom de l'option</th>
                        <th >Formations disponibles</th>
                        <th >Actions</th>
                     </tr>
                   </thead>

                      <tfoot>
                           <tr>
                              <th >Nom de l'option</th>
                              <th >Formations disponibles</th>
                              <th >Actions</th>
                           </tr>
                   </tfoot>


                   <tbody>

                     <?php
                     
                      
                      for ($i=0;$i<$nb_option;$i++)
                       {
                           

                           echo "<tr id='".$i."' >";                                                   

                           echo "<td><input type='text' class='form-control ' required /> </td>" ;

                           echo "<td><input type='checkbox' name='dut'  style='margin-right:20px;' title='cochez cette case si il existe la formation de premiere cycle'  /><select name='cycle_2'  title='selectionner le choix pour le deuxieme cycle'> <option>NEANT</option> <option>DIC</option> <option>DESCAF</option></select>  </td>" ;
                           
                           
                            
                            echo "<td>
                                      <span class='btn  icon-save glyphicon glyphicon-floppy-save' title='valider le parametrage'></span>
                                      <span class='btn  icon-delete glyphicon glyphicon-remove ' title='supprimer la ligne '></span>
                                                                  
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
             
               
                 
           </div>

       


      </div>


     <?php require_once 'footer.php';?>
    </div>


  </body>

</html>