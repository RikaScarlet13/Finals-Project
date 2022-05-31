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
        <div id="left" class="column">
            <?php include 'sidebar.php';?>
        </div>
        <div id="right" class="column">
            <div class="top-right">
                
            </div>
            <div class="bottom">
                <div class="content">
                    
                        <div class="nscontainer">

                <div class="post-body">
                    <div class="title">
                        <div class="d-flex justify-content-between p-2 px-3">
                            <div class="d-flex flex-column ml-2">
                                <span class="font-weight-bold">Mr. Cheddar</span>
                            </div>
                        </div>
                        <div class="d-flex flex-row mt-1 ellipsis">
                            <small class="mr-2">20 mins</small>
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                        <div class="p-2">
                            <p class="text-justify">Hello! My name is Cheddar! And i am a 1 year old french bull doggo. Nice to meet you all! &#128512; &#128525;</p>
                        </div>


                        <div class="profile"></div>
                    </div>
                    <div class="mainpicture">
                        <div class="picturesize">
                            <img src="./images/postedimages/CHEDDONKEY.jpg" alt="postedpicture">
                        </div>

                            <div class="user-info">


                                <div class="likes-comment-share-icons">

                                    <div class="commentsec">
                                        <div class="likes-comment-preview">
                                        <div class="likes-preview">
                                                <span  onclick="myFunction(this)" class="fa fa-thumbs-up"></span>
                                                <span class="count-likes">26</span>
                                            </div>

                                            <div class="comment-share-preview">
                                                <span  onclick="myFunction(this)" class="fa fa-comment-o"></span>
                                                <span>23 comments</span23>
                                                    <span  onclick="myFunction(this)" class="fa fa-share-square-o"></span>
                                                    <span>23 shares</span23>

                                            </div>
                                        </div>
                                        
                                        <div class="comment">
                                            <div class="body_comment">
                                                <div class="row">
                                                    <div class="avatar_comment col-md-1">
                                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
                                                    </div>
                                                    <div class="box_comment col-md-11">
                                                    <textarea class="commentar" placeholder="Add a comment...">

                                                    </textarea>
                                                    <div class="box_post">
                                                        <div class="pull-right">
                                                            <span>
                                                            <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar" />
                                                            <i class="fa fa-caret-down"></i>
                                                            </span>
                                                            <button onclick="submit_comment()" type="button" value="1">Post</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                                <div class="row">
                                                    <ul
                                                        id="list_comment" class="col-md-12">
                                                        <!-- Start List Comment 1 -->
                                                        <li class="box_result row">
                                                            <div class="avatar_comment col-md-1">
                                                                <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
                                                            </div>

                                                            <div class="result_comment col-md-11">
                                                                <h4>Nath Ryuzaki</h4>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                                                <div class="tools_comment">
                                                                    <a class="like" href="#">Like</a>
                                                                    <span aria-hidden="true"> · </span>
                                                                    <a class="replay" href="#">Reply</a>
                                                                    <span aria-hidden="true"> · </span>
                                                                    <i class="fa fa-thumbs-o-up"></i> <span class="count">1</span> 
                                                                    <span aria-hidden="true"> · </span>
                                                                    <span>26m</span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        
                                        <a href="post.php">Load post</a>

                                    </div>


                                </div>


                            </div>


                        </div>
                            </div>
<a href="post.php">Load post</a>
                            
                            </div>
                            
                            
                                
                            </div>




                            </div>
                            

            </div>


        </body>
    </html>
