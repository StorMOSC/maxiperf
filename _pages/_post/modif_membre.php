<?php

include("../../_cfg/cfg.php");

if(isset($_POST['valider'])) {
    $username = $_POST['username'];
    if(isset($_POST['password']) && !empty($_POST['password'])){
        $password = $_POST['password'];
    }
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    if(isset($_POST['password']) && !empty($_POST['password'])){
        $array = array(
            'username' => $username,
            'name' => $name,
            'firstname' => $firstname,
            'emailAddress' => $email,
            'password' => $password,
            'phoneNumber' => $phone,
        );
    }else{
        $array = array(
            'username' => $username,
            'name' => $name,
            'firstname' => $firstname,
            'emailAddress' => $email,
            'phoneNumber' => $phone,
        );
    }

    $user = new Users($array);
    echo "OK";
    $usermanager = new UsersManager($bdd);
    echo "OK2 / ".$oldusername;
    $test = $usermanager->update($user, $_POST["societe"],$oldusername);
    

}
if(is_null($test)){
    header('Location: '.URLHOST."informations/errormodif");
}else{
    header('Location: '.URLHOST."informations/successmodif");
}
?>