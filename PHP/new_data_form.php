
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $form_type = $_SERVER['form_data_group'];
    if ($form_type == 'newEmployee'){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];

    }
}
