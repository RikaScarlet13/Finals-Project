<?php
session_start();
include_once 'header.php';
date_default_timezone_set('Asia/Manila');
include './includes/comments.inc.php';


?>
<div id="left" class="column">
    <?php include 'sidebar.php'; ?>
</div>

<div id="right" class="column">

    <div class="bottom">
        <div class="content">

            <div class="nscontainer">
                <div class="col-md-12" id="fbcomment">

                    <div class="post_detail">
                        <img src="./images/postedimages/nct2020.jpg" class="upload-img">

                            <div class="likes-comment-preview">
                                <div class="likes-preview">
                                    <span onclick="myFunction(this)" class="fa fa-thumbs-up"></span>
                                    <span class="count-likes">26</span>
                                </div>

                                <div class="comment-share-preview">
                                    <span onclick="myFunction(this)" class="fa fa-comment-o"></span>
                                    <span>23 comments</span23>
                                    <span onclick="myFunction(this)" class="fa fa-share-square-o"></span>
                                    <span>23 shares</span23>

                                </div>
                            </div>

                        </div>

                        <div class="body_comment">
                            <div class="row">
                                <div class="avatar_comment col-md-1">
                                    <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
                                </div>

                                <div class="box_comment col-md-11">
                                    <textarea class="commentar" placeholder="Add a comment..."></textarea>
                                    <div class="box_post">
                                        <div class="pull-right">
                                            <span>
                                                <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
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
                                                <span aria-hidden="true">
                                                    ·
                                                </span>
                                                <a class="replay" href="#">Reply</a>
                                                <span aria-hidden="true">
                                                    ·
                                                </span>
                                                <i class="fa fa-thumbs-o-up"></i>
                                                <span class="count">1</span>
                                                <span aria-hidden="true">
                                                    ·
                                                </span>
                                                <span>26m</span>
                                            </div>
                                            <ul class="child_replay">
                                                <li class="box_reply row">
                                                    <div class="avatar_comment col-md-1">
                                                        <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
                                                    </div>

                                                    <div class="result_comment col-md-11">
                                                        <h4>Sugito</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                                        <div class="tools_comment">
                                                            <a class="like" href="#">Like</a>
                                                            <span aria-hidden="true">
                                                                ·
                                                            </span>
                                                            <a class="replay" href="#">Reply</a>
                                                            <span aria-hidden="true">
                                                                ·
                                                            </span>
                                                            <i class="fa fa-thumbs-o-up"></i>
                                                            <span class="count">1</span>
                                                            <span aria-hidden="true">
                                                                ·
                                                            </span>
                                                            <span>26m</span>
                                                        </div>
                                                        <ul class="child_replay"></ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </li>

                                                                <div class="result_comment col-md-11">
                                                                    <h4>Sugito</h4>
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
                                                                    <ul class="child_replay"></ul>
                                                                </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </li>
                                                    
                                                    <!-- Start List Comment 2 -->
                                                    <?php
                                                        if (isset($_SESSION['id'])){
                                                            echo "<form method='POST' action='".setComments($conn)."'>
                                                                <input type='hidden' name='username' value='".$_SESSION['id']."'>
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
                                                        <!-- <li class="box_result row">
                                                            <div class="avatar_comment col-md-1">
                                                            <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
                                                            </div>
                                                                <div class="result_comment col-md-11">
                                                                <h4>Gung Wah</h4>
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
                                                                <ul class="child_replay"></ul>
                                                                </div>
                                                        </li> -->
                                                </ul>
                                                <button class="show_more" type="button">Load 10 more comments</button>
                                            </div>

                                            
                                    <!-- Start List Comment 2 -->
                                    <li class="box_result row">
                                        <div class="avatar_comment col-md-1">
                                            <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
                                        </div>
                                        <div class="result_comment col-md-11">
                                            <h4>Gung Wah</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                                            <div class="tools_comment">
                                                <a class="like" href="#">Like</a>
                                                <span aria-hidden="true">
                                                    ·
                                                </span>
                                                <a class="replay" href="#">Reply</a>
                                                <span aria-hidden="true">
                                                    ·
                                                </span>
                                                <i class="fa fa-thumbs-o-up"></i>
                                                <span class="count">1</span>
                                                <span aria-hidden="true">
                                                    ·
                                                </span>
                                                <span>26m</span>
                                            </div>
                                            <ul class="child_replay"></ul>
                                        </div>
                                    </li>
                                </ul>
                                <button class="show_more" type="button">Load 10 more comments</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        




        
    </body>
</html>
