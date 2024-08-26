<?php

include("../../_cfg/cfg.php");

if(isset($_POST['creer'])) {
    $name = $_POST['nom_exercice'];
    $is_active = 1;

    echo $name;

    $array = array(
        'name' => $name,
        'isActive' => $is_active
    );


    $exercice = new Exercice($array);
    //echo "OK";
    $exercicemanager = new ExerciceManager($bdd);
    //echo "OK2 / ".$oldusername;
    $test = $exercicemanager->add($exercice);
    
}

/*
if(is_null($test)){
    header('Location: '.URLHOST."parcours/errormodif");
}else{
    header('Location: '.URLHOST."parcours/successmodif");
}*/

?>