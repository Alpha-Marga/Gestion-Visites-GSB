<div class="container-fluid">
    <br><br><!-- comment -->
    <h2>Mon Profil</h2><br><br>

<div class="row">
    
<!-- Script permettant de masquer le contenu dans le buton "Modifier" -->
        <script>
        function showDiv() 
        {
         document.getElementById('sign-in').style.display = "block"; 
        }
        </script>
        
<!-- Affichage du profil modifié du visiteur-->
   <div class="col-md-6 mx-auto medecin" >
     <div class="col-md-12">
         <div class="row justify-content-center">
            
           <div class="col-5">
                <br>
               <div >
                <img align="center" src="image/avatar2.png" align="center" alt="alt"/><br>
               </div>
           </div>
           <div class="col-5">
               <br>
                
                 <p><b>Nom:</b>  <?= $leVisiteur->getNomVisiteur()  ?><br>
                     <b>Prénom:</b>  <?= $leVisiteur->getPrenomVisiteur() ?><br>
                     <b>Adresse:</b>  <?= $leVisiteur->getAdresseVisiteur()." ".$leVisiteur->getCPVisiteur()." ".$leVisiteur->getVilleVisiteur() ?><br>
                     <b>Login:</b>  <?= $leVisiteur->getLoginVisiteur() ?><br>
                     <b>Mot de passe:</b>  <?= $leVisiteur->getMdpVisiteur() ?><br>
                    <b>Date d'embauche:</b> <?= $leVisiteur->getdateEmbaucheVisiteur() ?><br>
                    <b>Time span:</b> <?= $leVisiteur->gettimespanVisiteur() ?><br><!-- comment -->
                    <?php if($leVisiteur->getticketVisiteur() != null){?>
                    <b>Ticket:</b> <?= $leVisiteur->getticketVisiteur() ?><br><!-- comment -->
                    <?php }
                    if($leVisiteur->getticketVisiteur() == null){?>
                    <b>Ticket:</b> Pas de ticket disponible <br><!-- comment -->
                    <?php } ?>
                    <b>Nombre de vistes réalisées: </b><?= $nbVisites ?><br>
                 </p>
           </div>
         </div>
         <br>

<!-- Buton "modifier" -->         
        <div align="center">
            <a href="#" type="submit" class="btn btn-secondary btn-sm" onclick="showDiv()" >Modifier</a>
            <br><br>  
        </div>
         
<!-- Affichage contenu masqué dans le buton "modifier" -->
<!-- Formulaire de modification d'informations du visiteur-->
        <div id="sign-in" class="login " style="display: none;">
            <form  class ="form-profil" action="./?action=miseAjour" method="POST" align="center" >
                <section><br>
                      <div class="form-group row" >

                     <div class="col-sm-10">
                      <input type="hidden" name="idProfil" value="<?php print($leVisiteur->getIdVisiteur());?>"/>
                       <label class="col-sm-3 col-form-label">Nom:</label>

                       <input id="zone_text2" type="text" name="nomVisiteur" value="<?php print($leVisiteur->getNomVisiteur());?>"  required/>
                        </div>
                   </div>
                   <div class="form-group row">
                        <div class="col-sm-10">
                       <label for="email" class="col-sm-3 col-form-label" >Prénom:</label>
                     <input id="zone_text2" type="text" name="prenomVisiteur" value="<?php print($leVisiteur->getPrenomVisiteur());?>"  required/>
                       </div>
                   </div>
                   <div class="form-group row">
                        <div class="col-sm-10">
                       <label for="email" class="col-sm-3 col-form-label" >Adresse:</label>
                      <input id="zone_text2" type="text" name="adresseVisiteur" value="<?php print($leVisiteur->getAdresseVisiteur());?>"  required/>
                       </div>
                   </div>
                   <div class="form-group row">
                        <div class="col-sm-10">
                       <label for="email" class="col-sm-3 col-form-label">Code Postal:</label>
                        <input id="zone_text2" type="text" name="CP" value="<?php print($leVisiteur->getCPVisiteur());?>"  required/>
                       </div>
                   </div>
                   <div class="form-group row">
                        <div class="col-sm-10">
                       <label for="email" class="col-sm-3 col-form-label">Ville:</label>
                    <input id="zone_text2" type="text" name="ville" value="<?php print($leVisiteur->getVilleVisiteur());?>"/>
                       </div>
                   </div>
                     <div class="form-group row">
                        <div class="col-sm-10">
                       <label for="email" class="col-sm-3 col-form-label">Login: </label>
                     <input id="zone_text2" type="text" name="login" value="<?php print($leVisiteur->getLoginVisiteur());?>"  required/>
                       </div>
                     </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                       <label for="email" class="col-sm-3 col-form-label">MDP:</label>
                       <input id="zone_text2" type="password" name="Mdp" value="<?php print($leVisiteur->getMdpVisiteur());?>"  required/>
                       </div>
                   </div>
                   <div class="form-group row">
                        <div class="col-sm-10">
                       <label for="email" class="col-sm-3 col-form-label">Confirmer:</label>
                        <input id="zone_text2" type="password" name="MdpC" placeholder="confirmer le mot de passe" required/>
                       </div>
                   </div>
                   <div class="form-group row">
                        <div class="col-sm-10">
                       <label for="email" class="col-sm-3 col-form-label">Embauche:</label>
                    <input id="zone_text2" type="date" name="dateEmbauche" value="<?php print($leVisiteur->getdateEmbaucheVisiteur());?>"/>
                       </div>
                     </div>
                     <div class="form-group row">
                        <div class="col-sm-10">
                       <label for="email" class="col-sm-3 col-form-label">Time span: </label>
                     <input id="zone_text2" type="number" name="timeSpan" value="<?php print($leVisiteur->gettimespanVisiteur());?>"  required/>
                       </div>
                     </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                       <label for="email" class="col-sm-3 col-form-label">Ticket: </label>
                     <input id="zone_text2" type="text" name="ticket" value="<?php print($leVisiteur->getticketVisiteur());?>"  />
                       </div>
                     </div>   
                       <br>
                    <div class="form-group row">
                        <div class="col-sm-11"> 

                       <button type="submit" class="btn btn-success btn-sm"/>Confirmer</button>
                    </div>
                       <br>
                    </div>
               </section>
            </form>
        
         </div> 
     </div>
   </div>
</div>
    
<br>
    
    <div class="row">

<!-- Affichage du dernier rapport réalisé par le visiteur -->
         <div class="col-md-9 mx-auto rapportModif" >
             <div class="col-md-12">
                 <div class="row justify-content-center">
                     <h4>Rapport de la dernière visite
                     </h4>
                     <div class="col-5">
                     <br/>  
                     <h5>Informations générales</h5><br>
                     <p><b>Date: </b> <?= $dernierRapport->getDateRapport() ?><br>
                         <b>Bilan: </b> <?= $dernierRapport->getBilan() ?><br>
                         <b>Motif:</b> <?= $dernierRapport->getMotif() ?><br><br></p>

                    <h5>Medecin concerné</h5><br>
                    <p><b>Nom: </b><?= $dernierRapport->getMedecin()->getNomMedecin()?><br>
                    <b>Prénom: </b><?= $dernierRapport->getMedecin()->getPrenomMedecin() ?><br>
                    <b>Adresse:</b>  <?=  $dernierRapport->getMedecin()->getAdresseMedecin() ?><br>
                    <b>Téléphone: </b><a id="tel" href="tel:<?=$dernierRapport->getMedecin()->getTelMedecin() ?>"><font color=white><i><?= $dernierRapport->getMedecin()->getTelMedecin() ?></i></font></a><br><br></p>
                     </div>
                    <div class="col-5">
                        <?php
                    $lesOffres = null;
                    $lesOffres = offrirDAO::getOffreDAO($dernierRapport->getIdRapport());
                    if($lesOffres != null){?>
                    <br>
                    <h5>Medicaments offerts </h5><br>
                     <?php
                    for($j=0; $j<count($lesOffres); $j++){
                        ?>
                    <p><b><?=$j+1?></b><br>
                    <b>Nom Commercial: </b><?=$lesOffres[$j]->getMedicament()->getNomCommercial()?><br>
                    <b>Famille: </b><?=$lesOffres[$j]->getMedicament()->getLaFamille()->getLibelleFamille()?><br>
                    <b>Composition: </b><?=$lesOffres[$j]->getMedicament()->getComposition()?><br> 
                    <b>Effets: </b><?=$lesOffres[$j]->getMedicament()->getEffets()?><br>
                    <b>Contre indications: </b><?=$lesOffres[$j]->getMedicament()->getContreIndication()." "?><br>
                    <b>Quantité offerte: </b><?=$lesOffres[$j]->getQuantite()?><br></p> 

                    <?php
                    }
                    }
                    else{?>
                 <br><br><br><br><br>
                    <b>Aucun medicament n'a été offert lors de la visite !</b><br>

                    <?php } 
                    ?>
                    </div>
                </div>
            </div>
        </div>      
    </div>

</div>
    
