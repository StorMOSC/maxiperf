<div class="page-head" style="background-color: white; padding-left: 10px;">
    <!-- BEGIN PAGE TITLE -->
    <div class="page-title">
        <h1 style="color: #173752 !important; font-weight: 900;">
        <?php 
            if (isset($_GET['souscat']) AND (!isset($_GET['soussouscat'])) AND (!isset($_GET['soussoussouscat']))) {
                print strtoupper($_GET['cat']); 
            }elseif(isset($_GET['souscat']) AND (isset($_GET['soussouscat'])) AND (!isset($_GET['soussoussouscat']))){
                print strtoupper($_GET['cat']);
            }elseif(isset($_GET['souscat']) AND (isset($_GET['soussouscat'])) AND (isset($_GET['soussoussouscat']) AND ($_GET['soussoussouscat']!="contact"))){
                print strtoupper($_GET['cat']);
            }elseif($_GET['soussoussouscat']=="contact"){
                print strtoupper($_GET['soussoussouscat']); 
            }?>
        </h1>
    </div>
    <!-- END PAGE TITLE -->
</div>
<!-- END PAGE HEAD-->
<!-- BEGIN PAGE BREADCRUMB -->
<?php 
        if(!empty($_GET['cat'])){
    ?>
<ul class="page-breadcrumb breadcrumb" style="background-color: white; padding-left: 25px; margin-bottom: 15px;">
    <li>
        <a href="<?php echo URLHOST ?>" style="font-weight: 800;">Accueil</a>
        <?php
            if(isset($_GET['cat']) && empty($_GET['souscat']) && $_GET["cat"] !="accueil" && $_GET["cat"] !="successmodif" && $_GET["cat"] !="errormodif" ){
        ?>
        <i class="fa fa-angle-right" style="color: #aaa; font-size: 15px !important;"></i>
        
    </li>
    <li>
        <span class="active" style="color: #523a5f; font-weight: 800;"><?php print ucwords($_GET['cat']); ?></span>
    </li>
    <?php 
            }elseif (isset($_GET['cat']) AND (isset($_GET['souscat'])) AND $_GET['soussouscat']!="contact") {
    ?>
        <i class="fa fa-angle-right" style="color: #aaa; font-size: 15px !important;"></i>
        
    </li>
    <li>
        <span class="active" style="color: #523a5f;"><?php print ucwords($_GET['souscat']); ?></span>
    </li>
        
    <?php 
            }else{
    ?>
        <i class="fa fa-angle-right" style="color: #aaa; font-size: 15px !important;"></i>
        
    </li>
    <li>
        <span class="active" style="color: #523a5f; font-weight: 800;"><?php print ucwords($_GET['cat5']); ?></span>
    </li>
    <?php
            }
    ?>
</ul>
<?php 
        }
?>
<!-- END PAGE BREADCRUMB -->