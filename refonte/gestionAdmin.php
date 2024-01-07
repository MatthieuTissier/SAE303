<?php if ( empty(session_id()) ) session_start();
if(!isset($_SESSION["admin"])){
    header('location: pageadmin.php');
} 
if(!isset($_POST)){
    header('location: index.php');
} 
require "classes/poo_traitement.php";

$trait = new Traitement("reservation");

if($_POST['state']){
    $trait -> update("traitementP = 1",$_POST['id']);
    $trait -> update("date = CAST('".$_POST['date']."' AS DATETIME)",$_POST['id']);
    header('location: pageadmin.php');
    exit;
}
else{
    $trait -> delete($_POST['id']);
    header('location: pageadmin.php');
    exit;
}
