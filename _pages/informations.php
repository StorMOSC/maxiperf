<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                <img src="<?php echo URLHOST; ?>images/logo_mp.jpg" class="img-responsive" alt=""> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> <?php echo $nom." ".$prenom; ?> </div>
                    <div class="profile-usertitle-job"> Abo : 3x /semaine </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li>
                            <a href="javascript;">
                                <i class="icon-envelope"></i> mail@mail.nc </a>
                        </li>
                        <li class="active">
                            <a href="page_user_profile_1_account.html">
                                <i class="icon-screen-smartphone"></i> xx.xx.xx </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
            <div class="portlet light ">
                <!-- STAT -->
                <div class="row list-separated profile-stat">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="uppercase profile-stat-title"> 37 </div>
                        <div class="uppercase profile-stat-text"> Scéances </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="uppercase profile-stat-title"> 51 </div>
                        <div class="uppercase profile-stat-text"> Excercices </div>
                    </div>
                </div>
                <!-- END STAT -->
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab">Info Personnelle</a>
                                </li>
                                <li>
                                    <a href="#tab_1_2" data-toggle="tab">Image de profil</a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab">Réinit. Mot de passe</a>
                                </li>
                                <li>
                                    <a href="#tab_1_4" data-toggle="tab">Santé</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- PERSONAL INFO TAB -->
                                <div class="tab-pane active" id="tab_1_1">
                                    <form role="form" action="#">
                                        <div class="form-group">
                                            <label class="control-label">Nom</label>
                                            <input type="text" placeholder="<?php echo $nom; ?>" class="form-control"> </div>
                                        <div class="form-group">
                                            <label class="control-label">Prénom</label>
                                            <input type="text" placeholder="<?php echo $prenom; ?>" class="form-control"> </div>
                                        <div class="form-group">
                                            <label class="control-label">Téléphone</label>
                                            <input type="text" placeholder="<?php echo $tel; ?>" class="form-control"> </div>
                                        <div class="form-group">
                                            <label class="control-label">Mail</label>
                                            <input type="text" placeholder="<?php echo $mail; ?>" class="form-control"> </div>
                                        <div class="margiv-top-10">
                                            <a href="javascript:;" class="btn green"> Valider </a>
                                            <a href="javascript:;" class="btn default"> Annuler </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- END PERSONAL INFO TAB -->
                                <!-- CHANGE AVATAR TAB -->
                                <div class="tab-pane" id="tab_1_2">
                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                                        eiusmod. </p>
                                    <form action="#" role="form">
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                                    <span class="btn default btn-file">
                                                        <span class="fileinput-new"> Select image </span>
                                                        <span class="fileinput-exists"> Change </span>
                                                        <input type="file" name="..."> </span>
                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                </div>
                                            </div>
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-danger">NOTE! </span>
                                                <span>Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                            </div>
                                        </div>
                                        <div class="margin-top-10">
                                            <a href="javascript:;" class="btn green"> Valider </a>
                                            <a href="javascript:;" class="btn default"> Annuler </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- END CHANGE AVATAR TAB -->
                                <!-- CHANGE PASSWORD TAB -->
                                <div class="tab-pane" id="tab_1_3">
                                    <form action="#">
                                        <div class="form-group">
                                            <label class="control-label">Mot de passe actuel</label>
                                            <input type="password" class="form-control"> </div>
                                        <div class="form-group">
                                            <label class="control-label">Nouveau mot de passe</label>
                                            <input type="password" class="form-control"> </div>
                                        <div class="form-group">
                                            <label class="control-label">Confirmer le nouveau mot de passe</label>
                                            <input type="password" class="form-control"> </div>
                                        <div class="margin-top-10">
                                            <a href="javascript:;" class="btn green"> Change Password </a>
                                            <a href="javascript:;" class="btn default"> Cancel </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- END CHANGE PASSWORD TAB -->
                                <!-- PRIVACY SETTINGS TAB -->
                                <div class="tab-pane" id="tab_1_4">
                                    <form action="#">
                                        <div class="form-group">
                                            <label class="control-label">Taille (m)</label>
                                            <input type="text" maxlength="4" placeholder="<?php echo $taille; ?> m" class="form-control"> </div>
                                        <div class="form-group">
                                            <label class="control-label">Poids (kg)</label>
                                            <input type="text" maxlength="3" placeholder="<?php echo $poids; ?> kg" class="form-control"> </div>
                                        <!--end profile-settings-->
                                        <div class="margin-top-10">
                                            <a href="javascript:;" class="btn red"> Valider </a>
                                            <a href="javascript:;" class="btn default"> Annuler </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- END PRIVACY SETTINGS TAB -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>