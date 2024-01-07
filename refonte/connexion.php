<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap');</style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/connexion.css">
    <title>ACF2L</title>
</head>
<body>
<form name="formulaire" action="phpconnexion.php" method="POST" id="formulaire" style="margin-top: 10em;">
        <div id="inscription" style="font-size: x-large;"> Connexion </div>
        <input class="caseformulaire" type="text" name="id" placeholder="Login" required>
        <input class="caseformulaire" type="password" name="mdp" placeholder="Mot de passe" required>
        <div id=goconnexion>
        </div>
        <input type="submit" name="connect" value="Se connecter" id="bouton">
</form>