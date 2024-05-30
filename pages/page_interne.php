<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../CSS/headerfooter.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/employee.css">
    
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
            <h1>Bienvenue Employé, </h1>
        </div>
        <form>
            <div class="accordion" id="accordionCustomerContact">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Laisser un commentaire d'un client
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="accordionCustomerContact">
                    <div class="accordion-body">
                        <div class="row">
                            <label for="customerCommentary" class="form-label">Déposez ici votre commentaire
                                :</label>
                                <textarea name="commentaire" id="customerCommentary" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Ajouter/Supprimer un nouveau véhicule d'occasion
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="accordionCustomerContact">
                    <div class="accordion-body">
                        <div class="row">
                            <label for="customerCommentary" class="form-label">Quel est votre message ?</label>
                            <textarea name="commentaire" id="customerCommentary" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button class="btn" type="submit">Envoyer</button>
        </div>
    </form>
    
    
</main>

<?php
include_once '../php/footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
    
</html>
