<?php
        session_start();
        unset($_SESSION["id"]);
<<<<<<< HEAD
        unset($_SESSION["email"]);
        session_destroy();
        header("Location: login.php");
=======
        unset($_SESSION["name"]);
        session_destroy();
        header("Location:login.php");
>>>>>>> fb16164 (add handlers)
        die();  

?>