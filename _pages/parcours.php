<?php
$retour = $_GET['souscat'];

$array = array();
$exercice = new Exercice($array);
$exercicemanager = new ExerciceManager($bdd);
$parcours = new Company($array);
$parcoursmanager = new CompaniesManager($bdd);

/*récupération des objets en base*/
$exercicemanager = $exercicemanager->getList();


?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                <i class="fas fa-dumbbell font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">Exercices</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-cloud-upload"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-wrench"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-trash"></i>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                <!-- BEGIN FORM-->
                <form action="<?php echo URLHOST."_pages/_post/creer_exercice.php"; ?>" class="form-horizontal form-inline form-row-seperated" method="post" id="creer_exercice" name="creer_exercice">
                    <div class="form-body">
                        <div class="form-group col-md-12">
                            <label class="control-label col-md-3">Créer un exercice</label>
                            <div class="col-md-6">
                                <div class="input-icon">
                                    <input type="text" class="form-control" id="nom_exercice" name="nom_exercice" placeholder="Ex : Développé couché">
                                    <button id="creer" name="creer" title="Ajouter une série" type="submit" class="btn green" > Créer</button>
                                </div>
                            </div>
                        </div>  
                    </div>
                </form>
                <!-- END FORM-->
                </div>
                <div class="row" style="padding-top: 20px; border-top: 2px solid #bbb; margin-top: 20px;">
                    <table class="table table-striped table-bordered table-hover dt-responsive sample_3" width="100%" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="all">Ajouter</th>
                                <th class="all">Nom</th>
                                <th class="min-tablet">Modifier</th>
                                <th class="min-phone-l">Supprimer / Réactiver</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php

                            foreach($exercicemanager as $exercice) {
                        ?>
                            <tr>
                                <td><button id="ajout_<?php echo $exercice->getIdExercice(); ?>" title="Ajouter l'exercice" class="btn green" style="background-color: transparent; border-color: transparent; color: #32c5d2;"><i class="fas fa-plus-circle"></i></button></td>
                                <td><?php echo $exercice->getName(); ?></td>
                                <td><a class="btn blue-steel" href="<?php echo URLHOST.'modifier_exercice/'.$exercice->getIdExercice(); ?>"><i class="fas fa-edit" alt="Editer"></i> Modifier</a></td>
                                <?php
                                    echo '<td><a class="btn red-mint" data-placement="top" data-toggle="confirmation" data-title="Supprimer l\'exercice '.$exercice->getName().' ?" data-content="ATTENTION ! La suppression est irréversible !" data-btn-ok-label="Supprimer" data-btn-ok-class="btn-success" data-btn-cancel-label="Annuler" data-btn-cancel-class="btn-danger" data-href="'.URLHOST.'_pages/_post/supprimer_exercice.php?idExercice='.$exercice->getIdExercice().'"><i class="fas fa-trash-alt" alt="Supprimer"></i> Supprimer</a></td>';
                                ?>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                <i class="fas fa-running font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">Le parcours</span>
                </div>
                <div class="actions">
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-cloud-upload"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-wrench"></i>
                    </a>
                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                        <i class="icon-trash"></i>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <!-- BEGIN FORM-->
                    <form action="index.html" class="form-horizontal form-inline form-row-seperated">
                        <div class="form-body">
                            <div class="form-group col-md-12">
                                
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#ajout').click(function(){

            // get the last DIV which ID starts with ^= "klon"
            var $div = $('div[id^="ligneDevis"]:last').data( "arr", [ 1 ] );
            var $textarea = $('textarea[id^="descriptionDevis"]:last').data( "txt", [ 1 ] );
            // Read the Number from that DIV's ID (i.e: 3 from "klon3")
            // And increment that number by 1
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;

            // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
            var $klon = $div.clone(true).find(".help-block-error").text("").end().find(".has-error").removeClass("has-error").end().find("input,textarea").val("").end().find('textarea[id^="descriptionDevis"]:last').prop('id', 'descriptionDevis'+num ).end().find('textarea[name^="descriptionDevis"]:last').prop('name', 'descriptionDevis['+num+']' ).end().find('input[name^="quantiteDevis"]:last').prop('name', 'quantiteDevis['+num+']' ).end().find('input[name^="remiseDevis"]:last').prop('name', 'remiseDevis['+num+']' ).end().find('select[name^="taxeDevis"]:last').prop('name', 'taxeDevis['+num+']' ).end().find('select[id^="taxeDevis"]:last').prop('id', 'taxeDevis'+num ).end().find('input[name^="prixDevis"]:last').prop('name', 'prixDevis['+num+']' ).end().find('input[id^="prixDevis"]:last').prop('id', 'prixDevis'+num ).end().find('button[id^="supprDevis"]:last').prop('id', 'supprDevis'+num ).end().find('button[id^="supprDevis"]:last').attr('onclick', 'supprLigneDevis('+num+')' ).end().find('div[id^="divsupprDevis"]:last').prop('id', 'divsupprDevis'+num ).end().find('div[id="divsupprDevis'+num+'"]').css('display','' ).end().find('div[id="divsupprDevis'+num+'"]').css('display','block' ).end().prop('id', 'ligneDevis'+num );

            // Finally insert $klon wherever you want
            $("div[id*='divsupprDevis']").css('display','' );
            $("div[id*='divsupprDevis']").css('display','block' );
            $div.after( $klon.data( "arr", $.extend( [], $div.data( "arr" ) ) ) );

            $("#descriptionDevis"+num).each(function(){
                $(this).rules("add", {
                    required: true
                });
            });
            $("#taxeDevis"+num).each(function(){
                $(this).rules("add", {
                    required: true
                });
            });
            $("#prixDevis"+num).each(function(){
                $(this).rules("add", {
                    required: true
                });
            });

        });
    });

    function supprSerie(selected){
        var nbDiv = $("div[class*='ligneDevis']").length;
        var selectedDiv = $("div[id='ligneDevis"+selected+"']");
        if(nbDiv>1){
            selectedDiv.remove();
        }else{
            selectedDiv.find('div[id="divsupprDevis'+selected+'"]').css('display','' ).end();
            selectedDiv.find('div[id="divsupprDevis'+selected+'"]').css('display','none' ).end();
            alert("Il n'est pas possible de supprimer la dernière ligne du devis !");
        }
    }
</script>