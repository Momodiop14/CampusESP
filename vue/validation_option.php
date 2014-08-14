<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width" charset='utf-8'/>
               <script src="js/jquery.js"></script>
               <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
               <link href="media/css/jquery.dataTables.css" rel="stylesheet">
               <script src="Bootstrap/js/bootstrap.js"></script>
               <script src="media/js/jquery.dataTables.js"></script>

               <script type="text/javascript">
                              
                $(document).ready(function () 
                {
                    var count=parseInt( $('#option_count').val() );
                                      
                      $('#infos').modal('show');


                      
                                     
                    
                    $('button#close_modal').click(function ()
                     {
                          $('#infos').modal('hide');
                     });

                   
                     var table = $('#tableau').DataTable({"ordering": false});
                 
                       
                         $('#tableau tbody').on( 'click', 'span.icon-delete', function () 
                         {
                            if (confirm('Voulez vous vraiment supprimer cette ligne ?'))                              
                                   {
                                     table.row($(this).parents('tr')).remove().draw();
                                   }
                                     
                                    
                         } );           

                    
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

                              
               <form method='POST'  action='index.php?action=create_opt'>

               <?php echo'<input name="num_dept" type="hidden" value="'.$nbr.'" />' ?> ;

                <?php echo'<input name="option_count" type="hidden" value="'.$nb_option.'" />' ?> ;

                
               

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

                           echo "<td><input type='text' name='nom_option".$i."' class='form-control ' required /> </td>" ;

                           echo "<td> <select name='dut".$i."'  title='selectionner le choix pour le premier cycle'> <option value='NULL'>NEANT</option> <option value='DUT'>DUT</option> </select>   <select name='cycle_2".$i."'  title='selectionner le choix pour le deuxieme cycle'> <option value='NEANT'>NEANT</option> <option value='DIC'>DIC</option> <option value='DESCAF'>DESCAF</option></select>  </td>" ;
                           
                           
                            
                            echo "<td>
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