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
            <div class="portlet-body form">
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
                            <div class="col-md-4">
                                <button type="submit" class="btn green">Ajouter</button>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label col-md-3">Série 1</label>
                            <div class="input-icon">
                                <input type="number" class="form-control" id="repet_1" placeholder="Répétition">
                                <input type="number" class="form-control" id="poids_1" placeholder="Poids">
                                <select id="type_1" class="form-control input-xsmall" style="padding-left: 0px !important;">
                                    <option value="1">Kg</option>
                                    <option value="2">Minutes</option>
                                    <option value="3">-</option>
                                </select>
                                <button id="ajout_1" type="submit" class="btn green" style="background-color: transparent; border-color: transparent; color: #32c5d2;"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
        <div class="portlet light form-fit ">
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
            <div class="portlet-body form">
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