<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon projet Garage</title>
    <link rel="stylesheet" href="/CSS/headerfooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/CSS/reparations.css">
</head>

<body>
    <header>
        <div class="topbar">
            retrouvez nos dernières offres
        </div>
        <div class="container flex">
            <div>
                <img class="logoParrot" src="/ressources/images/logogarageVParrot01.png" alt="logo garage V.Parrot">
            </div>

            <nav>
                <ul class="flex">
                    <li><a href="../index.php"> Accueil </a></li>
                    <li class="selectedPage"><a href="/pages/reparations.php"> Carrosserie et Réparation </a></li>
                    <li><a href="/pages/occasion.php"> Véhicules d'occasion </a></li>
                    <li><a href="/pages/interne.php"> Interne </a></li>
                    <li><a href="/pages/contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="bandeau shadow container-fluid">
            <div class="row">
                <div class="col-12">
                    <img src="/ressources/images/garage02.jpeg" class="img-fluid img-header" alt="image voiture d'occasion">
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
        include('../../config.php');
            try{
                $offerspdo = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUsername, $dbPassword);
                foreach ($offerspdo->query('SELECT * FROM offers', PDO::FETCH_ASSOC)as $offer) {
                    echo '<section class="card shadow">';
                    echo '<h3 class="card-header">'.$offer['title'].'</h3>';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">'.$offer['body'];
                    echo '</h5>';
                    echo '<ul class="card-text>';
                    for ($i=1;$i<=4;$i++){
                        $offer_key = 'offer'.$i;
                        if(!empty($offer[$offer_key])){
                            echo '<li>'.$offer[$offer_key].'</li>';
                        }
                    }
                }}catch (PDOException $e) {
                    echo 'erreur lors de a connexion:'.$e->getMessage();
            }
        ?>

        <section class="card shadow">
            <h3 class="card-header">
                Freinage
            </h3>
            <div class="card-body">
                <h5 class="card-title">
                    Pour la sécurité de votre voiture et la vôtre, les éléments de freinage doivent être en parfait état de fonctionnement.
                </h5>
                <ul class="card-text">
                    <li>Changement de plaquettes</li>
                    <li>Remplacement du kit de frein</li>
                    <li>Remplacement des disques de frein</li>
                    <li>Remplacement du liquide de frein</li>
                </ul>
            </div>
        </section>

        <section class="card shadow">
            <h3 class="card-header">
                Freinage
            </h3>
            <div class="card-body">
                <h5 class="card-title">
                    Pour la sécurité de votre voiture et la vôtre, les éléments de freinage doivent être en parfait état de fonctionnement.
                </h5>
                <ul class="card-text">
                    <li>Changement de plaquettes</li>
                    <li>Remplacement du kit de frein</li>
                    <li>Remplacement des disques de frein</li>
                    <li>Remplacement du liquide de frein</li>
                </ul>
            </div>
        </section>

        <section class="card shadow">
            <h3 class="card-header">
                Freinage
            </h3>
            <div class="card-body">
                <h5 class="card-title">
                    Pour la sécurité de votre voiture et la vôtre, les éléments de freinage doivent être en parfait état de fonctionnement.
                </h5>
                <ul class="card-text">
                    <li>Changement de plaquettes</li>
                    <li>Remplacement du kit de frein</li>
                    <li>Remplacement des disques de frein</li>
                    <li>Remplacement du liquide de frein</li>
                </ul>
            </div>
        </section>

    </main>


    <footer>
        <div class="footer-container flex">
            <div id="timetable" class="footer-col">
                <h2>horaires d'ouverture</h2>
                <table >
                    <thead>
                        <tr>
                            <th>Jour</th>
                            <th colspan="2">Matin</th>
                            <th colspan="2">Après-midi</th>
                <?php   
                    include('../../config.php');
                    /*construction de la table des horaires avec php*/
                    try{
                        $horairespdo = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUsername, $dbPassword);
                        foreach ($horairespdo->query('SELECT jour, okam, DATE_FORMAT(opentimeam, "%H:%i") as opentimeam, DATE_FORMAT(closetimeam, "%H:%i") as closetimeam, okpm, DATE_FORMAT(opentimepm, "%H:%i") as opentimepm, DATE_FORMAT(closetimepm, "%H:%i") as closetimepm FROM timetable', PDO::FETCH_ASSOC) as $dayopentime) {
                            echo '<tr>';
                            echo '<td>'.$dayopentime['jour'].' : '.'</td>';
                            echo '<td>';
                            if ($dayopentime['okam']!==0){
                                echo $dayopentime['opentimeam'].' -'.'</td>'.'<td>'.$dayopentime['closetimeam'];
                            } else{
                                echo 'Fermé'.'</td>'.'<td>';
                            }
                            echo '</td>';
                            echo '<td>';
                            if ($dayopentime['okpm']!==0){
                                echo $dayopentime['opentimepm'].' -'.'</td>'.'<td>'.$dayopentime['closetimepm'];
                            } else{
                                echo 'Fermé'.'</td>'.'<td>';
                            }
                            echo'</td>';
                            echo '</tr>';
                        }} catch (PDOException $e) {
                        echo 'erreur lors de la connexion';
                    }
                    ?>
                </table>
            </div>
            <div id="Garagemap" class="footer-col">
                <h2>Notre Adresse</h2>
                <p>123 rue Henri Dunant, 31000 Toulouse</p>
                <p>Tél: 05 25 25 25 XX</p>
                <div class="flex garage-map">
                    <img src="/ressources/images/plan_garage.png" alt="plan de la ville">
                </div>
            </div>
            <div class="footer-col">
                <h2>Notre Garage</h2>
                <ul>
                    <li><a href="">Qui sommes-nous?</a></li>
                    <li><a href="">Notre équipe</a></li>
                    <li><a href="">
                            <p>Mentions légales
                        </a></li>
                    <li><a href="">
                            <p>Connexion
                        </a></li>
                </ul>
                <div class="social-icons">
                    <img src="/ressources/images/facebook-logo.png" alt="logo facebook">
                    <img src="/ressources/images/instagram-logo.png" alt="logo Instagram">
                </div>
            </div>
        </div>
    </footer>
</body>

</html>