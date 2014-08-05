<!doctype html>

     <head>
             <meta name="viewport" content="width=device-width" />
     	       <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.js"></script>
            
     </head>
     
     <style type="text/css">
           .row
           {
              margin-top: 15%;

            }
            .form-control{margin-bottom: 5%;}
     </style>
  <body>
  	    
        <div class="container">
  		                         
             <div class="row jumbotron" >
              
                   <div class="col-xs-6 col-xs-offset-3" >

                         <form  method="POST" action="index.php?action=connecter" >

                           <h3 class='col-xs-offset-4'>Ouverture Session</h3>
                           <select class='form-control col-lg-offset-5' name='user'>
                             <option>admin</option>
                             <option>agent</option>
                             <option>guichetier</option>
                           </select>

                           <input class='form-control ' name="login" autocomplete='off' required placeholder='Login '>
                           <input class='form-control  ' name="password" type='password' required  placeholder="Mot De Passe">
                          
        
                         <button id='valider' type='submit' class="btn btn-primary col-lg-offset-5 " > 
                          <span class='glyphicon glyphicon-thumbs-up'></span> valider
                        </button>
                         
                         </form>
                   </div>
                 
             </div>

               
              <?php require_once 'footer.php';?>   
           </div>      
       
        
      


  	



  	


  </body>

</html>