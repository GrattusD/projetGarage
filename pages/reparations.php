<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon projet Garage</title>
    <link rel="stylesheet" href="../CSS/headerfooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/reparations.css">
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
                    <li class="selectedPage"><a href="../pages/reparations.php"> Carrosserie et Réparation </a></li>
                    <li><a href="../pages/occasion.php"> Véhicules d'occasion </a></li>
                    <li><a href="../pages/interne.php"> Interne </a></li>
                    <li><a href="../pages/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="bandeau shadow container-fluid">
            <div class="row">
                <div class="col-12">
                    <img src="../ressources/images/garage02.jpeg" class="img-fluid img-header" alt="voiture d'occasion">
                    <h1>Nous nous occupons de votre voiture</h1>
                    <p>L'entretien et la réparation de votre véhicules n'a jamais été aussi simple et accessible. Grâce à nos équipe de professionnels experts,
                        vous bénéficiez d'une grande qualité de travail sur votre voiture.
                        Nos nous occupons de véhicules de toutes marques et vous pouvez nous demander des devis rapidement à notre atelier.
                        Notre proximité et notre écoute vous garantissent un travail bien fait et qui correspond à vos besoins.
                        Découvrez maintenant toutes nos prestations:
                    </p>
                </div>
            </div>
        </div>
        
        <?php
        include_once'../../config.php';
        try{
            $offerspdo = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUsername, $dbPassword);
            foreach ($offerspdo->query('SELECT * FROM offers', PDO::FETCH_ASSOC)as $offer) {
                echo '<section class="card shadow">';
                echo '<h3 class="card-header">'.$offer['title'].'</h3>';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$offer['body'].'</h5>';
                echo '<ul class="card-text">';
                for ($i=1;$i<=4;$i++){
                    $offer_key = 'offer'.$i;
                    if(!empty($offer[$offer_key])){
                        echo '<li>'.$offer[$offer_key].'</li>';
                    }
                }
                echo '</ul> </div></section>';
                }
            }catch (PDOException $e) {
                    echo 'erreur lors de a connexion:'.$e->getMessage();
                }
                ?>

</main>
<?php
include_once '../php/footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
