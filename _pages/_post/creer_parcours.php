<?php

include("../../_cfg/cfg.php");

if(isset($_POST['Enregistrer'])) {

    $parcours_date = $_POST['parcours_date'];
    $parcours_nom = $_POST['parcours_nom'];
    $parcours_commentaire = $_POST['parcours_commentaire'];

    $array = array(
        'date' => $parcours_date,
        'nom' => $parcours_nom
    );

    $parcours = new Parcours($array);
    $parcoursmanager = new ParcoursManager($bdd);
    $test = $parcoursmanager->add($parcours);

    $idParcours = $parcours->getIdParcours();

    $i=1;
    while(($postParcours_serie = current($_POST["parcours_serie"])) !== FALSE ){

        $j = key($_POST["parcours_serie"]);
        if(strlen(trim($postParcours_serie))>0){
            $parcours_repet = $_POST["parcours_repet"][$j];
            $parcours_poids = $_POST["parcours_poids"][$j];
            $parcours_type = $_POST["parcours_type"][$j];
            $parcours_exercice_id = $_POST['parcours_exercice_id'][$j];

            $dataDescription= array(
                'idParcours' => $idParcours,
                'idExercice' => $parcours_exercice_id,
                'username' => $remise,
                'numSerie' => $postParcours_serie,
                'repet' => $parcours_repet,
                'poids' => $parcours_poids,
                'type' => $parcours_type,
                'commentaire' => $parcours_commentaire
            );
        
            $description = new Description($dataDescription);
            $descriptions[$i] = $description;
        }
        $i++;
        next($_POST["parcours_serie"]);
    }
    
}



if(is_null($test)){
    header('Location: '.URLHOST."exercices/errormodif");
}else{
    header('Location: '.URLHOST."exercices/successmodif");
}

?>