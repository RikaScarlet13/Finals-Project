<!-- CREATE TABLE comments (
commentid int(11) not null AUTO_INCREMENT PRIMARY KEY,
user_id varchar(128) not null,
date datetime not null,
comment TEXT not null

); -->

<?php
    date_default_timezone_set('Asia/Manila');
    include './includes/comments.inc.php';
    include './includes/config.php';
   
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

<?php
    if (isset($_SESSION['first_name'])){
        echo "<form method='POST' action='".setComments($conn)."'>
            <input type='hidden' name='username' value='".$_SESSION['first_name']."'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name ='comment'></textarea>
            <br>
            <button type='submit' name='commentSubmit'>Comment</button>
        </form>";
    } else {
        echo "you need to be logged in";
}
getComments($conn);

?>


</body>
</html>