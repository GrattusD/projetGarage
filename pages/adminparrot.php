<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/headerfooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/employee.css">

</head>
<body>
    <header>
        <div class="container flex">
            <div>
                <img class="logoParrot" src="/ressources/images/logogarageVParrot01.png" alt="logo garage V.Parrot">
            </div>

            <nav>
                <ul class="flex">
                    <li><a href="../index.php"> Accueil </a></li>
                    <li><a href="../pages/reparations.php"> Carrosserie et Réparation </a></li>
                    <li><a href="../pages/occasion.php"> Véhicules d'occasion </a></li>
                    <li class="selectedPage"><a href="../pages/interne.php"> Interne </a></li>
                    <li><a href="../pages/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
<main>
<div>
    <h1>Bienvenue Monsieur Parrot, </h1>
</div>
<!-- les différentes section sont présentées sous forme d'accordéon-->
<div class="accordion" id="accordionAdmin">
    <form>
        <!--1ère fonction l'ajout d'un nouvel employé-->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Ajouter un nouvel employé
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="accordionAdmin">
                <div class="accordion-body">
                    <div class="row g-2 needs-validation">
                        <div class="col-md-6">
                            <label for="firstName"class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName"class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName"class="form-label">Nom utilisateur</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName"class="form-label">Mot de passe</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>
                </div>
                <div>
                        <button class="btn" type="submit">Envoyer</button>
                </div>
            </div>
        </div>
        
        <!--2ème fonction l'ajout d'un nouveau service-->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Ajouter une nouvelle offre de service
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="accordionAdmin">
                <div class="accordion-body">
                    <div class="row g-2 needs-validation">
                        <div class="col-md-6">
                            <label for="firstName"class="form-label">Titre</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName"class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName"class="form-label">Nom utilisateur</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName"class="form-label">Mot de passe</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn" type="submit">Envoyer</button>
                </div>
            </div>
        </div>

        <!--3ème fonction changer les horaires d'ouverture de l'atelier-->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Changer les horaires d'ouvertures du garage
                </button>
            </h2>
            
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="accordionAdmin">
                <div class="accordion-body">
            <fieldset id="timetable">
                <legend>
                    <h2>Horaires d'ouverture</h2>
                </legend>
                <div id="monday">
                    Lundi
                    <div>
                        <input type="checkbox" name="selected" id="monday_am">
                        <input type="text" id="monday_morning_start" name="mondaymorningstart">
                        <input type="checkbox" name="selected" id="monday_pm">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
    
    
</main>

<?php
include_once'../../config.php';
include_once $server.'PHP/footer.php';
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
