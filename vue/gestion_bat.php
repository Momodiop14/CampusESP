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

                 });
             
             </script>

                          

    </head>

    <body>

           <div class="container">
               
                  <?php require_once('menu_admin.php'); ?>


                      <div class="row">

                             <div class="col-lg-5 jumbotron col-lg-offset-1">                   
                               

                                  
                             
                             </div>

                              <div class="col-lg-5 jumbotron col-lg-offset-1">                   
                               

                                  
                             
                             </div>


                    </div>

     

 


                  <?php require_once 'footer.php';?> 



           </div>


    </body>



</html>