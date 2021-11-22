
       <div class="container h-100">
        <div class="row align-items-center h-75" style="display: inline">
            <br><br>
        <!-- Photo Profil -->
            <div class="col-3 mx-auto accueil" >
             <a type="submit" href="./?action=controleurProfil&id=<?php print($leVisiteur->getIdVisiteur())?>">
                <div class="jumbotron">
                    <br>
                    <img src="image/avatar2.png" align="center" alt="alt"/><br>
                    <h4><font color=white><?=$leVisiteur->getNomVisiteur()." "."&nbsp".$leVisiteur->getPrenomVisiteur()?></font><br/></h4>

                </div> 
             </a>
            </div><br>
            
           <h1>Bienvenue sur votre espace visiteur !</h1> 
           
            </div>
           <br><br>
    
    <!-- Buttons de navigation -->
    
        <div class="container col-11 mx-auto">

           <a type="submit" class="btn btn-theme btn-lg" href="./?action=controleurMesRapports&id=<?php print($leVisiteur->getIdVisiteur())?>">Mes Rapports</a>

           <a type="submit" class="btn btn-theme btn-lg" href="./?action=controleurAjoutRapport&id=<?php print($leVisiteur->getIdVisiteur())?>">Créer Rapport</a>

           <a type="submit" class="btn btn-theme btn-lg" href="./?action=controleurProfil&id=<?php print($leVisiteur->getIdVisiteur())?>">Mon Profil</a>


        </div>
 
        <br><br><br><br>
    
    <!-- Copyright -->
	<p align="center">© 2021 GSB Gestion Visites. All rights reserved | Design by Galaxy Swiss Bourdin</p>
        <br>

   </div>




