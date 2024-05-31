<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon projet Garage</title>
    <link rel="stylesheet" href="../CSS/headerfooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/interne.css">
</head>

<body>
    <header>
        <div class="topbar">
            retrouvez nos dernières offres
        </div>
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
        <form action="../PHP/verification_connexion.php" method="post" id="form_connexion">
            <fieldset>
                <legend>
                    <h2>Connexion</h2>
                </legend>
                <div id="div_username">
                    <label for="username">Nom d'utilisateur : </label>
                    <input type="text" id="username" name="username" placeholder="username" required>
                </div>
                <div id="div_pws">
                    <label for="password">Mot de passe : </label>
                    <input type="password" id="password" name="password" placeholder="mot de passe" required>
                </div>
            </fieldset>
            <button class="btn" type="submit">Se connecter</button>
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
