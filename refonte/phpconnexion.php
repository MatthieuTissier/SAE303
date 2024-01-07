<?php if ( empty(session_id()) ) session_start(); 
require "classes/admin.php";
$traitement = new Traitement("admin");
print_r($_POST);
if (isset($_POST["id"]) && isset($_POST["mdp"])){
    if(Admin::verify($traitement, $_POST["id"],$_POST["mdp"]) ==  2){
        $_SESSION["admin"] = 1;
        header('location: pageadmin.php');
        exit;
    };
}
header('location: connexion.php');

