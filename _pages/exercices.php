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
                <form action="index.html" class="form-horizontal form-inline form-row-seperated">
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
                            <div id="serie_1">
                                <label class="control-label col-md-3">Série 1</label>
                                <div class="col-md-8">
                                    <div class="input-icon">
                                        <input type="number" class="form-control" id="repet_1" placeholder="Répétition">
                                        <input type="number" class="form-control" id="poids_1" placeholder="Poids">
                                        <select id="type_1" class="form-control input-xsmall" style="padding-left: 0px !important;">
                                            <option value="1">Kg</option>
                                            <option value="2">Minutes</option>
                                            <option value="3">-</option>
                                        </select>
                                        <button id="ajout_1" title="Ajouter une série" type="submit" class="btn green" style="background-color: transparent; border-color: transparent; color: #32c5d2;"><i class="fas fa-plus-circle"></i></button>
                                    </div>
                                </div>
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