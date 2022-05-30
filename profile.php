
<?php
session_start();
// if (!isset($_SESSION['email'])){
//     header("Location: login.php");
//   }
include 'includes/config.php';
include 'header.php'; 
require 'handlers/check_session.php';
$user_data = check_login($conn);

?>  

?>
        <div id="left" class="column">
            <div class="top-left">
                
                
                <?php include 'sidebar.php';?>
                 
                
            </div>
            <div class="bottom"></div>
        </div>
        <div id="right" class="column">
            <div class="top-right">
                
            </div>
            <div class="bottom">
                <div class="content">
                    
                        <div id="content_home">
                            <div class="upload_area">
                                <div class="title_area">
                                    <h4>Title of photo</h4> <br> 
                                    <input type="title" class="form-control" placeholder="Title" id="inputDefault"><br>
                                    
                            
                                </div>
                                <div class="description">
                                    
                                    <h4> Description of photo</h4>
                                    <textarea type="description" class="form-control" placeholder="Description" id="inputDefault"></textarea>
                                </div>
                                
                            </div>

                            <div class="buttons">
                                <div class="button">
                                    <button type="upload" class="btn btn-primary">Select File</button>
                                </div>
            
                                <div class="button">
                                    <button type="upload" class="btn btn-primary">Upload</button>
                                </div>
                            </div>

                        </div>
                    
                </div> 
            </div>
        </div>


       
        
        
        
    </div>








</body>
</html>

?>