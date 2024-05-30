<?php
include_once'../../config.php';

try{
    /*on nettoie l'input de l'utilisateur avec injection*/
    /*$username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');*/
    $username = $_POST['username'];
    $password = $_POST['password'];
    /* une fonction qui filtre les données*/
    function filterForm($data) {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
    /*filterForm($username);
    filterForm($password);*/
    
    
    /*préparation de la requête pour vérifier*/
    $connectionpdo = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUsername, $dbPassword);
    $connectionpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    $pdo_prep= $connectionpdo->prepare('SELECT * FROM employees JOIN employeejob on employees.employeejob = employeejob.id WHERE username = ? AND password = ?');
    $pdo_prep->execute([$username,$password]);
    $user= $pdo_prep->fetch();
    
    if ($user) {
        if ($password === $user['password']) {
            /*login et password ok*/
            if ($user['status'] === "Admin") {
                header('location: ../pages/adminparrot.php');
                exit;
            } else {
                header('location: ../pages/page_interne.php');
            }
        } else {
            /*mauvais password*/
            echo "Nom d'utilisateur ou mot de passe incorrect";
        }
    } else {
        /*pas de username*/
        echo "Nom d'utilisateur ou mot de passe incorrect";
    }
} catch(PDOException$e){
    echo 'Erreur de connection à la Base de donnée : '.$e->getMessage();
    exit;
}
