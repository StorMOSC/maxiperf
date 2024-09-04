<?php
require_once("_cfg/cfg.php");

$retour = $_GET['souscat'];

$array = array();
$exercice = new Exercice($array);
$exercicemanager = new ExerciceManager($bdd);
$parcours = new Company($array);
$parcoursmanager = new CompaniesManager($bdd);

/*récupération des objets en base*/
$exercicemanager = $exercicemanager->getListAllExercices();

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
            </div>
            <div class="portlet-body">
                <div class="row">
                <!-- BEGIN FORM-->
                <form method="post" id="fromExercice" action="" class="form-horizontal form-inline form-row-seperated">
                    <div class="form-body">
                        <div class="form-group col-md-12" style="margin-bottom: 3px;">
                            <label class="control-label col-md-3">Nom du parcours</label>
                            <div class="col-md-3">
                                <div class="input-group input-medium">
                                    <input type="text" class="form-control" id="nom" name="nom" value="Parcours du <?php echo date("d-m-Y"); ?>" placeholder="Parcours du <?php echo date("d-m-Y"); ?>">
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="margin-bottom: 3px;">
                            <label class="control-label col-md-3">Date de la séance</label>
                            <div class="col-md-3">
                                <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-lang="FR-fr">
                                    <input name="date" id="date" type="text" class="form-control" readonly value="<?php echo date("d-m-Y"); ?>">
                                    <span class="input-group-btn">
                                        <button class="btn default" type="button">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label col-md-3">Choix de l'exercice</label>
                            <div class="col-md-4">
                                <select id="exercice" name="exercice" class="bs-select form-control bs-select-hidden" data-live-search="true" data-size="8">
                                <?php
                                    $listExercices = array();
                                    foreach($exercicemanager as $exercice) {
                                        $listExercices[$exercice->getIdExercice()] =  $exercice->getName();
                                        
                                        echo $exercice->getIdExercice();
                                ?>
                                    <option value="<?php echo $exercice->getIdExercice(); ?>"><?php echo $exercice->getName(); ?></option>
                                <?php
                                    }
                                    //$listExercices = array_map('utf8_encode', $listExercices);
                                    $jsonListExercice = json_encode($listExercices, JSON_UNESCAPED_UNICODE);
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div id="ligneSerie1" class="ligneSerie">
                                <label id="serie1" name="serie[1]" class="control-label col-md-3">Série 1</label>
                                <div class="col-md-8">
                                    <div class="input-icon">
                                        <input type="number" class="form-control" id="repet1" name="repet[1]" placeholder="Répétition">
                                        <input type="number" class="form-control" id="poids1" name="poids[1]" placeholder="Poids">
                                        <select id="type1" name="type[1]" class="form-control input-xsmall" style="padding-left: 0px !important;">
                                            <option value="Kg">Kg</option>
                                            <option value="Minutes">Minutes</option>
                                            <option value="-">-</option>
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
                                <button id="ajouter" name="ajouter" type="submit" class="btn green">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
        <div class="portlet light " id="parcours_div" style="visibility: hidden;">
            <div class="portlet-title">
                <div class="caption">
                <i class="fas fa-running font-dark"></i>
                    <span id="titre_parcours" class="caption-subject font-dark bold uppercase"></span>
                </div>
                <div class="actions">
                <span id="date_parcours" class="caption-subject font-dark bold uppercase"></span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <!-- BEGIN FORM-->
                    <form action="<?php echo URLHOST."_pages/_post/creer_parcours.php"; ?>" class="form-horizontal form-inline form-row-seperated">
                        <div class="form-body">
                            <div class="form-group col-md-12" id="json_result">
                                
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
<?php
    echo "var jsonListExercice = ".$jsonListExercice;
?>
<script>
    $(document).ready(function() {

        /*{
            "nom":"Parcours du 02-09-2024",
            "date":"02-09-2024",
            "exercices":[{
                "nom_exo":"2",
                "series":[
                    {"num":1,"repet":"1","poids":"2","type":"Kg"},
                    {"num":2,"repet":"3","poids":"4","type":"Kg"}
                ]
            },
                {"jsonExercices":{
                    "nom_exo":"1",
                    "series":[
                        {"num":2,"repet":"3","poids":"4","type":"Kg"}]}},
                {"jsonExercices":{
                    "nom_exo":"1",
                    "series":[
                        {"num":2,"repet":"3","poids":"4","type":"Kg"}
                    ]
                }}
            ]
        }*/

        $('#fromExercice').submit(function (evt) {
            evt.preventDefault();
        });

        $('#ajout_serie').click(function(){

            // get the last DIV which ID starts with ^= "klon"
            var $div = $('div[id^="ligneSerie"]:last').data( "arr", [ 1 ] );
            //var $textarea = $('textarea[id^="descriptionDevis"]:last').data( "txt", [ 1 ] );
            // Read the Number from that DIV's ID (i.e: 3 from "klon3")
            // And increment that number by 1
            var num = parseInt( $div.prop("id").match(/\d+/g), 10 ) +1;

            // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
            var $klon = $div.clone(true).find(".help-block-error").text("").end().find(".has-error").removeClass("has-error").end().find('label[name^="serie"]:last').prop('name', 'serie['+num+']' ).text("Série "+num).end().find('input[name^="repet"]:last').prop('id', 'repet'+num).prop('name', 'repet['+num+']' ).end().find('input[name^="poids"]:last').prop('id', 'poids'+num).prop('name', 'poids['+num+']' ).end().find('select[name^="type"]:last').prop('id', 'type'+num).prop('name', 'type['+num+']' ).end().find('select[id^="type"]:last').prop('id', 'type'+num ).end().find('button[id^="supprSerie"]:last').prop('id', 'supprSerie'+num ).end().find('button[id^="supprSerie"]:last').attr('onclick', 'supprSerie('+num+')' ).end().prop('id', 'ligneSerie'+num );

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

            <?php
               // echo "var jsonListExercice = ".$jsonListExercice;
            ?>

            //console.log(JSON.stringify(jsonListExercice));

            var class_serie;
            var nb_serie;

            let nom_parcours_input = document.getElementById("nom");
            let nom_parcours = nom_parcours_input.value;

            let date_parcours_input = document.getElementById("date");
            let date_parcours = date_parcours_input.value;

            let nom_exercice_input = document.getElementById("exercice");
            let nom_exercice = nom_exercice_input.value;

            var jsonParcours = {};
            var jsonSerie = {};
            var jsonExercices = {};

            var num = 1;
            var num_input = 0;
            
            var repet_input = [];
            var repet;
            
            var poids_input = [];
            var poids;
            
            var type_input = [];
            var type;

            var jsonSerie_aff = "";
            var tabParcours = "";

            tabParcours = '<div class=\"panel panel-default\">';

        $('#ajouter').click(function(){

            class_serie = document.getElementsByClassName("ligneSerie");
            nb_serie = class_serie.length;

            if(jsonParcours.hasOwnProperty('nom')){

                nom_exercice_input = document.getElementById("exercice");
                nom_exercice = nom_exercice_input.value;
                
                alert("Présent !");
                num = 1;

                jsonExercices = {
                    "nom_exo":nom_exercice,
                    "series":[]
                }

                while(num <= nb_serie){

                    repet = document.getElementById("repet"+num).value;

                    poids = document.getElementById("poids"+num).value;

                    type = document.getElementById("type"+num).value;

                    jsonSerie = {
                        "num":num,
                        "repet":repet,
                        "poids":poids,
                        "type":type
                    };

                    jsonExercices["series"].push({"num":num,"repet":repet,"poids":poids,"type":type});

                    num_input++;
                    num++;

                }

                jsonParcours["exercices"].push(jsonExercices);

            }else{

                alert("Pas Présent !");

                jsonExercices = {
                    "nom_exo":nom_exercice,
                    "series":[]
                };

                while(num <= nb_serie){

                    repet = document.getElementById("repet"+num).value;
                    
                    poids = document.getElementById("poids"+num).value;
                    
                    type = document.getElementById("type"+num).value;

                    jsonSerie = {
                        "num":num,
                        "repet":repet,
                        "poids":poids,
                        "type":type
                    };

                    jsonExercices["series"].push({"num":num,"repet":repet,"poids":poids,"type":type});
                    jsonSerie_aff = jsonSerie_aff+" jsonSerie : "+JSON.stringify(jsonSerie)+" - ";

                    num_input++;
                    num++;

                }

                jsonParcours = {
                    "nom":nom_parcours,
                    "date":date_parcours,
                    "exercices":[jsonExercices]
                };

                Object.keys(jsonParcours.exercices).forEach(key => {
                    tabParcours += '<div class=\"panel-heading\"> '+jsonParcours.exercices[key].nom_exo+' </div>';

                    Object.keys(jsonParcours.exercices.series).forEach(key_serie => {
                        tabParcours += '<div class=\"panel-body\"> Répétitions : '+jsonParcours.exercices.series[key_serie].repet+' Poids / Durée : '+jsonParcours.exercices.series[key_serie].poids+' '+jsonParcours.exercices.series[key_serie].type+'</div>';
                    });
                });

                /*for(var k in jsonParcours["exercices"]){
                    

                    for(var j in jsonParcours["exercices"]["series"]){
                        
                    }
                }*/

            }
            tabParcours += '</div>';

            document.getElementById("parcours_div").style.visibility = "visible";

            document.getElementById("titre_parcours").innerHTML = jsonParcours.nom;
            document.getElementById("date_parcours").innerHTML = jsonParcours.date;
            document.getElementById("json_result").innerHTML = tabParcours;

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