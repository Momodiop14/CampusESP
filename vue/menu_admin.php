 <header class="page-header">
         <div class="row">
                  <div class='col-xs-offset-3 col-xs-3'><img alt='logo' src="img/logo_esp.jpg"/></div>            
            </div>  
          <div class="row">                        
                 <div class=' col-xs-offset-9 col-xs-3'><?php echo htmlspecialchars($_SESSION['prenom'])."  "."".htmlspecialchars($_SESSION['nom'])?> </div>
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

        <nav class='navbar navbar-default col-xs-offset-3 col-xs-6' role='navigation'>

                  
                      <div class='navbar-header collapse navbar-collapse'>
                       <ul class="nav navbar-nav">
                          <li ><a href="index.php"><span class='glyphicon glyphicon-home'></span></a></li>
                              

                            
                           <li class='dropdown' id='batiment' >
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Batiments <span class="caret"></span></a>
                                  
                                   <ul class='dropdown-menu' role='menu'>
                                    
                                    <li><a href="index.php?action=add_pav">Ajouter Pavillon</a></li>
                                    
                              <?php 
                                  if ( isset($_SESSION['list_pav']) && count($_SESSION['list_pav']) >0 ) 
                                  {
                                    foreach ($_SESSION['list_pav'] as $key ) 

                                        {
                                          echo "<li class='divider'></li>";
                                          echo "<li><a href='index.php/".$key['nom_pavillon']."'>".$key['nom_pavillon']."</a></li>";
                                      
                                        }
                                    
                                  }
                              
                              ?>
                                   
                                    

                                  </ul>
                                  
                            </li>

                          <li class='dropdown' >
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Utilisateurs<span class="caret"></span> </a>
                                   <ul class='dropdown-menu' role='menu'>
                                    <li><a href="index.php?action=new_user">Nouvel utilisateur</a></li>
                                    <li class="divider "></li>

                                    <li><a href="index.php?action=gestion_user">Gestions des utilisateurs</a></li>
                                                                                                    
                                  </ul>
                          </li>

                          <li class='dropdown' id='reserv'>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Paramètrage <span class="caret"></span></a>
                                   <ul class='dropdown-menu' role='menu'>
                                    <li><a href="index.php?action=Reservation">Paramètrage réservation</a></li>
                                     <li><a href="">Nouvelle année académique</a></li>
                                                                 
                                  </ul>

                          </li>

                          <li class='dropdown' id='sco' >
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Scolarite <span class="caret"></span></a>
                                   <ul class='dropdown-menu' role='menu'>
                                    <li><a href="index.php?action=new_dept">Nouveau Département</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index.php?action=new_formation">Nouvelle Formation</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index.php?action=new_option">Nouvelle Option</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index.php?action=new_option">Gestions Département</a></li>
                                                                 
                                                                 
                                  </ul>

                          </li>
                         
                       



                          


                       </div>
</div>
 

 