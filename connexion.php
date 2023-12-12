<?php if ( empty(session_id()) ) session_start(); ?>

<form id="form" action="connexion.php" method="POST">
            <section class="row">
                <div>
                    <input type="text" name="id" placeholder="ID" REQUIRED>
                </div>
                <div>
                    <input type="text" name="mdp" placeholder="Mot de passe" required>
        </form>
        <button type="submit" name="GO" form='form' id="bouton2">OK</button>
<?php

require "account.php";
$traitement = new Traitement("accounts");
if (isset($_POST["id"]) && isset($_POST["mdp"])){
    $_SESSION["account"] = Account::verify($traitement, $_POST["id"],$_POST["mdp"]);
    if(gettype($_SESSION["account"])== "array"){
        print_r($_SESSION);
    }
}

