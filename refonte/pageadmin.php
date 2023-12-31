<?php if ( empty(session_id()) ) session_start();
if(!isset($_SESSION["admin"])){
    header('location: connexion.php');
}  ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken Theme">
	
	<title>ACF2L - Aéroclub de Frotey Les Lures</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<link href="css/custom.css" rel="stylesheet" media="screen">

</head>
<body>

    <section class="container-fluid position-relative text-light text-center mx-0">

        <img src="images_finales/fondreservation.png" class="row position-absolute w-100 h-100 object-fit-none z-n1">

        <nav class="navbar navbar-expand-lg py-5" id="customnav">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php#"><img src="images_finales/logoACF2L 1.png" alt="ACF2L"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>  
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3">
                            <a class="text-light text-decoration-none" href="index.php#activites">Nos activités</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-light text-decoration-none" href="index.php#pedagogie">Moyens pédagogiques</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-light text-decoration-none" href="index.php#ulm">Catégories d'ULM</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-light text-decoration-none" href="index.php#event">Evenement</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-light text-decoration-none" href="index.php#equipe">L'équipe</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-light text-decoration-none" href="index.php#tarifs">Tarifs</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-light text-decoration-none" href="index.php#galerie">Galerie</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="text-light text-decoration-none" href="index.php#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="my-5 py-5 row">

            <div class="col mx-3">

                <h1>En attente</h1>

                <div class="rounded text-start background1 p-1">
                <?php
                    require "classes/poo_traitement.php";

                    $trait = new Traitement("reservation");
                    $list = $trait -> findBy(array("traitementP" => "0"));
                    foreach($list as $value){
                        echo("<div class='m-3 text-dark background4 rounded p-3'>
                        <div class='row'>
                            <p class='col-3'>Client :</p>
                            <p class='col'>".$value["civilite"]." ".$value["prenom"]." ".$value["nom"]."</p>
                        </div>
                        <div class='row border-top border-dark'>
                            <p class='col-3'>Type de séance :</p>
                            <p class='col'>".$value["type"]."</p>
                        </div>
                        <div class='row border-top border-dark'>
                            <div class='col-lg'>
                                <div class='row'>  
                                    <p class='col-7'>Nombre d’enfants :</p>
                                    <p class='col'>".$value["nbenfant"]."</p>
                                </div>
                                
                            </div>
                            <div class='col-lg'>
                                <div class='row'>
                                    <p class='col-7'>Nombre d’adultes :</p>
                                    <p class='col'>".$value["nbadulte"]."</p>
                                </div>
                            </div>
                        </div>
                        <div class='border-top border-dark'>
                            <p class='my-0'>Personnes handicapées :</p>
                            <p>".$value["handicap"]."</p>
                        </div>
                        <div class='row border-top border-dark'>
                            <form class='col mx-1' action ='gestionAdmin.php' method='post' id =".$value["id"].">
                                <label for='date'>Date :</label>
                                <input id='date' class='rounded' type='date' form=".$value["id"]." name = 'date' required>
                                <input type='hidden' value=".$value["id"]." form=".$value["id"]." name= 'id' >
                            </form>
                            <button class='col btn-success btn my-auto mx-1' name='state' value=1 form=".$value["id"].">
                                Valider
                            </button>
                            <button class='col btn-danger btn my-auto mx-1' value = 0 name='state' form=".$value["id"]."N>
                                Rejeter
                            </button>
                            <form action='gestionAdmin.php' method='POST' id=".$value["id"]."N></form>
                            <input type='hidden' value=".$value["id"]." form=".$value["id"]."N name='id'>
                        </div>
                    
                    </div>");  
                        };
                        ?>

                </div>

            </div>

            <div class="col mx-3">

                <h1>Traité</h1>

                <div class="rounded text-start background1 p-1">

                <?php
                    $list = $trait -> findBy(array("traitementP" => "1"));
                    foreach($list as $value){
                    echo("
                    <div class='m-3 text-dark background4 rounded p-3'>
                        <div class='row'>
                            <p class='col-3'>Client :</p>
                            <p class='col'>".$value["civilite"]." ".$value["prenom"]." ".$value["nom"]."</p>
                        </div>
                        <div class='row border-top border-dark'>
                            <p class='col-3'>Type de séance :</p>
                            <p class='col'>".$value["type"]."</p>
                        </div>
                        <div class='row border-top border-dark'>
                            <div class='col-lg'>
                                <div class='row'>  
                                    <p class='col-7'>Nombre d'enfants :</p>
                                    <p class='col'>".$value["nbenfant"]."</p>
                                </div>
                                
                            </div>
                            <div class='col-lg'>
                                <div class='row'>
                                    <p class='col-7'>Nombre d'adultes :</p>
                                    <p class='col'>".$value["nbadulte"]."</p>
                                </div>
                            </div>
                        </div>
                        <div class='border-top border-dark'>
                            <p class='my-0'>Personnes handicapées :</p>
                            <p>".$value["handicap"]."</p>
                        </div>
                        <div class='row border-top border-dark'>
                            <p class='col-2'>Date :</p>
                            <p class='col'>".$value["date"]."</p>
                        </div>
                    </div>");};
                    ?>

                </div>

            </div>

        </div>
        
    </section>
    
    <script src="js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
</body>