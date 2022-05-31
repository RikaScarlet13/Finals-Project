<?php
function check_login($conn){

    if(isset($_SESSION['email']))
    {
        $ID = $_SESSION['email'];
        $query = "select * from users where email = '$ID' limit 1"; 

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
        
    }
    //redirect to index
    header("Location: login.php");
    
}
?>