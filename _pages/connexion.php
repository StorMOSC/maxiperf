<?php session_start(); 

?>
<body class=" login">
        <div class="loginfond" style="background: url('<?php echo URLHOST; ?>images/fond.jpg'); background-size:cover;"></div>
        <!-- BEGIN LOGO -->
        <div class="logo">
            <img style="max-width: 200px;" src="../images/logo_transparent_blc.png" alt="" />
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="<?php echo URLHOST."_pages/_post/login_check.php"; ?>" method="post" >
                <h3 class="form-title">Connectez vous</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Entrez vos logins et mot de passe </span>
                </div>
                <?php if($_GET['cat']=="false"){ ?>
                <div class="alert alert-danger">
                    <button class="close" data-close="alert"></button>
                    <span> Login ou mot de passe incorrectes </span>
                </div>
                <?php } ?>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Login</label>
                    <div class="input-icon" style="border-left:2px solid #2f353b !important;">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Login" name="username" id="username" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Mot de passe</label>
                    <div class="input-icon" style="border-left:2px solid #2f353b !important;">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Mot de passe" name="password" id="password" /> </div>
                </div>
                <div class="form-actions">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1" /> Rester connecté </label>
                    <button type="submit" class="btn dark pull-right" id="valider" name="valider" value="valider"> Connexion </button>
                </div>
                <div class="forget-password">
                    <h4>Mot de passe oublié ?</h4>
                    <p> Pas de souci
                        <a href="javascript:;" id="forget-password"> ICI </a> pour réinitialiser votre mot de passe. </p>
                </div>
                <div class="create-account">
                    <p> Vous ne possédez pas de compte ?&nbsp;
                        <a href="javascript:;" id="register-btn"> Créer un compte </a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="<?php echo URLHOST."_pages/_post/reset_password.php"; ?>" method="post">
                <h3>Mot de passe oublié ?</h3>
                <p> Entrez votre adresse mail pour réinitialiser votre mot de passe </p>
                <div class="form-group">
                    <div class="input-icon" style="border-left:2px solid #2f353b !important;">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn grey-salsa btn-outline"> Annuler </button>
                    <button type="submit" class="btn dark pull-right"> Envoyer </button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
             <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="<?php echo URLHOST."_pages/_post/creer_compte.php"; ?>" method="post">
                <h3>S'enregistrer</h3>
                <p> Merci de compléter vos informations personnelles : </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Nom</label>
                    <div class="input-icon" style="border-left:2px solid #2f353b !important;">
                        <i class="fa fa-font"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Nom" name="nom" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Prénom</label>
                    <div class="input-icon" style="border-left:2px solid #2f353b !important;">
                        <i class="fa fa-font"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Prénom" name="prenom" /> </div>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <div class="input-icon" style="border-left:2px solid #2f353b !important;">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Téléphone</label>
                    <div class="input-icon" style="border-left:2px solid #2f353b !important;">
                        <i class="fa fa-mobile"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address" /> </div>
                </div>
                <p> Enter your account details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Nom utilisateur</label>
                    <div class="input-icon" style="border-left:2px solid #2f353b !important;">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Utilisateur" name="utilisateur" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Mot de passe</label>
                    <div class="input-icon" style="border-left:2px solid #2f353b !important;">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Mot de passe" name="password" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Confirmer le mot de passe</label>
                    <div class="controls">
                        <div class="input-icon" style="border-left:2px solid #2f353b !important;">
                            <i class="fa fa-check"></i>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirmer le mot de passe" name="rpassword" /> </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="tnc" /> J'accepte les
                        <a href="javascript:;"> termes </a> et
                        <a href="javascript:;"> conditions </a>
                    </label>
                    <div id="register_tnc_error"> </div>
                </div>
                <div class="form-actions">
                    <button id="register-back-btn" type="button" class="btn grey-salsa btn-outline"> Annuler </button>
                    <button type="submit" id="register-submit-btn" class="btn dark pull-right"> Créer </button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
