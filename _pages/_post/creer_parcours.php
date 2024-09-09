<?php

include("../../_cfg/cfg.php");

if(isset($_POST['ajouter'])) {
    //$name = $_POST['exercice'];
    $date = $_POST['date']; 


    $array = array(
        //'name' => $name,
        'date' => $date
    );

    $i=1;
while(($postDescription = current($_POST["descriptionDevis"])) !== FALSE ){

    $j = key($_POST["descriptionDevis"]);
    if(strlen(trim($postDescription))>0){
        if(empty($_POST["remiseDevis"][$j])){
            $remise = 0;
        }else{
            $remise = $_POST["remiseDevis"][$j];
        }
        if(empty($_POST["quantiteDevis"][$j])){
            $qt = 1;
        }else{
            $qt = $_POST["quantiteDevis"][$j];
        }
        $price = $_POST["prixDevis"][$j];
        $tax = $_POST["taxeDevis"][$j];
        $dataDescription= array(
            'description' => $postDescription,
            'quantity' => $qt,
            'discount' => $remise,
            'price' => $price,
            'tax' => $tax
        );
       
        $description = new Description($dataDescription);
        $descriptions[$i] = $description;
    }
    $i++;
    next($_POST["descriptionDevis"]);
}

    $parcours = new Parcours($array);
    echo "OK";
    $parcoursmanager = new ParcoursManager($bdd);
    echo "OK2";
    $test = $parcoursmanager->add($parcours);
    
}



if(is_null($test)){
    header('Location: '.URLHOST."exercices/errormodif");
}else{
    header('Location: '.URLHOST."exercices/successmodif");
}

?>