<?php
session_start();
require '../includes/config.php';
if (isset($_SESSION['email'])){
    header("Location: /Finals-Project/newsfeed.php");
}

if (isset($_POST['email']))
{
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM users WHERE email=\"{$email}\"";
    $result = mysqli_query($conn, $query);

    if($result){
        if($result && mysqli_num_rows($result) > 0){
            $returned_row = mysqli_fetch_assoc($result);
            if($returned_row['password'] === md5($password)){
                $_SESSION['id'] = $returned_row['id'];
                $_SESSION['username'] = $returned_row['username'];
                header("Location: /Finals-Project/newsfeed.php");
                die;
            }
            else{
                echo '
                    <script type="application/javascript">
                        alert(\'Incorrect Username or Password\');
                    </script>
                ';
            }
        }else {
            echo '
            <script type="application/javascript">
                alert(\'Incorrect Username or Password\');
            </script>
        ';
        }
    }

}
?>