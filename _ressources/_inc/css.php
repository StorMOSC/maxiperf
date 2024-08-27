<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />

<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />

<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- <link href="<?php /*echo URLHOST;*/?>_ressources/_inc/pages/css/login.min.css" rel="stylesheet" type="text/css" />-->
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<?php if($_GET['cat']=="connexion"){ ?>
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php } ?>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?php echo URLHOST;?>_ressources/_inc/global/css/components.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/global/css/plugins.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo URLHOST;?>_ressources/_inc/pages/css/profile.min.css" rel="stylesheet" type="text/css">
<?php if($_GET['cat']=="connexion"){ ?>
<link href="<?php echo URLHOST;?>_ressources/_inc/pages/css/login-3.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="<?php echo URLHOST;?>_ressources/_inc/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?php echo URLHOST;?>_ressources/_inc/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
<?php }else{ ?>
<link href="<?php echo URLHOST;?>_ressources/_inc/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URLHOST;?>_ressources/_inc/layouts/layout2/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="<?php echo URLHOST;?>_ressources/_inc/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
<?php } ?>
<!-- END THEME LAYOUT STYLES -->
<style type="text/css">
    .loginfond {
        position: absolute;
        top: 0; bottom: 0; left: 0; right: 0;
        height: 100%;
        margin:0;
        padding:0;
        background-size: 100% ;
        width:100%;  
        color:black;
        position: fixed;
       height: 100%; width: 100%;
       background-size: cover;
       background-repeat:no-repeat;
       z-index: -1; /* Keep the background behind the content */     
       -webkit-filter: blur(8px);
       -webkit-background-size: cover; /* pour Chrome et Safari */
       -moz-background-size: cover; /* pour Firefox */
       -o-background-size: cover; /* pour Opera */
       background-size: cover; /* version standardis�e */
    }

    .page-header.navbar .top-menu .navbar-nav>li.dropdown.open .dropdown-toggle {
        background: none;
        color: #fff;
        font-weight: 800;
    }
    .page-header.navbar .top-menu .navbar-nav>li.dropdown .dropdown-toggle:hover {
        background: none;
        color: #fff;
        font-weight: 800;
    }

    .navbar-nav>li>a {
        color: #fff;
    }

    .lds-ripple {
	  display: inline-block;
	  position: relative;
	  width: 80px;
	  height: 80px;
	}
	.lds-ripple div {
	  position: absolute;
	  border: 4px solid #184700;
	  opacity: 1;
	  border-radius: 50%;
	  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
	}
	.lds-ripple div:nth-child(2) {
	  animation-delay: -0.5s;
	}
	@keyframes lds-ripple {
	  0% {
	    top: 36px;
	    left: 36px;
	    width: 0;
	    height: 0;
	    opacity: 0;
	  }
	  4.9% {
	    top: 36px;
	    left: 36px;
	    width: 0;
	    height: 0;
	    opacity: 0;
	  }
	  5% {
	    top: 36px;
	    left: 36px;
	    width: 0;
	    height: 0;
	    opacity: 1;
	  }
	  100% {
	    top: 0px;
	    left: 0px;
	    width: 72px;
	    height: 72px;
	    opacity: 0;
	  }
	}

    .no__form{
        display: none !important;
    }

    <?php 
        if($_GET['cat']=="parcours" || $_GET['cat']=="exercices"){
          ?>
            .btn.default .svg-inline--fa {
                font-size: 16px !important;
            }
            .btn .svg-inline--fa {
                font-size: 24px !important;
            }
    <?php
        }

        if($_GET['cat']!="connexion"){
    ?>
            .svg-inline--fa{
                font-size: 24px !important;
            }

            .breadcrumb>li+li:before {
                content: "" !important;
                padding: 0 5px;
                color: #ccc;
            }

            .dropdown-menu > li > a > [class^="fa-"], .dropdown-menu > li > a > [class*=" fa-"] {
                color: #888;
                visibility: hidden;
            }
    <?php } ?>
</style>
<?php 
    if($_GET['cat']!="connexion"){
?>
    <script defer src="https://use.fontawesome.com/releases/v5.15.0/js/all.js"></script>
<?php } ?>