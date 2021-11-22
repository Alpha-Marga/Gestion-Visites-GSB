

<div class="container-fluid"> <br><br><!-- comment -->
    <h2>Medecins</h2><br><br>
<div class="row">
<?php for($i=0; $i<count($lesMedecins); $i++){ ?>   
<!-- Affichage du profil medecin à la position "i" -->
   <div class="col-md-5 medecins" >
         <div class="col-md-12">
             <div class="row justify-content-center">
               <div class="col-5"><br>
                   <div >
                    <img align="center" src="image/medecin.png" align="center" alt="alt"/><br>
                   </div>
               </div>
               <div class="col-5"><br>
                     <p><b>Nom:</b>  <?= $lesMedecins[$i]->getNomMedecin()  ?><br><br>
                         <b>Prénom:</b>  <?= $lesMedecins[$i]->getPrenomMedecin() ?><br><br>
                         <b>Adresse:</b>  <?= $lesMedecins[$i]->getAdresseMedecin() ?><br><br>
                         <?php if($lesMedecins[$i]->getSpecialite() != null) {?>
                         <b>Spécialité Complémentaire:</b>  <?= $lesMedecins[$i]->getSpecialite() ?><br><br><!-- comment -->
                         <?php }?>
                         <b>Département:</b>  <?= $lesMedecins[$i]->getDepartement() ?><br><br>
                         <b>Téléphone: </b><a id="tel" href="tel:<?=$lesMedecins[$i]->getTelMedecin() ?>"><?=$lesMedecins[$i]->getTelMedecin() ?></a></p>
               </div>
               </div><br>           
<!-- Formulaire "Consulter" -->
               <div align="center">
                  <form  class ="form-inline" action="./?action=controleurMedecin" method="POST">
                      <section>
                          <input type="hidden" name="idVisiteur" value="<?php print($leVisiteur->getIdVisiteur());?>"/>
                          <input type="hidden" name="leMedecin" value="<?php print($lesMedecins[$i]->getIdMedecin());?>"/>
                          <button type="submit" class="btn btn-success btn-sm">Consulter</button>
                      </section>
                  </form>
               </div>
         </div><!-- comment -->
   </div>
<?php  } ?>
</div>
</div>
      