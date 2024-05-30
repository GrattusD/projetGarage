
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
                include_once'../../config.php';
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
                    }
                } catch (PDOException $e) {
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
                <img src="../ressources/images/plan_garage.png" alt="plan de la ville">
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
                <img src="../ressources/images/facebook-logo.png" alt="logo facebook">
                <img src="../ressources/images/instagram-logo.png" alt="logo Instagram">
            </div>
        </div>
    </div>
</footer>
