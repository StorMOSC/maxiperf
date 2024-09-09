<?php

$host = explode('.', $_SERVER['HTTP_HOST']);

define('URLHOST','https://'.$host[0].'.'.$host[1].'.nc/');

include 'classes/class_db.php';
include 'classes/class_features.php';
include 'classes/class_exercice.php';
include 'classes/class_exercicemanager.php';
include 'classes/class_parcours.php';
include 'classes/class_parcoursmanager.php';
include 'classes/class_series.php';
include 'classes/class_seriesmanager.php';
include 'classes/class_users.php';
include 'classes/class_usersmanager.php';
include 'classes/class_logs.php';
include 'classes/class_logsmanager.php';
include 'classes/class_counter.php';
include 'classes/class_countermanager.php';



global $bdd;
$bdd = new DB();
$bdd->connexion();

date_default_timezone_set('Pacific/Noumea');
setlocale (LC_TIME, 'fr_FR.utf8','fra');

if (!isset($_COOKIE['connected']) || $_COOKIE['connected']=="false") {
   if ($_SERVER['REQUEST_URI'] != "/connexion") {
	   header('Location: '.URLHOST.'connexion');
   }
}

?>