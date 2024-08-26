<!-- BEGIN SIDEBAR MENU -->
<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<ul class="page-sidebar-menu   " data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="200">
    <li class="nav-item start">
        <a href="<?php echo URLHOST; ?>" class="nav-link nav-toggle">
            <i class="icon-home"></i>
            <span class="title">Accueil</span>
            <span class="selected"></span>
            
        </a>
    </li>
    <li class="nav-item  ">
        <a href="<?php echo URLHOST.'informations'; ?>" class="nav-link nav-toggle">
            <i class="fas fa-address-card"></i>
            <span class="title">Mes informations</span>
        </a>
    </li>
    <li class="nav-item  ">
        <a href="<?php echo URLHOST.'exercices'; ?>" class="nav-link nav-toggle">
            <i class="fas fa-dumbbell"></i>
            <span class="title">Exercices</span>
            
        </a>
    </li>
    <li class="nav-item  ">
        <a href="<?php echo URLHOST.'calculs'; ?>" class="nav-link nav-toggle">
            <i class="fas fa-calculator"></i>
            <span class="title">Calculs</span>
            
        </a>
    </li>
    <li class="nav-item  ">
        <a href="<?php echo URLHOST.'performances'; ?>" class="nav-link nav-toggle">
            <i class="fas fa-chart-line"></i>
            <span class="title">Performances</span>
            
        </a>
    </li>
    <?php
    if($_COOKIE["credential"] == "A"){
    ?>
    <li class="nav-item  ">
        <a href="<?php echo URLHOST.'parcours'; ?>" class="nav-link nav-toggle">
        <i class="fas fa-stopwatch-20"></i>
            <span class="title">Parcours</span>
            
        </a>
    </li>
    <li class="nav-item  ">
        <a href="<?php echo URLHOST.'membres'; ?>" class="nav-link nav-toggle">
            <i class="fas fa-users"></i>
            <span class="title">Membres</span>
            
        </a>
    </li>
    <li class="nav-item  ">
        <a href="<?php echo URLHOST.'abonnement'; ?>" class="nav-link nav-toggle">
            <i class="fas fa-file-signature"></i>
            <span class="title">Abonnements</span>
        </a>
    </li>
    <li class="nav-item  ">
        <a href="<?php echo URLHOST.'paiement'; ?>" class="nav-link nav-toggle">
            <i class="fas fa-coins"></i>
            <span class="title">Paiements</span>    
        </a>
    </li>
    <?php } ?>
</ul>
<!-- END SIDEBAR MENU -->