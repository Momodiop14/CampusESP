<header class="page-header">
         <div class="row">
                  <div class='col-xs-offset-5 col-xs-3'><img alt='logo' src="img/logo_esp.jpg"/></div>            
            </div>  
          <div class="row">                        
                 <div class=' col-xs-offset-9 col-xs-3'><?php echo $_SESSION['prenom']."  "."".$_SESSION['nom']?> </div>
          </div>
           <div class="row">
                 <div class='col-xs-offset-8'>

                     <a  class='btn btn-primary' href='index.php?action=logout' title="Se deconnecter"> 
                           <span class='glyphicon glyphicon-user'></span > 
                      </a>

                 </div>

                 
             </div>

      </header>
<div class='row '>

        <nav class='navbar navbar-default col-xs-offset-2 col-xs-8' role='navigation'>

                  
                      <div class='navbar-header collapse navbar-collapse'>
                       <ul class="nav navbar-nav">
                          <li ><a href=""><span class='glyphicon glyphicon-home'></span></a></li>
                              

                            
                           <li class='dropdown' id='batiment' >
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion des Batiments <span class="caret"></span></a>
                                  
                                   <ul class='dropdown-menu' role='menu'>
                                    <li><a href="index.php?action=add_pav">Ajouter Pavillon</a></li>
                                    <li class="divider "></li>
                                    
                                   
                                    

                                  </ul>
                                  
                            </li>

                          <li class='dropdown' >
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Gestion des utilisateurs<span class="caret"></span> </a>
                                   <ul class='dropdown-menu' role='menu'>
                                    <li><a href="index.php?action=new_user">Nouvel utilisateur</a></li>
                                                                                                    
                                  </ul>
                          </li>

                          <li class='dropdown' id='reserv'>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Parametrage <span class="caret"></span></a>
                                   <ul class='dropdown-menu' role='menu'>
                                    <li><a href="">Parametrage reservation</a></li>
                                     <li><a href="">Nouvelle annee academique</a></li>
                                                                 
                                  </ul>

                          </li>

                          <li class='dropdown' id='sco' >
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion Scolarite <span class="caret"></span></a>
                                   <ul class='dropdown-menu' role='menu'>
                                    <li><a href="index.php?action=new_dept">Nouveau Departement</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index.php?action=new_formation">Nouvelle Formation</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index.php?action=new_option">Nouvelle Option</a></li>
                                                                 
                                                                 
                                  </ul>

                          </li>
                         
                       



                          


                       </div>
</div>
 

 