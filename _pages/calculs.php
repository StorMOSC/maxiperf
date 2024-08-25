<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light form-fit ">
            <div class="portlet-title">
                <div class="caption">
                <i class="fas fa-weight font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">IMC</span>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 35px; padding-right: 35px; padding-top:10px;">
                        <p>L’indice de masse corporelle (IMC) permet d’évaluer rapidement votre corpulence simplement avec votre poids corporel et votre taille, quel que soit votre sexe.</p>
                    </div>
                    <!-- BEGIN FORM-->
                    <form action="" class="form-horizontal form-inline form-row-seperated">
                        <div class="form-body">
                            <div class="form-group col-md-12">
                                <label class="control-label col-md-3">IMC</label>
                                <div class="input-icon">
                                    <input type="number" class="form-control" id="poids" placeholder="Mon poids">
                                    <input type="number" class="form-control" id="taille" placeholder="Ma taille en cm">
                                    <button id="imc" class="btn dark" >Calculer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <div class="row">
                <div id="resultat_imc" class="col-md-12">
                        <div id="content_resultat_imc" style="padding-left: 20px; padding-right: 20px;">


                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
        <div class="portlet light form-fit ">
            <div class="portlet-title">
                <div class="caption">
                <i class="fas fa-tachometer-alt font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">1 Répétition maximale</span>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="row">
                    <div class="col-md-12" style="padding-left: 35px; padding-right: 35px; padding-top:10px;">
                        <p>Le 1RM (ou 1 réptition maximale) est le poids que l'on peut soulever une seule fois avec une technique correcte lors d'un exercice de musculation. Il sert à déterminer le niveau de force maximale d'un individu sur cet exercice. Connaître son 1RM permet d'adapter son programme de musculation en fonction de ses objectifs, en choisissant des charges et des séries adaptées à son niveau.</p>
                        <p>Il est également utile pour suivre son évolution au fil du temps, car il permet de mesurer précisément les progrès réalisés en termes de force. De plus, il offre la possibilité de comparer ses performances avec celles d'autres athlètes et d'établir des objectifs personnels.</p>
                        <p>Pour connaître votre 1 RM, remplissez le <b>poids</b> et le <b>nombre de répétitions</b> ci-dessous :</p>
                    </div>
                    <!-- BEGIN FORM-->
                    <form action="" class="form-horizontal form-inline form-row-seperated">
                        <div class="form-body">
                            <div class="form-group col-md-12">
                                <label class="control-label col-md-3">1 RM</label>
                                <div class="input-icon">
                                    <input type="number" class="form-control" id="poids_rm" placeholder="Poids">
                                    <select id="repetitions" title="Répétitions" class="form-control input-xsmall" style="padding-left: 0px !important;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    <button id="rm" class="btn dark" >Calculer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <div class="row">
                    <div id="resultat_1rm" class="col-md-12">
                        <div id="content_resultat_1rm" style="padding-left: 20px; padding-right: 20px;">


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<script>
/* Désactivation de la balise form pour afficher les résultats des scripts suivants */
$('form').submit(function(e) {
    e.preventDefault();
});

/* Calcul IMC */
$(document).ready((function() {
    $("#imc").on("click", (function(t) {
        $("#content_resultat_imc").html('<div class="lds-ripple"><div></div><div></div></div>');
        if ($("#poids").val() > 0) {
            $("#poids").removeClass("invalid");
            
        } else {
            $("#poids").addClass("invalid");
            $("#resultat").addClass("no__form");

            $("#content_resultat_imc").html('');
            return;
        }
        var taille = parseFloat($("#taille").val());
        var poids_imc = parseFloat($("#poids").val());
alert('Poids : '+poids_imc+' - Taille : '+taille);
        var imc = (poids_imc / (taille*taille))*100;

        var html_table_imc = `<div class="col-md-4"><h2 style="font-weight: 600;">Votre IMC est : `+imc.toFixed(1)+`</h2></div>`;
        
        html_table_imc += `<div class="col-md-6>"<table class="table table-striped table-bordered table-hover">
	            <tr>
	                <th>IMC</th>
	                <th>Interprétation OMS</th>
	            </tr>`;
        html_table_imc += `<tr>
	                <td>Moins de 18,5</td>
	                <td>Insuffisance pondérale (amigreur)</td>
	            </tr>
                <tr>
	                <td>18,5 à 25</td>
	                <td>Corpulance normale</td>
	            </tr>
                <tr>
	                <td>25 à 30</td>
	                <td>Surpoids</td>
	            </tr>
                <tr>
	                <td>30 à 35</td>
	                <td>Obésité modérée</td>
	            </tr>
                <tr>
	                <td>35 à 40</td>
	                <td>Obésité sévère</td>
	            </tr>
                <tr>
	                <td>Plus de 40</td>
	                <td>Obésité mobide ou massive</td>
	            </tr>`;
        html_table_imc += `</table></div>`;
        
        //$("#resultat_1rm").removeClass("no__form");
        $("#content_resultat_imc").html(html_table_imc);
        
    }));

    $("#rm").on("click", (function(t) {
        $("#content_resultat_1rm").html('<div class="lds-ripple"><div></div><div></div></div>');
        if ($("#poids_rm").val() > 0) {
            $("#poids_rm").removeClass("invalid");
            
        } else {
            $("#poids_rm").addClass("invalid");
            $("#resultat_1rm").addClass("no__form");

            $("#content_resultat_1rm").html('');
            return;
        }
        var repetitions = parseFloat($("#repetitions").val());
        var poids = parseFloat($("#poids_rm").val());

        var maxRep = Math.round(poids / (1.0278 - (0.0278 * repetitions)));
        var persetange = 100;
        var repet_n = 1;

        var html_table = `<h2 style="font-weight: 600;">FORMULE DE BRZYCKI</h2><table class="table table-striped table-bordered table-hover">
	            <tr>
	                <th>%RM</th>
	                <th>Poids</th>
	                <th>#RM</th>
	            </tr>`;
        for (var i = 1; i < 12; i++) {
            html_table += `<tr>
	                <td>` + persetange + `%</td>
	                <td>` + Math.round(maxRep * persetange / 100) + `</td>
	                <td>` + repet_n + ` rép</td>
	            </tr>`;
            persetange -= 5;
            if (repet_n == 1) { repet_n = 2 } else { repet_n += 2; }

        }
        html_table += `</table>`;
        
        //$("#resultat_1rm").removeClass("no__form");
        $("#content_resultat_1rm").html(html_table);
        
    }));
}));

/* Calcul du 1 RM */
$(document).ready((function() {
    
}));
</script>