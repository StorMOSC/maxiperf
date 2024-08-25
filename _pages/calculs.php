<div class="row">
    <div class="col-md-12">
        <div class="note note-success">
            <h3>Résumé de la séance</h3>
            <p> Retracez votre parcours et voyez comment vous évoluez !</p>
        </div>
        <!-- BEGIN PORTLET-->
        <div class="portlet light form-fit ">
            <div class="portlet-title">
                <div class="caption">
                <i class="fas fa-calculator font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">Calculs</span>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="row">
                    <!-- BEGIN FORM-->
                    <form action="" class="form-horizontal form-inline form-row-seperated">
                        <div class="form-body">
                            <div class="form-group col-md-12">
                                <label class="control-label col-md-3">IMC</label>
                                <div class="input-icon">
                                    <input type="number" class="form-control" id="poids" placeholder="Mon poids">
                                    <input type="number" class="form-control" id="taille" placeholder="Ma taille">
                                    <button id="imc" type="submit" class="btn dark" >Calculer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
        <div class="portlet light form-fit ">
            <div class="portlet-title">
                <div class="caption">
                <i class="fas fa-running font-dark"></i>
                    <span class="caption-subject font-dark bold uppercase">Répétition maximale</span>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="row">
                    <!-- BEGIN FORM-->
                    <form action="" class="form-horizontal form-inline form-row-seperated">
                        <div class="form-body">
                            <div class="form-group col-md-12">
                                <label class="control-label col-md-3">1 RM</label>
                                <div class="input-icon">
                                    <input type="number" class="form-control" id="poids_rm" placeholder="Poids">
                                    <select id="repetitions" class="form-control input-xsmall" style="padding-left: 0px !important;">
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
                                    <button id="rm" type="submit" class="btn dark" >Calculer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
                <div class="row">
                    <div id="resultat_1rm">
                        <div id="content_resultat_1rm">


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
<script>
$(document).ready((function() {
    $("#rm").on("click", (function(t) {
        $("#content_resultat_1rm").html('<div class="lds-ripple"><div></div><div></div></div>');
        if ($("#poids_rm").val() > 0) {
            $("#poids_rm").removeClass("invalid");
            alert("Ici");
        } else {
            $("#poids_rm").addClass("invalid");
            $("#resultat_1rm").addClass("no__form");
            alert("Là");

            $("#content_resultat_1rm").html('');
            return;
        }
        var repetitions = parseFloat($("#repetitions").val());
        var poids = parseFloat($("#poids_rm").val());

alert('Poids : '+poids+' - Répéts :'+repetitions);

        var maxRep = Math.round(poids / (1.0278 - (0.0278 * repetitions)));
        var persetange = 100;
        var repet_n = 1;

        var html_table = `<h2>FORMULE DE BRZYCKI</h2><table class="table table-striped table-bordered table-hover">
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
        alert('Table : '+html_table);
        
        //$("#resultat_1rm").removeClass("no__form");
        $("#content_resultat_1rm").html(html_table);
        
    }));
}));
</script>