<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .post-container {
            /* border: 1px solid red; */
            box-shadow: 0px 0px 10px 1px #d2d2d2;
            max-width: 700px;
            margin: auto;
            padding: 20px 30px;
        }

        .image-container {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        .img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            /* margin: 10px 0px; */
            border: 3px solid rgb(255, 255, 255);
        }

        .post-texts {
            display: flex;
            flex-direction: column;
            margin: 10px 0px;
        }

        .post-title {
            font-size: 1.8em;
            font-weight: 800;
            
        }
        
        .post-title, .post-author{
            /* border: 1px solid red; */
            padding: 2px 10px;
        }

        .post-description {
            padding: 10px;
        }
        .see-btn {
            border: none;
            padding: 15px;
            margin: 8px 0px;
            text-decoration: none;
            background-color: #4064AC;
            width: 100%;
            color: white;
            font-weight: 600;
            border-radius: 6px; 
        }
        
        .see-btn:hover{
            cursor: pointer;
            background-color: #7F97C7;

        }



    </style>
</head>
<body>
    
<div class="post-container">
    <div class="post-texts">
        <span class="post-title">Yehey!</span>
        <span class="post-author">Harold Gallego</span>
    </div>

    <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, exercitationem?</p>
    <div class="image-container">
        <img src="images/6296feea72b933.81209875.jpg" class="img" alt="">
    </div>

    <button type="button" onclick="#" class="see-btn">See more on this post</button>
</div>



</body>
</html>