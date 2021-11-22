<html>
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>GSB</title>
        <style type="text/css">
            @import url("css/bootstrap.css");
            @import url("css/corps.css");
            @import url("css/form.css");  
        </style>
        
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>


 <body>
     <header> 
<!-- Barre de navigation -->
        <nav class="navbar navbar-expand-lg nav navbar navbar-dark" style="background-color:#154360">
            <br>
           <div class="container-fluid">
                <br>
                
            <!-- Logo GSB (button accueil) -->    
             <div class="bar">
              <form action="./?action=accueilVisite" method="post">
                <input type="hidden" name="login" value="<?php print($leVisiteur->getLoginVisiteur())?>" /> 
                <input type="hidden" name="mdp" value="<?php print($leVisiteur->getMdpVisiteur())?>" />
                <input type="image" class="bar" src="image/gsb.png" width="80" height="40" align="right"/>
              </form>
             </div>
            
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" >
              <ul class="navbar-nav" align="center">
            
            <!-- Element "Profil" -->     
                <li class ="nav-item"><a class="nav-link " href="./?action=controleurProfil&id=<?php print($leVisiteur->getIdVisiteur())?>">Profil</a></li>
                
            <!-- Element "Rapport" -->     
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Rapport
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" style="background-color:#154360" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="./?action=controleurMesRapports&id=<?php print($leVisiteur->getIdVisiteur())?>">Mes rapports</a></li>
                    <li><a class="dropdown-item" href="./?action=controleurAjoutRapport&id=<?php print($leVisiteur->getIdVisiteur())?>">Créer un nouveau rapport</a></li>
                  </ul>
                </li>
                
           <!-- Element "Medecin" -->     
                <li class ="nav-item"><a class="nav-link " href="#">Medecin</a></li>

                <!-- Formulaire recherche medecin -->
                <li class ="nav-item">
                    <form  class ="form-inline" action="./?action=controleurRechercheMedecin" method="POST">
                        <section>
                            <div class="row">
                               <div class="col">
                          <input type="hidden" name="idVisiteur" value="<?php print($leVisiteur->getIdVisiteur());?>"/> 
                          <input type="hidden" name="login" value="<?php print($leVisiteur->getLoginVisiteur());?>"/>
                          <input type="hidden" name="mdp" value="<?php print($leVisiteur->getMdpVisiteur());?>"/> 
                          <input id="zone_text3" type="text" name="nomMedecin" placeholder=""/> 
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-success btn-sm">Rechercher</button>
                            </div>
                           </div>
                        </section>
                    </form>
                </li>
            <!-- Element deconnexion -->
                <li class ="nav-item"><a class="nav-link " href="./?action=deconnexion">Deconnexion</a></li>
          
              </ul>
            </div>
          </div>
        </nav>
    </header>