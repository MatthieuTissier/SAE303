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

        <nav class="navbar navbar-expand-lg" id="customnav">
            <div class="container-fluid mt-2">
                <a class="navbar-brand ms-4" href="#"><img src="images_finales/logoACF2L 1.png" alt="ACF2L" class="w-75"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>  
                <div class="collapse navbar-collapse mx-5" id="navbarNav">
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

        <div class="py-5">

            <form class="row text-start mx-5">

                <h1 class="my-5 text-center text-uppercase">Réserver une offre</h1>

                <p class="m-3">* champs obligatoires</p>

                <div class="col m-3">
                    <div>
                        <input type="radio" name="civilite" id="homme">
                        <label for="homme">M.</label>
                    </div>
                    <div>
                        <input type="radio" name="civilite" id="femme">
                        <label for="femme">Mme.</label>
                    </div>
                </div>
                <div class="col-5 m-3">
                    <label for="prenom">Prénom*</label>
                    <input class="rounded w-100" id="prenom">
                </div>
                <div class="col-5 m-3">
                    <label for="nom">Nom*</label>
                    <input class="rounded w-100" id="snom">
                </div>
                
                <div class="col-4 m-3">
                    <label for="age">Date de naissance</label>
                    <input class="rounded w-100" id="age">
                </div>
                <div class="col m-3">
                    <label for="mail">Adresse Mail*</label>
                    <input class="rounded w-100" id="mail">
                </div>

                <div class="col-12 m-3">
                    <label for="adresse">Adresse</label>
                    <div id="row adresse w-100">
                        <input placeholder="Numéro" class="rounded col">
                        <input placeholder="Rue" class="rounded col-4">
                        <input placeholder="Ville" class="rounded col-4">
                        <input placeholder="Code postal" class="rounded col">
                    </div>
                </div>

                <div class="col-5 m-3">
                    <label for="tel">Téléphone portable</label>
                    <input class="rounded w-100" id="tel">
                </div>
                <div class="col m-3">
                    <label for="famille">Situation familiale</label>
                    <select class="rounded col w-100" id="famille">
                        <option></option>
                    </select>
                </div>
                <div class="col m-3">
                    <label for="charges">Personnes à charges</label>
                    <input class="rounded w-100" id="charges">
                </div>

                <h1 class="my-5 text-center">Types d'activités</h1>

                <div class="mx-3">
                    <input type="radio" name="activite" id="stageindiv">
                    <label for="stageindiv">Stage d'initiation</label>
                </div>
                <div class="mx-3">
                    <input type="radio" name="activite" id="stagegr">
                    <label for="stagegr">Stage d'initiation en groupe</label>
                </div>
                <div class="mx-3">
                    <input type="radio" name="activite" id="brevet">
                    <label for="brevet">Brevet de pilote</label>
                </div>

                <div class="col m-3">
                    <label for="enfants">Nombre d'enfants</label>
                    <input class="rounded w-100" id="enfants">
                </div>
                <div class="col m-3">
                    <label for="adultes">Nombre d'adultes</label>
                    <input class="rounded w-100" id="adultes">
                </div>

                <div class="col-12 m-3">
                    <label for="handicap">Présence d'handicap(s) (indiquez le nombre de personnes et le type d'handicap)</label>
                    <input class="rounded w-100" id="handicap">
                </div>

            </form>

        </div>

    </section>

    <footer class="container-fluid mx-0 py-5 text-light text-center background1" id="contact">
        <div class="row px-5">
            <div class="col-lg">
                <h1 class="text-uppercase">Informations</h1>
                <p>Association enregistrée n°04674 - - Agrément n° AS70986858</p>
                <div class="my-3 text-start">
                    <img src="images_finales/icon8.svg" class="w-10 mx-3">
                    <p class="d-inline">acf2l@gmail.com</p>
                </div>
                <div class="my-3 text-start">
                    <img src="images_finales/icon7.svg" class="w-10 mx-3">
                    <p class="d-inline">+33 01 60 56 60 60</p>
                </div>
                <div class="my-3 text-start">
                    <img src="images_finales/icon9.svg" class="w-10 mx-3">
                    <p class="d-inline">62, Avenue de la République, 70200 Lure</p>
                </div>
                <img src="images_finales/logoACF2L 1.png">
            </div>
            <div class="col-lg">
                <h1 class="text-uppercase">Contactez nous !</h1>
                <p>Laissez votre message, nous vous contacterons dans la semaine.</p>

                <form class="row">
                    <input placeholder="Nom" class="col-lg-6 rounded">
                    <input placeholder="Prénom" class="col-lg-6 rounded">
                    <input placeholder="Adresse mail" class="rounded">
                    <input placeholder="Sujet" class="rounded">
                    <textarea placeholder="Votre message" class="rounded"></textarea>
                    <button class="rounded col-lg-3 btnvert">Envoyer</button>
                </form>
                
            </div>
        </div>
    </footer>
    
    <script src="js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>