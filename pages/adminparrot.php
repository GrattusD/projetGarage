<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/headerfooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/userforms.css">

</head>
<body>
    <header>
        <div class="container flex">
            <div>
                <img class="logoParrot" src="../ressources/images/logogarageVParrot01.png" alt="logo garage V.Parrot">
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
        <h1>Bienvenue Monsieur <?php echo $_COOKIE['fullname']?>, </h1></br>
    </div>
    <!-- les différentes section sont présentées sous forme d'accordéon-->
    <div class="accordion" id="accordionAdmin">
        <!--1ère fonction l'ajout d'un nouvel employé-->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Ajouter un nouvel employé
                </button>
            </h2>
            <!--formulaire de type POST pour soumettre les données-->
            <form action= "../PHP/new_data_form.php" method="POST">
                <input type="hidden" name="form_data_group" value= "newEmployee">
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
                                <label for="userName"class="form-label">Nom utilisateur</label>
                                <input type="text" class="form-control" id="userName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="password"class="form-label">Mot de passe</label>
                                <input type="text" class="form-control" id="password" required>
                            </div>
                        </div>
                    </div>
                    <div>
                            <button class="btn" type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
            
            <!--2ème fonction l'ajout d'un nouveau service-->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Ajouter une nouvelle offre de service
                </button>
            </h2>
            <form action= "../PHP/addoffer.php" method="POST">
            <input type="hidden" name="form_data_group" value= "newOffer">
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="accordionAdmin">
                    <div class="accordion-body">
                        <div class="row g-2 needs-validation">
                            <div class="col-md-6">
                                <label for="title"class="form-label">Titre de la prestation</label>
                                <input type="text" class="form-control" id="title" name='title'required>
                            </div>
                            <div class="col-md-6">
                                <label for="body"class="form-label">Description</label>
                                <input type="text" class="form-control" id="body" name='body' required>
                            </div>
                            <div class="col-md-6">
                                <label for="offer1"class="form-label">Service 1</label>
                                <input type="text" class="form-control" id="offer1" name='offer1' required>
                            </div>
                            <div class="col-md-6">
                                <label for="offer2"class="form-label">Service 2</label>
                                <input type="text" class="form-control" id="offer2" name='offer2' required>
                            </div>
                            <div class="col-md-6">
                                <label for="offer3"class="form-label">Service 3</label>
                                <input type="text" class="form-control" id="offer3" name='offer3' required>
                            </div>
                            <div class="col-md-6">
                                <label for="offer4"class="form-label">Service 4</label>
                                <input type="text" class="form-control" id="offer4" name='offer4'>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn" type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>

            <!--3ème fonction changer les horaires d'ouverture de l'atelier-->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Changer les horaires d'ouvertures du garage
                </button>
            </h2>
            <form action= "../PHP/new_data_form.php" method="POST">
            <input type="hidden" name="form_data_group" value= "garageTime">
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
                            <input type="text" id="monday_pm_start" name="mondaypmstart">
                        </div>
                    </div>
                    <div id="tuesday">
                        Mardi
                        <div>
                            <input type="checkbox" name="selected" id="tuesday_am">
                            <input type="text" id="tuesday_morning_start" name="tuesdaymorningstart">
                            <input type="checkbox" name="selected" id="tuesday_pm">
                            <input type="text" id="tuesday_pm_start" name="tuesdaypmstart">
                        </div>
                    </div>
                    </div>
                    <div id="wednesday">
                        Mercredi
                        <div>
                            <input type="checkbox" name="selected" id="wednesday_am">
                            <input type="text" id="wednesday_morning_start" name="wednesdaymorningstart">
                            <input type="checkbox" name="selected" id="wednesday_pm">
                            <input type="text" id="wednesday_pm_start" name="wednesdaypmstart">
                        </div>
                    </div>
                    <div id="thursday">
                        Jeudi
                        <div>
                            <input type="checkbox" name="selected" id="thursday_am">
                            <input type="text" id="thursday_morning_start" name="thursdaymorningstart">
                            <input type="checkbox" name="selected" id="thursday_pm">
                            <input type="text" id="thursday_pm_start" name="thursdaypmstart">
                        </div>
                    </div>
                    <div id="friday">
                        Vendredi
                        <div>
                            <input type="checkbox" name="selected" id="friday_am">
                            <input type="text" id="friday_morning_start" name="fridaymorningstart">
                            <input type="checkbox" name="selected" id="friday_pm">
                            <input type="text" id="friday_pm_start" name="fridaypmstart">
                        </div>
                    </div>
                    <div id="saturday">
                        Samedi
                        <div>
                            <input type="checkbox" name="selected" id="saturday_am">
                            <input type="text" id="saturday_morning_start" name="saturdaymorningstart">
                            <input type="checkbox" name="selected" id="saturday_pm">
                            <input type="text" id="saturday_pm_start" name="saturdaypmstart">
                        </div>
                    </div>
                    <div id="sunday">
                        Dimanche
                        <div>
                            <input type="checkbox" name="selected" id="sunday_am">
                            <input type="text" id="sunday_morning_start" name="sundaymorningstart">
                            <input type="checkbox" name="selected" id="sunday_pm">
                            <input type="text" id="sunday_pm_start" name="sundaypmstart">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include_once'../../config.php';
include_once $server.'PHP/footer.php';
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
