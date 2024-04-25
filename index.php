<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon projet Garage</title>
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="/../index.html"> Accueil </a></li>
                    <li><a href="/pages/reparations.html"> Carrosserie et Réparation </a></li>
                    <li><a href="/pages/occasion.html"> Véhicules d'occasion </a></li>
                    <li><a href="/pages/interne.html"> Interne </a></li>
                    <li><a href="/pages/contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="herosection flex">
            <div class="heropic flex">
                <img src="/ressources/images/responsableGarage.jpg" alt="M.Parrot responsable du garage">
            </div>
            <div class="column">
                <h1 class="herotitle">L'Excellence Automobile à Toulouse depuis 2021</h1>
                <div class="herotext flex">
                    <p>Depuis 2021, le Garage V. Parrot à Toulouse offre 15 ans d'expertise dévouée. Réparation
                        automobile, entretien personnalisé, vente de véhicules d'occasion : confiez-nous votre voiture,
                        elle
                        mérite l'excellence."</p>
                </div>
            </div>
        </div>
        <br>
        <div class="section flex">
            <img src="" alt="voiture et garagiste">
            <h2>réparations</h2>
            <p>Pour une réparation, l'entretien de cotre véhicules ou pour améliorer votre voiture, vous pouvez compter sur notre équipe expérimentée pour prendre soin de votre véhicule.
                Retrouvez l'ensemble de notre offre.
            </p>
        </div>
        <br>
        <div class="section flex">
            <img src="" alt="voiture et garagiste">
            <h2>véhicules d'occasion</h2>
            <p>Découvrez toute une gamme de véhicules d'occasion que nous avons pris soin de préparer pour vous! Vous trouverez votre bonheur dans notre garage.</p>
        </div>
        <br>
    </main>

    <footer>
        <div class="footer-container flex">
            <div id="timetable" class="footer-col">
                <h2>horaires d'ouverture</h2>
                <?php   
                    /*essai avec pdo */
                    try{
                        $horairespdo = new PDO('mysql:host=localhost;dbname=ecfgarage', 'root', '');
                        foreach ($horairespdo->query('SELECT jour, okam, DATE_FORMAT(opentimeam, "%H:%i") as opentimeam, DATE_FORMAT(closetimeam, "%H:%i") as closetimeam, okpm, DATE_FORMAT(opentimepm, "%H:%i") as opentimepm, DATE_FORMAT(closetimepm, "%H:%i") as closetimepm FROM timetable', PDO::FETCH_ASSOC) as $dayopentime) {
                            echo $dayopentime['jour'].' : ';
                            if ($dayopentime['okam']!==0){
                                echo $dayopentime['opentimeam'].'  '.$dayopentime['closetimeam'];
                            } else{
                                echo 'Fermé';
                            }
                            echo ' | ';
                            if ($dayopentime['okpm']!==0){
                                echo $dayopentime['opentimepm'].'  '.$dayopentime['opentimepm'].'</br>';
                            } else{
                                echo 'Fermé.</br>';
                            }
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