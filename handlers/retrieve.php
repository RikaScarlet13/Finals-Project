<?php

// require './includes/config.php';

if(isset($_POST['getData'])) {
    $db_conn = mysqli_connect('localhost', 'root', '', 'finalwad2');

    $start = $db_conn->real_escape_string($_POST['start']);
    $limit = $db_conn->real_escape_string($_POST['limit']);

    $sql = $db_conn->query("SELECT * FROM post LIMIT $start,$limit");
    if($sql->num_rows > 0){
        $response = "";

        while($data = $sql->fetch_assoc()) {
            $response .= '
            <div class="main-wrap">
                <div class="post-container">
                    <div class="post-texts">
                        <span class="post-title">'.$data['title'].'</span>
                        <span class="post-author">'.$data['author'].'</span>
                    </div>
            
                    <p class="post-description">'.$data['description'].'</p>
                    <div class="image-container">
                        <img src="images/'.$data['image'].'" class="img" alt="">
                    </div>
            
                    <button type="button" onclick="#" class="see-btn">See more on this post</button>
                </div>
                
            </div>
            ';
        }
    }

    exit($response);
} else {
    exit('reachedMax');
}



?>