<?php

require "poo_traitement.php";

$exemple1 = new Traitement("personne");

$sql = "Select * from Personne";

$resultat = $exemple1->requete($sql);

foreach ($resultat as $elem)
    echo $elem['nom'].'<br />'.$elem['adresse'].'<br />'.$elem['tel'].'<br />';