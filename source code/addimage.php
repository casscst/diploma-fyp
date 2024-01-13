<?php 
include("config.php"); 
 
if(isset($_POST['but_upload'])){ 
  
  $name = $_FILES['file']['name']; 
  $target_dir = "upload/"; 
  $target_file = $target_dir . basename($_FILES["file"]["name"]); 
 
  // Select file type 
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
 
  // Valid file extensions 
  $extensions_arr = array("jpg","jpeg","png","gif"); 
 
  // Check extension 
  if( in_array($imageFileType,$extensions_arr) ){ 
     // Upload file 
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){ 
        // Insert record 
        $query = "insert into poster(image) values('".$name."')"; 
        mysqli_query($conn,$query); 
     } 
 
  } 
  
} 
?> 
<html>
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            /* Global styles */
            
           .center {                
                margin-left: auto;
                margin-right: auto;
                width: 300px;
            }
        </style>
    </head>
<body class="w3-black">
	<div class="w3-container">
		<h1 style="color: white; text-align: center">Upload Student Event Poster</h1></br>
		<form class="center" method="post" action="" enctype='multipart/form-data'> 
		  <input type='file' name='file' /></br>
		  <input type='submit' value='Submit' name='but_upload'></br>
		  <a href="displayimg.php">Poster</a>
		</form>
	</div>
</body>
</html>
