<?php

require "classes/reservationclass.php";

if(!isset($_POST)){
    header('location: index.php');
}
$adresse = $_POST["numero"]." ".$_POST["rue"]." ".$_POST["ville"]." ".$_POST["codepostal"];
$reserv = new Reservation(strval(time()).$_POST["nom"],$_POST["nom"],$_POST["prenom"],$_POST["civilite"],$_POST["naissance"],$_POST["email"],$_POST["nbenfant"],$_POST["nbadulte"],$_POST["handicap"],$_POST["activite"],$adresse,$_POST["tel"],$_POST["charge"],$_POST["famille"]);
$reserv -> create();
header('location: index.php');
exit;
?>