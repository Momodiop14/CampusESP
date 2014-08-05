<header class="page-header">
         <div class="row">
                  <div class='col-xs-offset-3 col-xs-3'><img alt='logo' src="img/logo_esp.jpg"/></div>            
            </div>  
          <div class="row">                        
                 <div class=' col-xs-offset-9 col-xs-3'><?php echo $_SESSION['prenom']."  "."".$_SESSION['nom']?> </div>
          </div>
           <div class="row">
                 <div class='col-xs-offset-10'>

                      <a  class='btn btn-primary' href='index.php?action=logout' title="Se deconnecter"> 
                           <span class='glyphicon glyphicon-off'></span > 
                      </a>

                 </div>

                 
             </div>

      </header>
<div class='row '>

        <nav class='navbar navbar-default col-xs-offset-2 col-xs-8' role='navigation'>

               <div class='navbar-header collapse navbar-collapse'>
                       <ul class="nav navbar-nav">
                          <li ><a href="index.php"><span class='glyphicon glyphicon-home'></span></a></li>  
                          <li><a href="index.php?action=Codifier">Editer Etudiant</a></li>
                          <li><a href="index.php?action=reserver">Nouvelle Reservation</a></li>                           
                            
                           <li class='dropdown'  >
                            <a  href="" class="dropdown-toggle" data-toggle="dropdown">Etudiants <span class="caret"></span></a>
                                  
                                   <ul class='dropdown-menu' role='menu'>
                                    <li><a href="index.php?action=EditerEtudiant">Editer Etudiant</a></li>
                                    

                                    
                                   
                                    

                                  </ul>
                                  
                            </li>
                        </ul>

               </div>     
                     
      
      </nav>

     </div>

     
 

 