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

            <form class="row text-start mx-5" method="POST" name="reservationform" action="reservationAdd.php">

                <h1 class="my-5 text-center text-uppercase">Réserver une offre</h1>

                <div class="col m-3">
                    <div>
                        <input type="radio" name="civilite" id="homme" value="Mr" required>
                        <label for="homme">M.</label>
                    </div>
                    <div>
                        <input type="radio" name="civilite" id="femme" value="Mme">
                        <label for="femme">Mme.</label>
                    </div>
                </div>
                <div class="col-5 m-3">
                    <label for="prenom">Prénom</label>
                    <input class="rounded w-100" id="prenom" name="prenom" required>
                </div>
                <div class="col-5 m-3">
                    <label for="nom">Nom</label>
                    <input class="rounded w-100" id="snom" name="nom"required>
                </div>
                
                <div class="col-4 m-3">
                    <label for="naissance">Date de naissance</label>
                    <input type="date" class="rounded w-100" id="age" name="naissance" required>
                </div>
                <div class="col m-3">
                    <label for="email">Adresse Mail*</label>
                    <input class="rounded w-100" id="mail" name="email" required>
                </div>

                <div class="col-12 m-3">
                    <label for="adresse">Adresse</label>
                    <div id="row adresse w-100">
                        <input placeholder="Numéro" class="rounded col" name="numero" required>
                        <input placeholder="Rue" class="rounded col-4" name="rue" required>
                        <input placeholder="Ville" class="rounded col-4" name="ville" required>
                        <input placeholder="Code postal" class="rounded col" name="codepostal" required>
                    </div>
                </div>

                <div class="col-5 m-3">
                    <label for="tel">Téléphone portable</label>
                    <input class="rounded w-100" id="tel" name="tel" pattern='[0-9]{10}' REQUIRED>
                </div>
                <div class="col m-3">
                    <label for="famille">Situation familiale</label>
                    <select class="rounded col w-100" id="famille" name="famille" required>
                        <option value="celibataire">Célibataire</option>
                        <option value="marie">Marié</option>
                        <option value="veuf">Veuf</option>
                        <option value="jfc">je suis jean françois copé</option>
                    </select>
                </div>
                <div class="col m-3">
                    <label for="charge">Personnes à charges</label>
                    <input type ="number" class="rounded w-100" id="charges" name="charge" pattern='[0-9]{2}' required>
                </div>

                <h1 class="my-5 text-center">Types d'activités</h1>

                <div class="mx-3">
                    <input type="radio" name="activite" id="stageindiv" value="stagesolo" required>
                    <label for="stageindiv">Stage d'initiation</label>
                </div>
                <div class="mx-3">
                    <input type="radio" name="activite" id="stagegr" value="stagegroupe" required>
                    <label for="stagegr">Stage d'initiation en groupe</label>
                </div>
                <div class="mx-3">
                    <input type="radio" name="activite" id="brevet" value="brevet" required>
                    <label for="brevet">Brevet de pilote</label>
                </div>

                <div class="col m-3">
                    <label for="nbenfant">Nombre d'enfants</label>
                    <input type='number' class="rounded w-100" id="enfants" name="nbenfant"required>
                </div>
                <div class="col m-3">
                    <label for="nbadulte">Nombre d'adultes</label>
                    <input type='number' class="rounded w-100" id="adultes" name="nbadulte"  required >
                </div>

                <div class="col-12 m-3">
                    <label for="handicap">Présence d'handicap(s) (indiquez le nombre de personnes et le type d'handicap)</label>
                    <input class="rounded w-100" id="handicap" name="handicap">
                    <button>submit</button>
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

                <form class="row" action = 'email.php' method = 'POST' name="envoi" required>
                    <input placeholder="Nom" name = "nom" class="col-lg m-2 rounded" required>
                    <input placeholder="Prénom" name = "prenom" class="col-lg m-2 rounded" required>
                    <input placeholder="Adresse mail" name="email" class="m-2 rounded" required>
                    <input placeholder="Sujet" name= "sujet" class="m-2 rounded" required>
                    <textarea placeholder="Votre message" name ="message" class="m-2 rounded" required></textarea>
                    <button type="submit" class="rounded col-lg-3 my-2 btnvert mx-auto" required>Envoyer</button>
                </form>
                
            </div>
        </div>
    </footer>
    
    <script src="js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>