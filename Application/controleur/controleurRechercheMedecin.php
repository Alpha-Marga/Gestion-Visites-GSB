

<?php

include_once ("$racine/modele/medecinDAO.php");
include_once ("$racine/modele/visiteur.php");
include_once ("$racine/modele/visiteurDAO.php");
include_once ("$racine/modele/rapport.php");
include_once ("$racine/modele/rapportDAO.php");
include_once ("$racine/modele/offrir.php");
include_once ("$racine/modele/offrirDAO.php");
include_once ("$racine/modele/famille.php");
include_once ("$racine/modele/familleDAO.php");


// RECUPERATION DE L'IDENTIFIANT DU VISITEUR ET LE DEBUT DE NOM DU MEDECIN
if(isset($_POST["idVisiteur"]) && isset($_POST["nomMedecin"])){
    $idenVisiteur = $_POST["idVisiteur"];
    $nomMedecin = strtoupper($_POST["nomMedecin"]);

// CHARGEMENT DU VISITEUR
    $leVisiteur = visiteurDAO::getunVisiteur($idenVisiteur);
    
// CHARGEMENTS DE MEDECINS A PARTIR DE LEUR DEBUT DE NOM
    $lesMedecins = medecinDAO::getMedecinByNom($nomMedecin);
    
    if($lesMedecins != null){  
        include("$racine/vue/entete.html.php");
        include("$racine/vue/vueRechercheMedecin.php");
        include "$racine/vue/pied.html.php";
    }
    else{
        include("$racine/vue/entete.html.php");
        include("$racine/vue/accueilVisiteVue.php");
    }
}

