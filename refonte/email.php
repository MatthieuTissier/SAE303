<?php
if(!isset($_POST)){
    header("index.php");
}
$destinataire = "prot.tom91@gmail.com";
$sujet = '[Sans sujet]';
$message =  "[Le contenu du message est vide]";

$infos = "MIME-Version: 1.0" . "\r\n"; 
$infos .= "charset=UTF-8" . "\r\n"; 

if(!empty($_POST["sujet"])){
    $sujet = $_POST["sujet"];
}
if(!empty($_POST["message"])){
    $message = $_POST["message"];
}
if(!empty($_POST["prenom"]) || !empty($_POST["nom"])){
    $infos .= "From: ".$_POST["prenom"]." ".$_POST["nom"]. "\r\n";
}
else {
    $infos  .= "From: [Expediteur inconnu] ";
}
if(!empty($_POST["email"])){
    $test = strval("<").strval($_POST["email"].strval(">"));
}
else {
    $infos  .= " <adresseem@il.nonrenseignee>" . "\r\n";
}
if(mail($destinataire, $sujet, $message, $infos)){
    $_SESSION["success"] = 1;
    header("index.php");
} else{
    $_SESSION["success"] = 0;
    header("index.php");
}
?>