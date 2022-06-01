<?php
session_start();
// if (!isset($_SESSION['email'])){
//     header("Location: login.php");
//   }
include 'includes/config.php';
include 'header.php'; 
require 'handlers/upload_post.php';
require 'handlers/check_session.php';

$user_data = check_login($conn);

?>  
             <div id="left" class="column">
                <div class="top-left">
                    <?php include 'sidebar.php';?>
                </div>
                <div class="bottom"></div>
            </div>
            
            <!--
            
            <div id="right" class="column">

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
             -->
        <div class="form-wrapper">
            <form action="profile.php" method="post" enctype="multipart/form-data" id="main-form-container">
                <div class="form-block form-title">
                    <label for="title">Title of the Photo</label>
                    <input type="text" name="image_title" id="title-field" required>
                </div>
                
                <div class="form-block form-text">
                    <label for="text">Description</label>
                    <textarea name="image_text" id="text-desc-field" cols="30" rows="13"></textarea>
                </div>

                <div class="form-block form-image">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="choose-file-btn" required>
                    <div class="error">
                        <?php
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "FileTypeError"){
                                echo '<p style="width: 100%; padding: 10px; text-align: center; color: #842029; background-color: #F8D7DA;">File type is not allowed, Please select an image file.</p>';
                            }
                        }
                        ?>
                        </div>
                    <button type="submit" name="upload" id="upload-btn">Upload</button>
                </div>
            </form> 
        </div>





    </body>
</html>
