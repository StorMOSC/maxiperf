<?php
$nom = $_COOKIE['nom'];
$prenom = $_COOKIE['prenom'];
$username = $_COOKIE['username'];
?>
<!-- BEGIN LOGO -->
<div class="page-logo" style="background:#2f353b !important;">
    <a href="<?php echo URLHOST; ?>">
        <img src="<?php echo URLHOST; ?>images/logo_transparent_blc.png" alt="logo" class="logo-default" style="height: 45px; margin: 15px 0 0; " /> </a>
    <div class="menu-toggler sidebar-toggler">
        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
    </div>
</div>
<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN PAGE ACTIONS -->
<!-- DOC: Remove "hide" class to enable the page header actions -->
<?php
/*$company = array();
$company = new Company ($company);
$companymanager = new CompaniesManager($bdd);
if($_COOKIE["credential"] != "A")
{
    $companymanager = $companymanager->getCompanies($_COOKIE['username']);
}
else{
    $companymanager = $companymanager->getList();
}

if(count($companymanager)>1){
?>
<div class="page-actions">
    <div class="btn-group">
        <button type="button" class="btn blue-ebonyclay btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <span class="hidden-sm hidden-xs">Société&nbsp;</span>
            <i class="fa fa-angle-down"></i>
        </button>
        <ul class="dropdown-menu" role="menu" style="min-width: 120px !important;">
        <?php
            
            foreach($companymanager as $company){
        ?>
            <li style="text-align: center;">
                <a href="<?php echo URLHOST.'_pages/_post/change_company.php?company='.$company->getNameData(); ?>">
                    <img src="<?php echo URLHOST; ?>images/societe/<?php echo $company->getNameData(); ?>.jpg" alt="<?php echo $company->getName(); ?>" class="logo-default" style="max-height: 40px;" /></a>
            </li>
        <?php 
            } 
        ?>
        </ul>
    </div>
</div>
<?php } */?>
<!-- END PAGE ACTIONS -->
<!-- BEGIN PAGE TOP -->
<div class="page-top" style="background:#2f353b !important;">
    <!-- BEGIN HEADER SEARCH BOX -->
    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
    <!-- END HEADER SEARCH BOX -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
            <li class="separator hide"> </li>
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
            <li class="dropdown dropdown-user dropdown-dark">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <span class="username username-hide-on-mobile" style="color:#fff"> <?php echo $nom.' '.$prenom; ?> </span>
                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                    <i style="font-size: 35px;" class="fas fa-user-circle img-circle"></i> </a>
                <ul class="dropdown-menu dropdown-menu-default">
                    <li>
                        <a href="<?php echo URLHOST . 'informations'; ?>">
                                <i class="icon-user"></i> Profil </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo URLHOST; ?>_pages/_post/deconnexion.php">
                            <i class="icon-logout"></i> Déconnexion </a>
                    </li>
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
</div>