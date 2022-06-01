<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "finalwad2");

  // Initialize message variable
  $msg = "";    

  //Function

  function isFileAllowed($file){
    $allowed_files = array('jpg', 'jpeg', 'png');
    $fileName = $file;
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    if(in_array($fileActualExt ,$allowed_files)){
        return true;
    }
    else {
        header("Location: /Finals-Project/profile.php?error=FileTypeError");
        exit();
    }

}

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];

		if(isFileAllowed($image) == true){
			$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
			$image_title = mysqli_real_escape_string($db, $_POST['image_title']);
			$image_text = trim($image_text);
			$image_title = trim($image_title);
			
			
			$newFileName = uniqid('', true).".".$fileActExt;
			  // image file directory
			  $target = "images/".$newFileName;
		
			  $sql = "INSERT INTO images (image, image_text, image_title) VALUES ('$image', '$image_text', '$image_title')";
			  // execute query
			  mysqli_query($db, $sql);
		
			  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
				  $msg = "Image uploaded successfully";
			  }else{
				  $msg = "Failed to upload image";
			  }
		}

  	// Get text


  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>