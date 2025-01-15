<?php

namespace App\Controller;
use phpDocumentor\Reflection\Location;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nom = $_POST['name'];
    $prenom = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    header('Location: /connexion');
    exit();
}


?>