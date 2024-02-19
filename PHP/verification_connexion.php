<?php 
$username = $_POST['nom_utilisateur'];
$password = $_POST['mot_de_passe'];

$servername = "localhost";
$username_db = "root";
$password_db = "";
/*nom de base de données à ajouter*/
$dbname = "ecfgarageedouardmeyer"

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error){
    die("Echec de la connexion à la base de données : ".$conn->connect_error);
}

$sql = SELECT * FROM employees WHERE nom_utilisateur='$username' AND mot_de_passe='$password';
$result = $conn->query($sql);

il ($result->num_rows >0){
    echo'connexion_reussie";
} else {
    echo "connexion_echouee";
}

$conn->close();