<?php

if (isset($_POST["submit"])){
    
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["passwrd"];
    $password2 = $_POST["password2"];
    $success = false;

    require_once 'config.php';
    require_once 'functions.inc.php';

    
    if (emptyInputRegister($firstname, $lastname, $email, $password, $password2) !== false) {
        header("Location: ../login.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("Location: ../login.php?error=invalidemail");
        exit();
    }

    if (passwordMatch($password, $password2) !== false) {
        header("Location: ../login.php?error=passworddontmatch");
        exit();
    }

    if (userTaken($conn, $email) == true) {
        header("Location: ../login.php?error=userTaken");
        exit();
    }

    if(password_length($password) !== false) {
        header("Location: ../login.php?error=passwordlength");
        exit();
    }

    createUser($conn, $firstname, $lastname, $email, $password);



}

else {
    header("Location: ../login.php");
    exit();
}


