
<?php
session_start();
include_once'../../config.php';

/*if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $form_type = $_SERVER['form_data_group'];
    if ($form_type == 'newEmployee'){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];

    }
}*/

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        $title = htmlspecialchars($_POST['title'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $body = htmlspecialchars($_POST['body'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $offer1 = htmlspecialchars($_POST['offer1'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $offer2 = htmlspecialchars($_POST['offer2'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $offer3 = htmlspecialchars($_POST['offer3'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $offer4 = htmlspecialchars($_POST['offer4'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

        
        /*préparation de la requête pour vérifier*/
        $connectionpdo = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUsername, $dbPassword);
        $connectionpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $sql = "INSERT INTO offers (title, body, offer1, offer2, offer3, offer4) VALUES
(:title, :body, :offer1, :offer2, :offer3, :offer4)";
    $stmt = $connectionpdo->prepare($sql);
    $stmt->execute([
        ':title'=>$title,
        ':body'=>$body,
        ':offer1'=>$offer1,
        ':offer2'=>$offer2,
        ':offer3'=>$offer3,
        ':offer4'=>$offer4,
    ]);
    echo "enregistrement ajouté avec succès !";
    header('Location: ../pages/adminparrot.php');
    }
}catch(PDOException$e){
    echo 'Erreur de connection à la Base de donnée : '.$e->getMessage();
    exit;
} finally{
        $connectionpdo = null;
}

    /*essai de requête préparée
    $pdo_prep = $pdo->prepare("INSERT INTO offers (title, body, offer1, offer2, offer3, offer4) VALUES ('?','?','?','?','?','?');");
    pdo_prep->execute([$title, $body, $offer1, $offer2, $offer3, $offer4]);
    */