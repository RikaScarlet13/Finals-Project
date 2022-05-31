<?php
include "./includes/config.php";


function setComments($conn) {
    if (isset($_POST['commentSubmit'])) {
        $user_id = $_POST['username'];
        $date = $_POST['date'];
        $comment = $_POST['comment'];


        $sql = "INSERT INTO comments (username, date, comment) VALUES ('$user_id', '$date', '$comment')";
        $result = $conn->query($sql);
    }




}

function getComments($conn){
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    
    while ($row = $result->fetch_assoc()) {
        
        $id = $row['first_name'];
        $sql2 = "SELECT * FROM users WHERE id='$id'";
        $result2 = $conn->query($sql2);
        
        if ($row2 = $result2->fetch_assoc()) {
            echo "<div class= 'comment-box' >";
                echo "<div class = userfont";
                    echo $row2['id']."<br>";
                    echo $row['date']."<br>";
                echo "</div>";
            echo "<p>";
                echo nl2br($row['comment']);
            
            echo "</p></div>";
        }
        
        

    }
    
    

}





