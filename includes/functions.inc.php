<?php

require_once 'config.php';
function emptyInputRegister ($firstname, $lastname, $email, $password, $password2) {
    
    $result;

    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($password2)  ) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function invalidEmail($email) {
    
    $result;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $password2) {
    
    $result;

    if ($password !== $password2) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function userTaken($conn, $email) {
    // checks database
    $check_user= mysqli_query($conn, "SELECT * FROM users where email='{$email}'");
    // arnold_bautista

    $i=0;    
    while(mysqli_num_rows($check_user) > 0) {
        $i++;
        $email = $email . $i;  
        $check_user= mysqli_query($conn, "SELECT * FROM users where email='{$email}'");
        return true;
}
}

function createUser($conn, $firstname, $lastname, $email, $password) {
    // insert data into database
    

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    // Reads the statement if its true
    $sql = "insert into users value('','$firstname', '$lastname','$email', MD5('$password'))";

        mysqli_query($conn,$sql);

        $success= true;
        header("Location: ../login.php");
        exit();
}

function password_length($password) {
    $result;

    if (strlen($password) < 8) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


// ==== POST VALIDATION =====

