<?php 
session_start();

include '_cfg/cfg.php';
include '_cfg/fonctions.php';
$retour = $_GET['souscat'];

?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>MaxiPerf - App</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="MaxiPerf - App " />
        <meta content="" name="MaxiPerf" />
        <?php include '_ressources/_inc/css.php'; ?>
        <script src="<?php echo URLHOST.'_ressources/_inc/global/plugins/jquery.min.js'?>"></script>
        <!-- END THEME LAYOUT STYLES -->
        <link rel="apple-touch-icon" sizes="57x57"href="<?php echo URLHOST;?>images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60"href="<?php echo URLHOST;?>images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72"href="<?php echo URLHOST;?>images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76"href="<?php echo URLHOST;?>images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114"href="<?php echo URLHOST;?>images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120"href="<?php echo URLHOST;?>images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144"href="<?php echo URLHOST;?>images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152"href="<?php echo URLHOST;?>images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180"href="<?php echo URLHOST;?>images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo URLHOST;?>images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32"href="<?php echo URLHOST;?>images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96"href="<?php echo URLHOST;?>images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16"href="<?php echo URLHOST;?>images/favicon/favicon-16x16.png">
        <link rel="manifest"href="<?php echo URLHOST;?>images/favicon/manifest.json" crossorigin="use-credentials">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <!-- END HEAD -->
<?php 
if($_GET['section']=="connexion" || $_GET['cat']=="connexion"){ 
    include (__DIR__.'/_pages/connexion.php');
    include "_ressources/_inc/js.bottom.php";
?>
    </body>
</html>
<?php }else{ ?>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid" style="background:#2f353b; !important">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top" style="background:#2f353b; !important">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <?php include '_ressources/top.php'; ?>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse" style="background:#2f353b; !important">
                    <?php include '_ressources/menu.php'; ?>
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content" style="padding-top: 0px !important; min-height: 815px;">
                    <?php if($retour == "errormodif") { ?>
                        <div class="alert alert-danger">
                            <button class="close" data-close="alert"></button> Une erreur est survenue, les préférences n'ont donc pas pu être modifiées !</div>
                    <?php }elseif($retour == "successmodif") { ?>
                        <div class="alert alert-success">
                            <button class="close" data-close="alert"></button>
                            Les préférences utilisateurs ont bien été modifiées !
                        </div>
                        <?php
                    }
                    ?>
                    <!-- BEGIN PAGE HEAD-->
                    <?php include '_ressources/breadcrump.php'; ?>
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <?php if($_GET['cat']=='accueil'){ ?>
                    <div class="row">
                        <?php include '_ressources/favoris.php'; ?>
                    </div>
                    <?php } ?>
                        <?php
                           if(file_exists(__DIR__.'/_pages/'.$_GET['cat'].'.php')) {
                                include (__DIR__.'/_pages/'.$_GET['cat'].'.php');
                            }
                        ?>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer-fixed">
            <div class="page-footer-inner"> 2024 &copy; MaxiPerf
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <?php include "_ressources/_inc/js.bottom.php"; ?>
    </body>

</html>
<?php } //FIN du test de connexion ?>