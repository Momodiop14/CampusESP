<!doctype html>
  <html>

     <head>
             <meta name="viewport" content="width=device-width;text/html" charset='utf-8' />
     	       <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.js"></script>
                         
             
           </head>

           <script type="text/javascript">
                 $(document).ready(function()

                   { 
                       $('#chx').change(function ()
                        {
                           if ( $('#chx').val()=='NULL') 
                             {
                                $('#chx').val('DUT');
                                 alert($('#chx').val());
                             }
                            else

                           if ( $('#chx').val()=='DUT') 
                             {
                                $('#chx').val('NULL');
                                 alert($('#chx').val());
                             }
                          
                       });
                      
                   }); 



           </script>
           


  <body>
  	<div class="container">
  	
  		<?php require_once('menu_admin.php'); ?>

      <section class='col-lg-12 col-lg-offset-3'>
           

           <div class=" panel panel-default">
            
             <div class="panel-heading">
              
                 <h3 class=" panel-title"><span class='col-xs-offset-4'> Ajout option </span></h3>
             
             </div>
             
             <div class="panel-body">
              
                   <form id="form_dep" action='index.php?action=create_opt' method="POST">
                    
                        <input type='text' class='form-control ' name='param1' placeholder="saisir le nom de l'option Ex:Telecoms-Reseaux" required />
                         <div class="row">
                            

                             <div class="col-lg-9 col-lg-offset-1">

                                 <label >Selectionner le departement correspondant</label>

                                 <select name='param0' class='form-control'>
  
                                  <?php
                                     foreach ($array_dept as $key) 
                                     {
                                        echo "<option value='".$key['Id_dept']."'>".$key['nom_departement']."</option>";
                                     }

                                  ?>                

                                 </select>
                           
                              </div>

                          </div>

                           <div class="row">

                             <div class="col-lg-9 col-lg-offset-1">
                                 <label for='form'>cochez la case si la formation DUT est disponible</label>
                                 <input type='checkbox' id='chx' value='NULL' name='param2'    />
                             </div>


                           </div>

                           <div class="row">
                               <div class="col-lg-9 col-lg-offset-1">
 
                                <label for='form'>selectionner le choix pour le deuxieme cycle</label>
                                  <select id='form' class='form-control' name='param3'  > 
                                       <option>NEANT</option>
                                       <option>DIC</option>
                                       <option>DESCAF</option>
                                 </select>
                               </div>
                            </div>   
                                                        
                                                               
  
                   <button id="valider" type='submit'  class="btn btn-primary col-lg-offset-4 " > 
                    <span class='glyphicon glyphicon-thumbs-up'></span> valider
                  </button>

                   </form>
  
                   
                 
             </div>

               
                 
           </div>

       </section>


  		<?php require_once 'footer.php';?>

      </div>



  	

  </body>

</html>