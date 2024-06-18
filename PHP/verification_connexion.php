<?php
session_start();
include_once'../../config.php';

try{
    if ($_SERVER['REQUEST_METHOD']=='POST'){

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
                $fullName = $user['prenom'].' '.$user['nomfamille'];
                /*creation de token*/
                $token = bin2hex(random_bytes(32));
                $connectionpdo->exec("UPDATE employees SET token = '$token' where username = '$username'");
                setcookie('token', $token, time() + 3600, '/');
                if ($user['status'] === "Admin") {
                    /*initialisation de la session administrateur */
                    
                    $_SESSION['admin'] = true;
                    setcookie('user', 'admin', time() + 3600,"/");
                    setcookie('fullname', $fullName , time()+3600, "/");
                    header('location: ../pages/adminparrot.php');
                    exit;

                } else {
                    setcookie('user', 'employee', time() + 3600,"/");
                    setcookie('username', $fullName , time()+3600,"/");
                    header('location: ../pages/page_interne.php');
                    exit;
                }
            } else {
                /*mauvais password*/
                echo "Nom d'utilisateur ou mot de passe incorrect";
                echo "<a href='javascript:history.back()'>Retour</a>";
            }
        } else {
            /*pas de username*/
            echo "Nom d'utilisateur ou mot de passe incorrect<br>";
            
            echo "<button type='button'>";
            echo "<a href='javascript:history.back()'>Retour</a>";
            echo "</button>";
        }
    }
} catch(PDOException$e){
    echo 'Erreur de connection à la Base de donnée : '.$e->getMessage();
    exit;
}
