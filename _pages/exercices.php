<?php
require_once("_cfg/cfg.php");

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
        <div class="note note-success">
            <h3>Résumé de la séance</h3>
            <p> Retracez votre parcours et voyez comment vous évoluez !</p>
        </div>
        <!-- BEGIN PORTLET-->
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                <i class="fas fa-dumbbell font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">Sélection des exercices</span>
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
                <form action="" class="form-horizontal form-inline form-row-seperated">
                    <div class="form-body">
                        <div class="form-group col-md-12">
                            <label class="control-label col-md-3">Choix de l'exercice</label>
                            <div class="col-md-4">
                                <select id="exo_1" class="bs-select form-control bs-select-hidden" data-live-search="true" data-size="8">
                                    <option value="1">Développé couché (barre)</option>
                                    <option value="2">Squat</option>
                                    <option value="3">Soulevé de terre</option>
                                    <option value="4">Tirage dos</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div id="ligneSerie1" class="ligneSerie">
                                <label id="serie1" name="serie[1]" class="control-label col-md-3">Série 1</label>
                                <div class="col-md-8">
                                    <div class="input-icon">
                                        <input type="number" class="form-control" id="repet1" name="repet[1]" placeholder="Répétition">
                                        <input type="number" class="form-control" id="poids1" placeholder="Poids">
                                        <select id="type1" class="form-control input-xsmall" style="padding-left: 0px !important;">
                                            <option value="1">Kg</option>
                                            <option value="2">Minutes</option>
                                            <option value="3">-</option>
                                        </select>
                                        <button type="button" id="ajout_serie" title="Ajouter une série" class="btn green" style="background-color: transparent; border-color: transparent; color: #32c5d2;"><i class="fas fa-plus-circle"></i></button>
                                        <button type="button" title="Supprimer la ligne" id="supprSerie1" class="btn red" onclick="supprSerie(1);" style="background-color: transparent; border-color: transparent; color: #e7505a;"><i class="fas fa-minus-square"></i></button>
                                    </div>
                                </div>
                                <!--<div id="divsupprSerie1" style="text-align: right;" class="col-md-1">
                                    <div class="form-group" style="margin-left: 0px !important; margin-right: 0px !important;">
                                        
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label col-md-3"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn green">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
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
        $('#ajout_serie').click(function(){

            // get the last DIV which ID starts with ^= "klon"
            var $div = $('div[id^="ligneSerie"]:last').data( "arr", [ 1 ] );
            //var $textarea = $('textarea[id^="descriptionDevis"]:last').data( "txt", [ 1 ] );
            // Read the Number from that DIV's ID (i.e: 3 from "klon3")
            // And increment that number by 1
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;

            // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
            var $klon = $div.clone(true).find(".help-block-error").text("").end().find(".has-error").removeClass("has-error").end().find('label[name^="serie"]:last').prop('name', 'serie['+num+']' ).text("Série "+num).end().find('input[name^="repet"]:last').prop('name', 'repet['+num+']' ).end().find('input[name^="poids"]:last').prop('name', 'poids['+num+']' ).end().find('select[name^="type"]:last').prop('name', 'type['+num+']' ).end().find('select[id^="type"]:last').prop('id', 'type'+num ).end().find('button[id^="supprSerie"]:last').prop('id', 'supprSerie'+num ).end().find('button[id^="supprSerie"]:last').attr('onclick', 'supprSerie('+num+')' ).end().prop('id', 'ligneSerie'+num );

            // Finally insert $klon wherever you want
            /*$("div[id*='divsupprSerie']").css('display','' );
            $("div[id*='divsupprSerie']").css('display','block' );*/
            $div.after( $klon.data( "arr", $.extend( [], $div.data( "arr" ) ) ) );

            $("#repet"+num).each(function(){
                $(this).rules("add", {
                    required: true
                });
            });
            $("#poids"+num).each(function(){
                $(this).rules("add", {
                    required: true
                });
            });

        });
    });

    function supprSerie(selected){
        var nbDiv = $("div[class*='ligneSerie']").length;
        var selectedDiv = $("div[id='ligneSerie"+selected+"']");
        if(nbDiv>1){
            selectedDiv.remove();
        }else{
            selectedDiv.find('div[id="divsupprSerie'+selected+'"]').css('display','' ).end();
            selectedDiv.find('div[id="divsupprSerie'+selected+'"]').css('display','none' ).end();
            alert("Il n'est pas possible de supprimer la dernière ligne des séries !");
        }
    }
</script>