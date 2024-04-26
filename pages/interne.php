<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon projet Garage</title>
    <link rel="stylesheet" href="/CSS/headerfooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/CSS/interne.css">
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
                    <li><a href="/../index.php"> Accueil </a></li>
                    <li><a href="/pages/reparations.php"> Carrosserie et Réparation </a></li>
                    <li><a href="/pages/occasion.php"> Véhicules d'occasion </a></li>
                    <li class="selectedPage"><a href="/pages/interne.php"> Interne </a></li>
                    <li><a href="/pages/contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

<main>
    <div>
        <form action="/PHP/verification_connexion.php" method="post" id="form_connexion">
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

<script src="/Scripts/connexion.js" type="module"></script>
</body>

</html>