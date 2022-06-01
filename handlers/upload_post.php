<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "finalwad2");

  // Initialize message variable
  $msg = "";    

  //Function

  function isFileAllowed($file){
    $allowed_files = array('jpg', 'jpeg', 'png', 'gif');
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
	$current_user = $_SESSION['username'];

		if(isFileAllowed($image) == true){
			$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
			$image_title = mysqli_real_escape_string($db, $_POST['image_title']);
			$image_text = trim($image_text);
			$image_title = trim($image_title);

			$fileN = $image;
			$fileExt = explode('.', $fileN);
			$fileActExt = strtolower(end($fileExt));
			$newFileName = uniqid('', true).".".$fileActExt;
			  // image file directory
			  $target = "images/".$newFileName;
		
			  $sql = "INSERT INTO post (image, title, description, author) VALUES ('$newFileName', '$image_title', '$image_text', '$current_user')";
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
//   $result = mysqli_query($db, "SELECT * FROM post");
?>