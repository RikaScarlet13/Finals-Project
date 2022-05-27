<?php
    include_once 'header.php';  

?>
        <div id="left" class="column">
            <div class="top-left">
                <div class="sidebar">
                
                <?php include 'sidebar.php';?>
                 
                </div>
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
                                    <h4> Description of photo</h4>
                            
                                </div>
                                <div class="description">
                                    
                                    <input type="title" class="form-control" placeholder="Title" id="inputDefault"><br>
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