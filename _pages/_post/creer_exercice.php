<?php

include("../../_cfg/cfg.php");

if(isset($_POST['creer'])) {
    $name = $_POST['nom_exercice'];
    
    $array = array(
        'name' => $name,
        'isActive' => 1,
    );


    $exercice = new Exercice($array);
    //echo "OK";
    $exercicemanager = new ExerciceManager($bdd);
    //echo "OK2 / ".$oldusername;
    $test = $exercicemanager->update($exercice);
    

}
if(is_null($test)){
    header('Location: '.URLHOST."parcours/errormodif");
}else{
    header('Location: '.URLHOST."parcours/successmodif");
}

?>