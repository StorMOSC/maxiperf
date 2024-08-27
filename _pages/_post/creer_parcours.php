<?php

include("../../_cfg/cfg.php");

if(isset($_POST['ajouter'])) {
    $name = $_POST['exercice'];
    $date = date("Y-m-d"); 

    $array = array(
        'name' => $name,
        'date' => $date
    );


    $parcours = new Parcours($array);
    //echo "OK";
    $parcoursmanager = new ParcoursManager($bdd);
    //echo "OK2 / ".$oldusername;
    $test = $parcoursmanager->add($parcours);
    
}


if(is_null($test)){
    header('Location: '.URLHOST."exercices/errormodif");
}else{
    header('Location: '.URLHOST."exercices/successmodif");
}

?>