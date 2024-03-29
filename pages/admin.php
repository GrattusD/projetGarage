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
    <h1>Bonjour M. Parrot,</h1>
    <p>que souhaitez-vous faire aujourd'hui?</p>

    <form action="">
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
    </form>

</main>







    <footer>
        <div class="footer-container flex">
            <div id="timetable" class="footer-col">
                <h2>horaires d'ouverture</h2>
                <table>
                    <tr>lundi : </tr>
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